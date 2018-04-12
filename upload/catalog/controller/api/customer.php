<?php
class ControllerApiCustomer extends Controller {
	public function index() {
		$this->load->language('api/customer');

		// Delete past customer in case there is an error
		unset($this->session->data['customer']);

		$json = array();
		if (!isset($this->session->data['api_id'])) {
			$json['error']['warning'] = $this->language->get('error_permission');
		} else {
			// Add keys for missing post vars
			$keys = array(
				'customer_id',
				'customer_group_id',
				'firstname',
				'lastname',
				'email',
				'telephone',
			);

			foreach ($keys as $key) {
				if (!isset($this->request->post[$key])) {
					$this->request->post[$key] = '';
				}
			}

			// Customer
			if ($this->request->post['customer_id']) {
				$this->load->model('account/customer');

				$customer_info = $this->model_account_customer->getCustomer($this->request->post['customer_id']);

				if (!$customer_info || !$this->customer->login($customer_info['email'], '', true)) {
					$json['error']['warning'] = $this->language->get('error_customer');
				}
			}

			if ((utf8_strlen(trim($this->request->post['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['firstname'])) > 32)) {
				$json['error']['firstname'] = $this->language->get('error_firstname');
			}

			if ((utf8_strlen(trim($this->request->post['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32)) {
				$json['error']['lastname'] = $this->language->get('error_lastname');
			}

			if ((utf8_strlen($this->request->post['email']) > 96) || (!filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL))) {
				$json['error']['email'] = $this->language->get('error_email');
			}

			if ((utf8_strlen($this->request->post['telephone']) < 3) || (utf8_strlen($this->request->post['telephone']) > 32)) {
				$json['error']['telephone'] = $this->language->get('error_telephone');
			}

			// Customer Group
			if (is_array($this->config->get('config_customer_group_display')) && in_array($this->request->post['customer_group_id'], $this->config->get('config_customer_group_display'))) {
				$customer_group_id = $this->request->post['customer_group_id'];
			} else {
				$customer_group_id = $this->config->get('config_customer_group_id');
			}

			// Custom field validation
			$this->load->model('account/custom_field');

			$custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

			foreach ($custom_fields as $custom_field) {
				if ($custom_field['location'] == 'account') {
					if ($custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['custom_field_id']])) {
						$json['error']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
					} elseif (($custom_field['type'] == 'text') && !empty($custom_field['validation']) && filter_var($this->request->post['custom_field'][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/' . html_entity_decode($custom_field['validation'], ENT_QUOTES, 'UTF-8') . '/')))) {
						$json['error']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
					}
				}
			}

			if (!$json) {
				$this->session->data['customer'] = array(
					'customer_id'       => $this->request->post['customer_id'],
					'customer_group_id' => $customer_group_id,
					'firstname'         => $this->request->post['firstname'],
					'lastname'          => $this->request->post['lastname'],
					'email'             => $this->request->post['email'],
					'telephone'         => $this->request->post['telephone'],
					'custom_field'      => isset($this->request->post['custom_field']) ? $this->request->post['custom_field'] : array()
				);

				$json['success'] = $this->language->get('text_success');
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	public function register(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
		
		if (!isset($this->session->data['api_id'])) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}
		else{
			if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
				$_POST['lastname'] = '';
				$name = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$phone = $_POST['telephone'];
				$password = $_POST['password'];
				$confirmpassword = $_POST['confirmpassword'];
				if($password == $confirmpassword){
					$customer_email = $this->model_account_customer->getCustomerByEmail($email);
					if ($email == $customer_email['email']){
						$json['error'] = $this->language->get('error_email');
					}
					else{
					$customer_id = $this->model_account_customer->addCustomer($_POST);
					$json['data'] = $this->model_account_customer->getCustomer($customer_id);					
					$json['success'] = $this->language->get('text_success');
					}
				}
				else{
					$json['error'] = $this->language->get('error_password');
				}
			}
			else{
				$json['error'] = $this->language->get('problem_with_signup');
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
	public function login(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
		
		if (!isset($this->session->data['api_id'])) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}
		else{
			if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
				// Check how many login attempts have been made.
				$login_info = $this->model_account_customer->getLoginAttempts($this->request->post['email']);

				if ($login_info && ($login_info['total'] >= $this->config->get('config_login_attempts')) && strtotime('-1 hour') < strtotime($login_info['date_modified'])) {
					$json['error'] = $this->language->get('error_attempts');
				}

				// Check if customer has been approved.
				$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

				if ($customer_info && !$customer_info['status']) {
					$json['error'] = $this->language->get('error_approved');
				}

				if (!$this->error) {
					if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
						$json['error'] = $this->language->get('error_login');
						$this->model_account_customer->addLoginAttempt($this->request->post['email']);
					} else {						
						$this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
						$json['success'] = $this->language->get('text_success');
						$json['data'] = $customer_info;
					}
				}
			}
			else{
				$json['error'] = $this->language->get('problem_with_login');
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
	public function forgot(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
		
		if (!isset($this->session->data['api_id'])) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}
		else{
			if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
				// Check if customer has been approved.
				$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

				if (!empty($customer_info)) {
					$token = token(40);
					$this->model_account_customer->editCode($this->request->post['email'], $token);
					$json['success'] = $this->language->get('text_success');
					$json['data'] = array('token'=>$token);
				}else{
					$json['error'] = $this->language->get('no_records_found');
				}
			}
			else{
				$json['error'] = $this->language->get('problem_with_login');
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
	
	public function add_address(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$this->load->model('account/address');
		$json = array();
		
		$customer_id = $this->session->data['customer_id'];
		if(!empty($customer_id) && $customer_id != ""){
			if (!isset($this->session->data['api_id'])) {
				$json['error']['warning'] = $this->language->get('error_permission');
			}
			else{
				if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
					$data = $this->request->post;
					//echo '<pre>';print_r($data['address_id']);die;
					
					if($data['address_id']){
						$address_id = $data['address_id'];
					}
					else{
						$address_id = 0;
					}
					
					//list customer for match address_id
					$customer_address_details = $this->model_account_address->getAddressByCustomerId($customer_id);
					
					//address_id from address table
					$customerAddressId = $customer_address_details['address_id'];
					
					//customer_id from address table
					$customerId = $customer_address_details['customer_id'];
					
					if($customerId = $customer_id && $address_id != 0 && $customerAddressId != $address_id){
						$editedAddress = $this->model_account_address->editAddress($address_id, $data);
						$json['success'] = $this->language->get('text_success');
						$json['data'] = array('token'=>$editedAddress);
					}
					else{
						$addedAddress = $this->model_account_address->addAddress($customer_id, $data);
						$json['success'] = $this->language->get('text_success');
						$json['data'] = array('token'=>$addedAddress);
					}
				}	
			}
		}
		else{
			$json['error'] = $this->language->get('Invalid_customer');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function list_address(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$this->load->model('account/address');
		$json = array();
		
		if (!isset($this->session->data['api_id'])) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}
		else{
			if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
				$customer_id = $this->request->post['customer_id'];
				
				$customer_address_details = $this->model_account_address->getAddressByCustomerId($customer_id);
				if(count($customer_address_details)>0){
					$json['success'] = $this->language->get('text_success');
					$json['data'] = array('token'=>$customer_address_details);
				}
				else{
					$json['error'] = $this->language->get('no_records_found');
				}
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
	
	public function deleteAddress(){
		$this->load->language('account/address');
		$this->load->model('account/address');
		$json = array();
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$customer_id = $this->request->post['customer_id'];
			$address_id = $this->request->post['address_id'];
			
			$deleteAddress = $this->model_account_address->deleteAddress($address_id);
			if($deleteAddress == 1){
				$json['success'] = $this->language->get('text_delete');
			}
			else{
				$json['error'] = $this->language->get('text_no_results');
			}
		}
		else{
			$json['error'] = $this->language->get('text_no_results');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function deactivateCustomer(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$customer_id = $this->request->post['customer_id'];
			$status = $this->request->post['status'];
			$deactivateCustomer = $this->model_account_customer->deactivateCustomer($customer_id , $status);
			if($deactivateCustomer == 1){
				$json['success'] = $this->language->get('text_deactivate');
			}
			else{
				$json['error'] = $this->language->get('already_deactivated');
			}
		}
		else{
			$json['error'] = $this->language->get('error_customer');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function setDefaultAddress(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$address_id = $this->request->post['address_id'];
			$customer_id = $this->request->post['customer_id'];
			
			$defaultAddress = $this->model_account_customer->editAddressId($customer_id, $address_id);
			if($defaultAddress == 1){
				$json['success'] = $this->language->get('text_success');
			}
			else{
				$json['error'] = $this->language->get('Address already set as default!');
			}
		}
		else{
			$json['error'] = $this->language->get('error_customer');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function updateProfile(){
		if ($this->request->post['customer_id']) {
			$this->load->language('api/customer');
			$this->load->model('account/customer');
			$json = array();
			
			$customer_id 	= $this->request->post['customer_id'];
			$data = array(
				'firstname' => $this->request->post['firstname'],
				'telephone' => $this->request->post['telephone'],
				'email' 	=> $this->request->post['email']
			);
			$customer_info = $this->model_account_customer->editCustomer($customer_id, $data);
			if($customer_info){
				$json['success'] = 'success';
				$json['message']=$this->language->get('text_success');
			}
			else{
				$json['error'] = 'error';
				$json['message'] = $this->language->get('customer already updated');
			}
		}
		else{
			$json['error'] = 'error';
			$json['message'] = $this->language->get('Invalid customer!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}