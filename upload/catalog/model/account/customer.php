<?php
class ModelAccountCustomer extends Model {
	public function addCustomer($data) {
		if (isset($data['customer_group_id']) && is_array($this->config->get('config_customer_group_display')) && in_array($data['customer_group_id'], $this->config->get('config_customer_group_display'))) {
			$customer_group_id = $data['customer_group_id'];
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}
		$this->load->model('account/customer_group');
		$customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_group_id);
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer SET customer_group_id = '" . (int)$customer_group_id . "', store_id = '" . (int)$this->config->get('config_store_id') . "', language_id = '" . (int)$this->config->get('config_language_id') . "', firstname = '" . $this->db->escape((string)$data['firstname']) . "', lastname = '" . $this->db->escape((string)$data['lastname']) . "', email = '" . $this->db->escape((string)$data['email']) . "', telephone = '" . $this->db->escape((string)$data['telephone']) . "', custom_field = '" . $this->db->escape(isset($data['custom_field']['account']) ? json_encode($data['custom_field']['account']) : '') . "', salt = '', password = '" . $this->db->escape(password_hash($data['password'], PASSWORD_DEFAULT)) . "', newsletter = '" . (isset($data['newsletter']) ? (int)$data['newsletter'] : 0) . "', ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "', status = '" . (int)!$customer_group_info['approval'] . "', date_added = NOW(),fcm_id = '".$this->db->escape((string)$data['fcm_id'])."',device_type = '".$this->db->escape((int)$data['device_type'])."'");
		$customer_id = $this->db->getLastId();
		if ($customer_group_info['approval']) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "customer_approval` SET customer_id = '" . (int)$customer_id . "', type = 'customer', date_added = NOW()");
		}
		return $customer_id;
	}
	 public function addCustomerSocial($data) {
	  if (isset($data['customer_group_id']) && is_array($this->config->get('config_customer_group_display')) && in_array($data['customer_group_id'], $this->config->get('config_customer_group_display'))) {
	   $customer_group_id = $data['customer_group_id'];
	  } else {
	   $customer_group_id = $this->config->get('config_customer_group_id');
	  }
	  $this->load->model('account/customer_group');
	  $customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_group_id);
	  $this->db->query("INSERT INTO " . DB_PREFIX . "customer SET customer_group_id = '" . (int)$customer_group_id . "', store_id = '" . (int)$this->config->get('config_store_id') . "', language_id = '" . (int)$this->config->get('config_language_id') . "', firstname = '" . $this->db->escape((string)$data['firstname']) . "', lastname = '" . $this->db->escape((string)$data['lastname']) . "', email = '" . $this->db->escape((string)$data['email']) . "', telephone = '" . $this->db->escape((string)$data['telephone']) . "', custom_field = '" . $this->db->escape(isset($data['custom_field']['account']) ? json_encode($data['custom_field']['account']) : '') . "', salt = '', login_token ='".$this->db->escape((string)$data['login_token'])."',login_type ='".$this->db->escape((int)$data['login_type'])."',newsletter = '" . (isset($data['newsletter']) ? (int)$data['newsletter'] : 0) . "', ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "', status = '" . (int)!$customer_group_info['approval'] . "', date_added = NOW(),fcm_id = '".$this->db->escape((string)$data['fcm_id'])."',device_type = '".$this->db->escape((int)$data['device_type'])."'");
	  $customer_id = $this->db->getLastId();
	  if ($customer_group_info['approval']) {
	   $this->db->query("INSERT INTO `" . DB_PREFIX . "customer_approval` SET customer_id = '" . (int)$customer_id . "', type = 'customer', date_added = NOW()");
	  }
	  return $customer_id;
	 }
	 public function getCustomerByLoginToken($token) {
	  $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE  login_token = '" . $this->db->escape($token) . "'");
	  return $query->rows;
	 }
	public function editCustomer($customer_id, $data) {
	  $query = $this->db->query("UPDATE " . DB_PREFIX . "customer SET firstname = '" . $this->db->escape((string)$data['firstname']) . "', lastname = '" . $this->db->escape((string)$data['lastname']) . "', email = '" . $this->db->escape((string)$data['email']) . "', telephone = '" . $this->db->escape((string)$data['telephone']) . "', gender = '" . $this->db->escape((int)$data['gender']) . "', blood_group = '" . $this->db->escape((string)$data['blood_group']) . "' , date_of_birth = '" . $this->db->escape($data['date_of_birth']) . "' , anniversary_date = '" . $this->db->escape($data['anniversary_date']) . "' , custom_field = '" . $this->db->escape(isset($data['custom_field']['account']) ? json_encode($data['custom_field']['account']) : '') . "' WHERE customer_id = '" . (int)$customer_id . "'");
	  $return =  $this->db->countAffected();
	  
	  if(isset($data['image'])){
	    $query = $this->db->query("UPDATE " . DB_PREFIX . "customer SET image = '" . $this->db->escape((string)$data['image']) . "' WHERE customer_id = '" . (int)$customer_id . "'");
	    $return = $this->db->countAffected();
	  }
	  
	  return $return;
	 }
	public function editCustomerfcm($customer_id, $data) {
		$query = $this->db->query("UPDATE " . DB_PREFIX . "customer SET  fcm_id= '" . $this->db->escape((string)$data['fcm_id']) . "', device_type= " . $this->db->escape((int)$data['device_type']) . " WHERE customer_id = '" . (int)$customer_id . "'");
		return $this->db->countAffected();
	}
	public function editPassword($email, $password) {
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET salt = '', password = '" . $this->db->escape(password_hash($password, PASSWORD_DEFAULT)) . "', code = '' WHERE LOWER(email) = '" . $this->db->escape(utf8_strtolower($email)) . "'");
	}
	
	public function deactivateCustomer($customer_id , $status) {
		$query = $this->db->query("UPDATE " . DB_PREFIX . "customer SET status = '" . $status . "' WHERE customer_id = '" . (int)$customer_id . "'");
		return $this->db->countAffected();
	}
		
	public function editAddressId($customer_id, $address_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET address_id = '" . (int)$address_id . "' WHERE customer_id = '" . (int)$customer_id . "'");
		return $this->db->countAffected();
	}
	public function editCode($email, $code) {
		$this->db->query("UPDATE `" . DB_PREFIX . "customer` SET code = '" . $this->db->escape($code) . "' WHERE LCASE(email) = '" . $this->db->escape(utf8_strtolower($email)) . "'");
	}
	public function editToken($email, $token) {
		$this->db->query("UPDATE `" . DB_PREFIX . "customer` SET token = '" . $this->db->escape($token) . "' WHERE LCASE(email) = '" . $this->db->escape(utf8_strtolower($email)) . "'");
	}
	public function editNewsletter($newsletter) {
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET newsletter = '" . (int)$newsletter . "' WHERE customer_id = '" . (int)$this->customer->getId() . "'");
	}
	public function getCustomer($customer_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$customer_id . "'");
		return $query->row;
	}
	public function getCustomerByEmail($email) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE status = 1 AND (LOWER(email) = '" . $this->db->escape(utf8_strtolower($email)) . " ' OR telephone = '" . $this->db->escape(utf8_strtolower($email)) . "')");
		return $query->rows;
	}
    public function getCustomerByEmailAndPhone($email,$phone,$customer_id) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE status = 1 AND (LOWER(email) = '" . $this->db->escape(utf8_strtolower($email)) . " ' OR telephone = '" . $this->db->escape(utf8_strtolower($phone)) . "') AND customer_id != '".$customer_id."'");
			return $query->rows;
	}
	public function getCustomerByCode($code) {
		$query = $this->db->query("SELECT customer_id, firstname, lastname, email FROM `" . DB_PREFIX . "customer` WHERE code = '" . $this->db->escape($code) . "' AND code != ''");
		return $query->row;
	}
	public function getCustomerByToken($token) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE token = '" . $this->db->escape($token) . "' AND token != ''");
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET token = ''");
		return $query->row;
	}
	public function getTotalCustomersByEmail($email) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer WHERE LOWER(email) = '" . $this->db->escape(utf8_strtolower($email)) . "'");
		return $query->row['total'];
	}
	public function addTransaction($customer_id, $description, $amount = '', $order_id = 0) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer_transaction SET customer_id = '" . (int)$customer_id . "', order_id = '" . (float)$order_id . "', description = '" . $this->db->escape($description) . "', amount = '" . (float)$amount . "', date_added = NOW()");
	}
	public function deleteTransactionByOrderId($order_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_transaction WHERE order_id = '" . (int)$order_id . "'");
	}
	public function getTransactionTotal($customer_id) {
		$query = $this->db->query("SELECT SUM(amount) AS total FROM " . DB_PREFIX . "customer_transaction WHERE customer_id = '" . (int)$customer_id . "'");
		return $query->row['total'];
	}
	public function getTotalTransactionsByOrderId($order_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_transaction WHERE order_id = '" . (int)$order_id . "'");
		return $query->row['total'];
	}
	public function getRewardTotal($customer_id) {
		$query = $this->db->query("SELECT SUM(points) AS total FROM " . DB_PREFIX . "customer_reward WHERE customer_id = '" . (int)$customer_id . "'");
		return $query->row['total'];
	}
	public function getIps($customer_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer_ip` WHERE customer_id = '" . (int)$customer_id . "'");
		return $query->rows;
	}
	public function addLogin($customer_id, $ip, $country = '') {
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer_ip SET customer_id = '" . (int)$customer_id . "', store_id = '" . (int)$this->config->get('config_store_id') . "', ip = '" . $this->db->escape($ip) . "', country = '" . $this->db->escape($country) . "', date_added = NOW()");
	}
	public function addLoginAttempt($email) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_login WHERE email = '" . $this->db->escape(utf8_strtolower((string)$email)) . "' AND ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "'");
		if (!$query->num_rows) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "customer_login SET email = '" . $this->db->escape(utf8_strtolower((string)$email)) . "', ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "', total = 1, date_added = '" . $this->db->escape(date('Y-m-d H:i:s')) . "', date_modified = '" . $this->db->escape(date('Y-m-d H:i:s')) . "'");
		} else {
			$this->db->query("UPDATE " . DB_PREFIX . "customer_login SET total = (total + 1), date_modified = '" . $this->db->escape(date('Y-m-d H:i:s')) . "' WHERE customer_login_id = '" . (int)$query->row['customer_login_id'] . "'");
		}
	}
	public function getLoginAttempts($email) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer_login` WHERE email = '" . $this->db->escape(utf8_strtolower($email)) . "'");
		return $query->row;
	}
	public function deleteLoginAttempts($email) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_login` WHERE email = '" . $this->db->escape(utf8_strtolower($email)) . "'");
	}
	public function editCustomerPassword($customer_id, $password) {
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET salt = '', password = '" . $this->db->escape(password_hash($password, PASSWORD_DEFAULT)) . "', code = '' WHERE customer_id = '" . $customer_id . "'");
	}
	
	public function addCustomerFamilies($data){
		$bod = date('Y-d-m',strtotime($data['date_of_birth']));
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer_families SET customer_id = '" . $data['customer_id'] . "', name = '" . $data['name'] . "', relation = '" . $data['relation'] . "', date_of_birth = '" . $bod . "', blood_group = '" . $data['blood_group'] . "', created_date = '" . $this->db->escape(date('Y-m-d H:i:s')) . "'");
		return $this->db->countAffected();
	}
	
	public function listCustomerFamilies($customer_id){
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_families WHERE customer_id = '" . (int)$customer_id . "'");
		
		return $query->rows;
	}
	
	public function editCustomerFamilies($id, $data) {
		$date1 = strtr($data['date_of_birth'], '/', '-');
		$this->db->query("UPDATE " . DB_PREFIX . "customer_families SET customer_id = '". $data['customer_id'] ."', name = '" . $data['name'] . "', relation = '". $data['relation'] ."', date_of_birth = '". date('Y-m-d', strtotime($date1)) ."', blood_group = '". $data['blood_group'] ."' , updated_date = '" . $this->db->escape(date('Y-m-d H:i:s')) . "' WHERE id = '" . (int)$id . "'");
		return $this->db->countAffected();
	}
	
	public function deleteCustomerFamilies($id, $customer_id){
		$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_families` WHERE customer_id = '" . $this->db->escape(utf8_strtolower($customer_id)) . "' AND id = '". $this->db->escape(utf8_strtolower($id)) ."' ");
		return $this->db->countAffected();
	}
	
	public function listAllCustomerFamilies($id, $customer_id){
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_families WHERE id = '" . (int)$id . "' AND customer_id = '". $customer_id ."' ");
		return $query->rows;
	}
	
	public function listCustomerFamiliesById($id){
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_families WHERE id = '" . (int)$id . "'");
	
		return $query->rows;
	}
        public function customNotification($customer_id){
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_notification crn INNER JOIN " . DB_PREFIX . "custom_notification cn ON crn.notification_id = cn.id WHERE customer_id = '" 
                . (int)$customer_id . "'");
		
		return $query->rows;
	}
}