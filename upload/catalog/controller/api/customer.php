<?php
class ControllerApiCustomer extends Controller {
	public function register(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
			if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
				$_POST['lastname'] = '';
				$name = $_POST['firstname'];
				$email = $_POST['email'];
				$phone = $_POST['telephone'];
				$password = $_POST['password'];
				$confirmpassword = $_POST['confirmpassword'];
				$fcm_id = $_POST['fcm_id'];
				$device_type = $_POST['device_type'];
				
					$customerByEmail = $this->model_account_customer->getCustomerByEmail($email);
					if(empty($customerByEmail)){
						$customer_id = $this->model_account_customer->addCustomer($_POST);
						$json['data'] = $this->model_account_customer->getCustomer($customer_id);
						$json['message'] = $this->language->get('customer_success');
						$json['status'] = 'success';
					}
					else{
						$json['status'] = 'error';
						$json['message'] = $this->language->get('Email is already exist!');
					}
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('problem_with_signup');
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
					$json['status'] = 'error';
				}

				// Check if customer has been approved.
				$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

				if ($customer_info && !$customer_info['status']) {
					$json['status'] = 'error';
					$json['message'] = $this->language->get('error_approved');
				}

				if (!$this->error) {
					if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
						$json['status'] = 'error';
						$json['message'] = $this->language->get('error_login');
						$this->model_account_customer->addLoginAttempt($this->request->post['email']);
					} else {						
						$this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
						$json['status'] = 'success';
						$json['message'] = $this->language->get('customer_logged_in');
						$json['data'] = $customer_info;
					}
				}
			}
			else{
				$json['status'] = 'error';
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
					$json['status'] = 'success';
					$json['message'] = $this->language->get('text_success');
					$json['data'] = array('token'=>$token);
				}else{
					$json['status'] = 'error';
					$json['message'] = $this->language->get('no_records_found');
				}
			}
			else{
				$json['status'] = 'error';
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
					$customer_id = $this->request->post['customer_id'];
					$data = $this->request->post;
					if(!empty($data['address_id']) && count($data['address_id']>0)){
						$data['lastname'] = '';$data['company'] = '';$data['address_2'] = '';
						$address_id = $data['address_id'];
						$editedAddress = $this->model_account_address->editAddress($address_id, $data);
						if($editedAddress == 1){
							$json['status'] = 'success';
							$json['message'] = $this->language->get('text_success');
						}
						else{
							$json['status'] = 'error';
							$json['message'] = $this->language->get('address_not_updated!');
						}
					}
					else{
						$address_id = 0;
						$data['lastname'] = '';$data['company'] = '';$data['address_2'] = '';
						$addedAddressId = $this->model_account_address->addAddress($customer_id, $data);
						if(count($addedAddressId)>0 && !empty($addedAddressId)){
							$json['status'] = 'success';
							$json['message'] = $this->language->get('address added succesfully!');
						}
						else{
							$json['status'] = 'error';
							$json['message'] = $this->language->get('address is not added!');
						}						
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
					$json['status'] = 'success';
					$json['data'] = $customer_address_details;
				}
				else{
					$json['status'] = 'error';
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
			$deleteAddress = $this->model_account_address->deleteAddress($address_id,$customer_id);
			if($deleteAddress == 1){
				$json['status'] = 'success';
				$json['message'] = $this->language->get('text_delete');
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('text_no_results');
			}
		}
		else{
			$json['status'] = 'error';
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
			if($customer_id != '' && $status !=''){
				$deactivateCustomer = $this->model_account_customer->deactivateCustomer($customer_id , $status);
				if($deactivateCustomer == 1){
					$json['status'] = 'success';
					$json['message'] = $this->language->get('text_deactivate');
				}
				else{
					$json['status'] = 'error';
					$json['message'] = $this->language->get('already_deactivated');
				}
			}
			else {
				$json['status'] = 'error';
				$json['message'] = $this->language->get('select customer or status!');
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
		$this->load->model('account/address');
		$json = array();
		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$address_id = $this->request->post['address_id'];
			$customer_id = $this->request->post['customer_id'];
			if($customer_id != '' && $address_id !=''){
				$fetchAllAddressId = $this->model_account_address->getAddressByCustomerId($customer_id);
				if($fetchAllAddressId != '' && count($fetchAllAddressId)>0){
					$defaultAddress = $this->model_account_customer->editAddressId($customer_id, $address_id);
					if($defaultAddress == 1){
					    $json['status'] = 'success';
						$json['message'] = $this->language->get('address has been set as default!');
					}
					else{
						$json['status'] = 'error';
						$json['message'] = $this->language->get('Address already set as default!');
					}
				}
				else{
					$json['status'] = 'error';
					$json['message'] = $this->language->get('No Address found!');
				}
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('select customer or address!');
			}
		}
		else{
			$json['status'] = 'error';
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
			if($this->request->files['image']!=''){
				$data['image'] = $this->request->files['image'];
				$allowed_extensions = array( "image/png", "image/jpg", "image/jpeg" );
				if(in_array( $data['image']['type'], $allowed_extensions ) && $data['image']['size']<=500000){
					$fileName = strtotime("now").$data['image']['name'];
					
					$target = DIR_IMAGE . 'catalog/profile_pic/';
					$fileTarget = $target.$fileName;
					$tempFileName = $_FILES["image"]["tmp_name"];
					$data['image'] = $fileName;
					$result = move_uploaded_file($tempFileName,$fileTarget);
				}
			}
			else{
				$data['image'] = '';
			}
			$customer_info = $this->model_account_customer->editCustomer($customer_id, $data);
			if($customer_info == 1){
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
			if($customer_id != '' && $new_password != '' && $confirm_password != ''){
				if($new_password == $confirm_password){
					$customer_info = $this->model_account_customer->editCustomerPassword($customer_id, $new_password);
					$json['status'] = 'success';
					$json['message']= $this->language->get('Password succesfully updated!');
				}
				else{
					$json['status'] = 'error';
					$json['message'] = $this->language->get('Password does not match!');
				}
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('Please select customer or enter password!');
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
	
	public function add_families(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
		$data = array(
			'customer_id' 	=> $this->request->post['customer_id'],
			'name' 			=> $this->request->post['name'],
			'relation' 		=> $this->request->post['relation'],
			'date_of_birth' => $this->request->post['date_of_birth'],
			'blood_group' 	=> $this->request->post['blood_group']
		);
		$addCustomerFamilies = $this->model_account_customer->addCustomerFamilies($data);
		if($addCustomerFamilies == 1){
			$json['status'] = 'success';
			$json['message']=$this->language->get('families_success');
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Families not Added!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function list_families(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
		if($this->request->post['customer_id']){
			$customer_id = $this->request->post['customer_id'];
			$listcustomerFamilies = $this->model_account_customer->listCustomerFamilies($customer_id);
			if(!empty($listcustomerFamilies) && count($listcustomerFamilies)>0){
				$json['status'] = 'success';
				$json['message']=$this->language->get('text_success');
				$json['data']=$listcustomerFamilies;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('No record found!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid Customer!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function update_families(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		$json = array();
		if($this->request->post['id']){
		$id = $this->request->post['id'];
		$data = array(
				'customer_id' 	=> $this->request->post['customer_id'],
				'name' 			=> $this->request->post['name'],
				'relation' 		=> $this->request->post['relation'],
				'date_of_birth' => $this->request->post['date_of_birth'],
				'blood_group' 	=> $this->request->post['blood_group']
		);
		$listAllCustomerFamilies = $this->model_account_customer->listAllCustomerFamilies($id, $data['customer_id']);
		if(!empty($listAllCustomerFamilies) && count($listAllCustomerFamilies)>0){
				$editCustomerFamilies = $this->model_account_customer->editCustomerFamilies($id, $data);
				if($editCustomerFamilies == 1){
					$json['status'] = 'success';
					$json['message']=$this->language->get('families_updated');
					$customerFamiliesData = $this->model_account_customer->listCustomerFamiliesById($id);
					$json['data'] = $customerFamiliesData;
				}
				else{
					$json['status'] = 'error';
					$json['message'] = $this->language->get('Customer Families already updated!');
				}
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('No Record found!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid Customer!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function delete_families(){
		$this->load->language('api/customer');
		$this->load->model('account/customer');
		
		$json = array();
		
		if($this->request->post['id'] && $this->request->post['customer_id']){
			$id = $this->request->post['id'];
			$customer_id = $this->request->post['customer_id'];
			if($id != '' && $customer_id != ''){
				$deleteCustomerFamilies = $this->model_account_customer->deleteCustomerFamilies($id, $customer_id);
				if($deleteCustomerFamilies == 1){
					$json['status'] = 'success';
					$json['message']=$this->language->get('customer families successfully deleted!');
				}
				else{
					$json['status'] = 'error';
					$json['message'] = $this->language->get('Customer Families already deleted!');
				}
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('Invalid customer!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid Customer!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}