<?php
class ControllerApiCustomer extends Controller {
	public function register(){

		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
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
						$json['message'] = $this->language->get('error_email');
						$json['status''] = 'error';
					}
					else{
					$customer_id = $this->model_account_customer->addCustomer($_POST);
					$json['data'] = $this->model_account_customer->getCustomer($customer_id);					
					$json['message'] = $this->language->get('text_success');
					$json['status''] = 'success';
					}
				}
				else{
					$json['message'] = $this->language->get('error_password');
					$json['status''] = 'error';
				}
			}
			else{
				$json['message'] = $this->language->get('problem_with_signup');
				$json['status''] = 'error';
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
	public function login(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
			if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
				// Check how many login attempts have been made.
				$login_info = $this->model_account_customer->getLoginAttempts($this->request->post['email']);

				if ($login_info && ($login_info['total'] >= $this->config->get('config_login_attempts')) && strtotime('-1 hour') < strtotime($login_info['date_modified'])) {
					$json['message'] = $this->language->get('error_attempts');
					$json['status''] = 'error';
				}

				// Check if customer has been approved.
				$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

				if ($customer_info && !$customer_info['status']) {
					$json['status''] = 'error';
					$json['message'] = $this->language->get('error_approved');
				}

				if (!$this->error) {
					if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
						$json['status''] = 'error';
						$json['message'] = $this->language->get('error_login');
						$this->model_account_customer->addLoginAttempt($this->request->post['email']);
					} else {						
						$this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
						$json['status''] = 'success';
						$json['message'] = $this->language->get('text_success');
						$json['data'] = $customer_info;
					}
				}
			}
			else{
				$json['status''] = 'error';
				$json['message'] = $this->language->get('problem_with_login');
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
	public function forgot(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
			if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
				// Check if customer has been approved.
				$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

				if (!empty($customer_info)) {
					$token = token(40);
					$this->model_account_customer->editCode($this->request->post['email'], $token);
					$json['status''] = 'success';
					$json['message'] = $this->language->get('text_success');
					$json['data'] = array('token'=>$token);
				}else{
					$json['status''] = 'error';
					$json['message'] = $this->language->get('no_records_found');
				}
			}
			else{
				$json['status''] = 'error';
				$json['message'] = $this->language->get('problem_with_login');
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
	
	public function add_address(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$this->load->model('account/address');
		$json = array();
				if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
				        $_POST['lastname'] = '';
				        $_POST['company'] = '';
					$customer_id = $this->request->post['customer_id'];
					$data = $this->request->post;					
					if($data['address_id']){
						$address_id = $data['address_id'];
						$editedAddress = $this->model_account_address->editAddress($address_id, $data);
						$json['message'] = $this->language->get('text_success');
						$json['data'] = $editedAddress;
						$json['status''] = 'success';						
					}
					else{
						$address_id = 0;
						$addedAddress = $this->model_account_address->addAddress($customer_id, $data);
						$json['message'] = $this->language->get('text_success');
						$json['data'] = $addedAddress;
						$json['status''] = 'success';						
					}

				}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function list_address(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$this->load->model('account/address');
		$json = array();		
			if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
				$customer_id = $this->request->post['customer_id'];
				
				$customer_address_details = $this->model_account_address->getAddressByCustomerId($customer_id);
				if(count($customer_address_details)>0){
					$json['status''] = 'success';
					$json['status''] = $this->language->get('text_success');
					$json['data'] = array('token'=>$customer_address_details);
				}
				else{
					$json['status''] = 'error';
					$json['message'] = $this->language->get('no_records_found');
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
				$json['status''] = 'success';
				$json['message'] = $this->language->get('text_delete');
			}
			else{
				$json['status''] = 'error';
				$json['message'] = $this->language->get('text_no_results');
			}
		}
		else{
			$json['status''] = 'error';
			$json['message'] = $this->language->get('text_no_results');
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
				$json['status''] = 'success';
				$json['message'] = $this->language->get('text_deactivate');
			}
			else{
				$json['status''] = 'error';
				$json['message'] = $this->language->get('already_deactivated');
			}
		}
		else{
			$json['message'] = $this->language->get('error_customer');
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
			    $json['status''] = 'success';
				$json['status''] = $this->language->get('text_success');
			}
			else{
				$json['status''] = 'error';
				$json['message'] = $this->language->get('Address already set as default!');
			}
		}
		else{
			$json['status''] = 'error';
			$json['message'] = $this->language->get('error_customer');
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
				'email' 	=> $this->request->post['email'],
				'lastname'	=> ''
			);
			$data['image'] = $this->request->files['image'];
			$allowed_extensions = array( "image/png", "image/jpg", "image/jpeg" );
			if(in_array( $data['image']['type'], $allowed_extensions ) && $data['image']['size']<=50000){
				$fileName = strtotime("now").$data['image']['name'];
				$target = DIR_IMAGE . 'catalog/profile_pic/';
				$fileTarget = $target.$fileName;
				$tempFileName = $_FILES["image"]["tmp_name"];
				
				$data['image'] = $fileName;

				$result = move_uploaded_file($tempFileName,$fileTarget);
				if($result){
					$customer_info = $this->model_account_customer->editCustomer($customer_id, $data);
					if($customer_info){
						$json['status'] = 'success';
						$json['message']= $this->language->get('text_success');
						$json['data']= $data;
					}
					else{
						$json['status'] = 'error';
						$json['message'] = $this->language->get('customer already updated');
					}
				}
				else{
					$json['status'] = 'error';
					$json['message'] = $this->language->get('Image not uploaded!');
				}
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('Image is not valid!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid customer!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function changePassword(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		if ($this->request->post['customer_id']) {
			$customer_id = $this->request->post['customer_id'];
			$new_password = $this->request->post['new_password'];
			$confirm_password = $this->request->post['confirm_password'];
			
			if($new_password == $confirm_password){
				$customer_info = $this->model_account_customer->editCustomerPassword($customer_id, $new_password);
				$json['status'] = 'success';
				$json['message']= $this->language->get('text_success');
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('Password does not match!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid customer!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	public function get_countries(){
			$this->load->language('api/customer');
			$this->load->model('localisation/country');
			$json = array();
			$country_info = $this->model_localisation_country->getCountries();			
			if($country_info){
				$json['status'] = 'success';
				$json['message']=$this->language->get('text_success');
				$json['data']=$country_info;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('customer already updated');
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	public function get_zone(){
			$this->load->language('api/customer');
			$this->load->model('localisation/zone');
			$json = array();
			$country_id 	= $this->request->post['country_id'];
			$country_info = $this->model_localisation_zone->getZonesByCountryId($country_id);
			if($country_info){
				$json['status'] = 'success';
				$json['message']=$this->language->get('text_success');
				$json['data']=$country_info;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('customer already updated');
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}