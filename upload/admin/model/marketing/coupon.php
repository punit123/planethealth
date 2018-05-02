<?php
class ModelMarketingCoupon extends Model {
	public function addCoupon($data) {
		$data['happy_hours_to_time'] = $data['happy_hours_to_time_h'] . ':' .$data['happy_hours_to_time_m']. ':' .$data['happy_hours_to_time_s'];
		$data['happy_hours_from_time'] = $data['happy_hours_from_time_h'] . ':' .$data['happy_hours_from_time_m']. ':' .$data['happy_hours_from_time_s'];
		
		$data['happy_hours_to_time_h'] = (isset($data['happy_hours_to_time_h']) && !empty($data['happy_hours_to_time_h'])) ? $data['happy_hours_to_time_h'] : '00';
		$data['happy_hours_to_time_m'] = (isset($data['happy_hours_to_time_m']) && !empty($data['happy_hours_to_time_m'])) ? $data['happy_hours_to_time_m'] : '00';
		$data['happy_hours_to_time_s'] = (isset($data['happy_hours_to_time_s']) && !empty($data['happy_hours_to_time_s'])) ? $data['happy_hours_to_time_s'] : '00';
		
		$data['happy_hours_from_time_h'] = (isset($data['happy_hours_from_time_h']) && !empty($data['happy_hours_from_time_h'])) ? $data['happy_hours_from_time_h'] : '00';
		$data['happy_hours_from_time_m'] = (isset($data['happy_hours_from_time_m']) && !empty($data['happy_hours_from_time_m'])) ? $data['happy_hours_from_time_m'] : '00';
		$data['happy_hours_from_time_s'] = (isset($data['happy_hours_from_time_s']) && !empty($data['happy_hours_from_time_s'])) ? $data['happy_hours_from_time_s'] : '00';
		
		if($data['coupon_type'] == 1){
			$this->db->query("INSERT INTO " . DB_PREFIX . "coupon SET name = '" . $this->db->escape((string)$data['name']) . "', code = '" . $this->db->escape((string)$data['code']) . "', discount = '" . (float)$data['discount'] . "', type = '" . $this->db->escape((string)$data['type']) . "', total = '" . (float)$data['total'] . "', logged = '" . (int)$data['logged'] . "', shipping = '" . (int)$data['shipping'] . "', date_start = '" . $this->db->escape((string)$data['date_start']) . "', date_end = '" . $this->db->escape((string)$data['date_end']) . "', uses_total = '" . (int)$data['uses_total'] . "', uses_customer = '" . (int)$data['uses_customer'] . "', coupon_type = '1', status = '" . (int)$data['status'] . "', happy_hours_to_time = '" . $data['happy_hours_to_time'] . "', happy_hours_from_time = '" . $data['happy_hours_from_time'] . "', weekdays = '" . $data['weekdays'] . "' date_added = NOW()");
		} else if($data['coupon_type'] == 2){
			$this->db->query("INSERT INTO " . DB_PREFIX . "coupon SET name = '" . $this->db->escape((string)$data['name']) . "', discount = '" . (float)$data['discount'] . "', type = '" . $this->db->escape((string)$data['type']) . "', total = '" . (float)$data['total'] . "', logged = '" . (int)$data['logged'] . "', shipping = '" . (int)$data['shipping'] . "', date_start = '" . $this->db->escape((string)$data['date_start']) . "', date_end = '" . $this->db->escape((string)$data['date_end']) . "', uses_total = '" . (int)$data['uses_total'] . "', uses_customer = '" . (int)$data['uses_customer'] . "', coupon_type = '1', status = '" . (int)$data['status'] . "', happy_hours_to_time = '" . $data['happy_hours_to_time'] . "', happy_hours_from_time = '" . $data['happy_hours_from_time'] . "', weekdays = '" . $data['weekdays'] . "' date_added = NOW()");
		}
		if($data['coupon_type'] == 1 || $data['coupon_type'] == 2){
			$coupon_id = $this->db->getLastId();
		}
        if($data['coupon_type'] == 2){
			if (isset($data['coupon_product'])) {
				foreach ($data['coupon_product'] as $product_id) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "coupon_product SET coupon_id = '" . (int)$coupon_id . "', product_id = '" . (int)$product_id . "'");
				}
			}

			if (isset($data['coupon_category'])) {
				foreach ($data['coupon_category'] as $category_id) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "coupon_category SET coupon_id = '" . (int)$coupon_id . "', category_id = '" . (int)$category_id . "'");
				}
			}
		}
		$ArrProducts = array();
		$ProductRes = array();
		$CatProductRes = array();
		if(isset($data['coupon_category'])){
			foreach($data['coupon_category'] as $ckey => $cval){
				$CatProductRes = $this->model_catalog_product->getProductsByCategoryId($cval);
				if(is_array($CatProductRes) && isset($CatProductRes) && count($CatProductRes) > 0){
					foreach($CatProductRes as $pkey1 => $pval1){	
						$data['coupon_product'][] = $pval1['product_id'];
					}
				}
			}
		}
		$data['coupon_product'] = array_unique($data['coupon_product']);
		
		if(isset($data['coupon_product'])){
			foreach($data['coupon_product'] as $pkey => $pval){
				$ProductRes = $this->model_catalog_product->getProduct($pval);
				if(isset($ProductRes['product_id']) && !empty($ProductRes)){
					$ArrProducts[] = array('product_id' => $pval, 'price' =>$ProductRes['price']);		
				}
			}
		}
		if(isset($ArrProducts)){
				$date_start = isset($data['date_start']) ? $data['date_start'] : '';
				$date_end   = isset($data['date_end']) ? $data['date_end'] : '' ;
				$discount	= (isset($data['discount']) && $data['discount'] > 0) ? $data['discount'] : '';
				foreach ($ArrProducts as $psKey => $product_special) {
					$product_special['customer_group_id'] = 0;
					$product_special['priority'] = 0;
					if(isset($discount)){
						$price =(float) $price * ($discount/100);
					} else {
						$price =(float) $price ;
					}
					
					$this->db->query("INSERT INTO " . DB_PREFIX . "product_special SET product_id = '" . (int)$product_special['product_id'] . "', customer_group_id = '" . (int)$product_special['customer_group_id'] . "', priority = '" . (int)$product_special['priority'] . "', price = '" .$price . "', date_start = '" . $this->db->escape($date_start) . "', date_end = '" . $this->db->escape($date_end) . "'");
				}
			}

		return $coupon_id;
	}

	public function editCoupon($coupon_id, $data) {
		$this->load->model('catalog/product');
		$data['happy_hours_to_time_h'] = (isset($data['happy_hours_to_time_h']) && !empty($data['happy_hours_to_time_h'])) ? $data['happy_hours_to_time_h'] : '00';
		$data['happy_hours_to_time_m'] = (isset($data['happy_hours_to_time_m']) && !empty($data['happy_hours_to_time_m'])) ? $data['happy_hours_to_time_m'] : '00';
		$data['happy_hours_to_time_s'] = (isset($data['happy_hours_to_time_s']) && !empty($data['happy_hours_to_time_s'])) ? $data['happy_hours_to_time_s'] : '00';
		
		$data['happy_hours_from_time_h'] = (isset($data['happy_hours_from_time_h']) && !empty($data['happy_hours_from_time_h'])) ? $data['happy_hours_from_time_h'] : '00';
		$data['happy_hours_from_time_m'] = (isset($data['happy_hours_from_time_m']) && !empty($data['happy_hours_from_time_m'])) ? $data['happy_hours_from_time_m'] : '00';
		$data['happy_hours_from_time_s'] = (isset($data['happy_hours_from_time_s']) && !empty($data['happy_hours_from_time_s'])) ? $data['happy_hours_from_time_s'] : '00';
		
		$data['happy_hours_to_time'] = $data['happy_hours_to_time_h'] . ':' .$data['happy_hours_to_time_m']. ':' .$data['happy_hours_to_time_s'];
		$data['happy_hours_from_time'] = $data['happy_hours_from_time_h'] . ':' .$data['happy_hours_from_time_m']. ':' .$data['happy_hours_from_time_s'];
		$ArrProducts = array();
		$ProductRes = array();
		$CatProductRes = array();
		if(isset($data['coupon_category'])){
			foreach($data['coupon_category'] as $ckey => $cval){
				$CatProductRes = $this->model_catalog_product->getProductsByCategoryId($cval);
				if(is_array($CatProductRes) && isset($CatProductRes) && count($CatProductRes) > 0){
					foreach($CatProductRes as $pkey1 => $pval1){	
						$data['coupon_product'][] = $pval1['product_id'];
					}
				}
			}
		}
		$data['coupon_product'] = array_unique($data['coupon_product']);
		
		if(isset($data['coupon_product'])){
			foreach($data['coupon_product'] as $pkey => $pval){
				$ProductRes = $this->model_catalog_product->getProduct($pval);
				if(isset($ProductRes['product_id']) && !empty($ProductRes)){
					$ArrProducts[] = array('product_id' => $pval, 'price' =>$ProductRes['price']);		
				}
			}
		}
		
		if($data['coupon_type'] == 1){
			$this->db->query("UPDATE " . DB_PREFIX . "coupon SET name = '" . $this->db->escape((string)$data['name']) . "', code = '" . $this->db->escape((string)$data['code']) . "', discount = '" . (float)$data['discount'] . "', type = '" . $this->db->escape((string)$data['type']) . "', total = '" . (float)$data['total'] . "', logged = '" . (int)$data['logged'] . "', shipping = '" . (int)$data['shipping'] . "', date_start = '" . $this->db->escape((string)$data['date_start']) . "', date_end = '" . $this->db->escape((string)$data['date_end']) . "', uses_total = '" . (int)$data['uses_total'] . "', uses_customer = '" . (int)$data['uses_customer'] . "', status = '" . (int)$data['status'] . "', happy_hours_to_time = '" . $data['happy_hours_to_time'] . "', happy_hours_from_time = '" . $data['happy_hours_from_time'] . "', weekdays = '" . $data['weekdays'] . "' WHERE coupon_id = '" . (int)$coupon_id . "'");
		} else if($data['coupon_type'] == 2){
			$this->db->query("UPDATE " . DB_PREFIX . "coupon SET name = '" . $this->db->escape((string)$data['name']) . "', discount = '" . (float)$data['discount'] . "', type = '" . $this->db->escape((string)$data['type']) . "', total = '" . (float)$data['total'] . "', logged = '" . (int)$data['logged'] . "', shipping = '" . (int)$data['shipping'] . "', date_start = '" . $this->db->escape((string)$data['date_start']) . "', date_end = '" . $this->db->escape((string)$data['date_end']) . "', uses_total = '" . (int)$data['uses_total'] . "', uses_customer = '" . (int)$data['uses_customer'] . "', status = '" . (int)$data['status'] . "', happy_hours_to_time = '" . $data['happy_hours_to_time'] . "', happy_hours_from_time = '" . $data['happy_hours_from_time'] . "', happy_hours_to_time = '" . $data['happy_hours_to_time'] . "', weekdays = '" . $data['weekdays'] . "' WHERE coupon_id = '" . (int)$coupon_id . "'");
			
			$this->db->query("DELETE FROM " . DB_PREFIX . "coupon_product WHERE coupon_id = '" . (int)$coupon_id . "'");

			if (isset($data['coupon_product'])) {
				foreach ($data['coupon_product'] as $product_id) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "coupon_product SET coupon_id = '" . (int)$coupon_id . "', product_id = '" . (int)$product_id . "'");
				}
			}

			$this->db->query("DELETE FROM " . DB_PREFIX . "coupon_category WHERE coupon_id = '" . (int)$coupon_id . "'");

			if (isset($data['coupon_category'])) {
				foreach ($data['coupon_category'] as $category_id) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "coupon_category SET coupon_id = '" . (int)$coupon_id . "', category_id = '" . (int)$category_id . "'");
				}
			}
			if(isset($ArrProducts)){
				$date_start = isset($data['date_start']) ? $data['date_start'] : '' ;
				$date_end   = isset($data['date_end']) ? $data['date_end'] : '' ;
				$discount	= (isset($data['discount']) && $data['discount'] > 0) ? $data['discount'] : '';
				foreach ($ArrProducts as $psKey => $product_special) {
					$product_special['customer_group_id'] = 0;
					$product_special['priority'] = 0;
					if(isset($discount)){
						$price =(float) $price * ($discount/100);
					} else {
						$price =(float) $price ;
					}
					
					$this->db->query("INSERT INTO " . DB_PREFIX . "product_special SET product_id = '" . (int)$product_special['product_id'] . "', customer_group_id = '" . (int)$product_special['customer_group_id'] . "', priority = '" . (int)$product_special['priority'] . "', price = '" .$price . "', date_start = '" . $this->db->escape($date_start) . "', date_end = '" . $this->db->escape($date_end) . "'");
				}
			}
		}
	}

	public function deleteCoupon($coupon_id, $column_type ='') {
		$this->db->query("DELETE FROM " . DB_PREFIX . "coupon WHERE coupon_id = '" . (int)$coupon_id . "'");
		if($column_type == 2){
		    $this->db->query("DELETE FROM " . DB_PREFIX . "coupon_product WHERE coupon_id = '" . (int)$coupon_id . "'");
			$this->db->query("DELETE FROM " . DB_PREFIX . "coupon_category WHERE coupon_id = '" . (int)$coupon_id . "'");
		}
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "coupon_history WHERE coupon_id = '" . (int)$coupon_id . "'");
	}

	public function getCoupon($coupon_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "coupon WHERE coupon_id = '" . (int)$coupon_id . "'");

		return $query->row;
	}

	public function getCouponByCode($code) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "coupon WHERE code = '" . $this->db->escape($code) . "'");

		return $query->row;
	}

	public function getCoupons($data = array()) {
	   $sql = "SELECT coupon_id, name, code, discount, date_start, date_end, status FROM " . DB_PREFIX . "coupon";
       if(isset($data['coupon_type']) && !empty($data['coupon_type'])){
			$coupon_type = $data['coupon_type'];
			$sql .= " WHERE coupon_type = ".$coupon_type;
		}
	    
		$sort_data = array(
			'name',
			'code',
			'discount',
			'date_start',
			'date_end',
			'status'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
        //echo $sql; die;
		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getCouponProducts($coupon_id) {
		$coupon_product_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "coupon_product WHERE coupon_id = '" . (int)$coupon_id . "'");

		foreach ($query->rows as $result) {
			$coupon_product_data[] = $result['product_id'];
		}

		return $coupon_product_data;
	}

	public function getCouponCategories($coupon_id) {
		$coupon_category_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "coupon_category WHERE coupon_id = '" . (int)$coupon_id . "'");

		foreach ($query->rows as $result) {
			$coupon_category_data[] = $result['category_id'];
		}

		return $coupon_category_data;
	}

	public function getTotalCoupons($coupon_type) {
		$sql = '';
		if(isset($coupon_type) && !empty($coupon_type)){
			$coupon_type = $coupon_type;
			$sql = " WHERE coupon_type = ".$coupon_type;
		}
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "coupon".$sql);
         
		return $query->row['total'];
	}

	public function getCouponHistories($coupon_id, $start = 0, $limit = 10) {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT ch.order_id, CONCAT(c.firstname, ' ', c.lastname) AS customer, ch.amount, ch.date_added FROM " . DB_PREFIX . "coupon_history ch LEFT JOIN " . DB_PREFIX . "customer c ON (ch.customer_id = c.customer_id) WHERE ch.coupon_id = '" . (int)$coupon_id . "' ORDER BY ch.date_added ASC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	public function getTotalCouponHistories($coupon_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "coupon_history WHERE coupon_id = '" . (int)$coupon_id . "'");

		return $query->row['total'];
	}
}