<?php
class ControllerApiWishList extends Controller {
	public function addWishlist() {
		$this->load->language('account/wishlist');
		$json = array();
       if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			if (isset($this->request->post['product_id'])) {
				$product_id = $this->request->post['product_id'];
			} else {
				$product_id = 0;
			}
			$customer_id = 0;
			if (isset($this->request->post['customer_id'])) {
				$customer_id = $this->request->post['customer_id'];
			}
			$this->load->model('catalog/product');
            
			$product_info = $this->model_catalog_product->getProduct($product_id);
			if ($product_info) {
				if ($customer_id) {
					// Edit customers cart
					$this->load->model('account/wishlist');
					$this->model_account_wishlist->addWishlistAPI($product_id, $customer_id);
					$product_data = $data = array();
					$data = $this->model_account_wishlist->getWishlistAPI($customer_id);
					foreach ($data as $result) {
						// for never get one more time with same product id
						if(!isset($product_data[$result['product_id']])){
						$product_data[$result['product_id']] = $this->getProduct($result['product_id'],$data['customer_id']);
						}	
					}
					$json['status'] = 'success';
					$json['message']= 'Wishlist added successfully!';
					$json['data'] 	= $product_data;
					$json['total'] 	= $this->model_account_wishlist->getTotalWishlistAPI($customer_id);
				} else {
					$json['status'] = 'error';
					$json['message']= 'Invalid parameter';
				}
		} else {
			$json['status'] = 'error';
			$json['message'] = 'Product no more available!';
		}
	   } else {
					$json['status'] = 'error';
					$json['message'] = 'Invalid parameter';
	   }	  
	    
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
    public function getWishlist() {
		$this->load->language('account/wishlist');
		$json = array();
       if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$customer_id = 0;
			if (isset($this->request->post['customer_id'])) {
				$customer_id = $this->request->post['customer_id'];
			}
			$this->load->model('catalog/product');
			if ($customer_id) {
				$this->load->model('account/wishlist');
				$product_data = $data = array();
				$data = $this->model_account_wishlist->getWishlistAPI($customer_id);
				foreach ($data as $result) {
					// for never get one more time with same product id
					if(!isset($product_data[$result['product_id']])){
					$product_data[$result['product_id']] = $this->getProduct($result['product_id'],$data['customer_id']);
					}	
				}
				$json['status'] = 'success';
				$json['message']= 'success';
				$json['data'] 	= $product_data;
				$json['total'] 	= $this->model_account_wishlist->getTotalWishlistAPI($customer_id);
		} else {
			$json['status'] = 'error';
			$json['message'] = 'Product no more available!';
		}
	   } else {
					$json['status'] = 'error';
					$json['message'] = 'Invalid parameter';
	   }	  
	    
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}	
    public function deleteWishlist() {
		$this->load->language('account/wishlist');
		$json = array();
       if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			if (isset($this->request->post['product_id'])) {
				$product_id = $this->request->post['product_id'];
			} else {
				$product_id = 0;
			}
			$customer_id = 0;
			if (isset($this->request->post['customer_id'])) {
				$customer_id = $this->request->post['customer_id'];
			}
			$this->load->model('catalog/product');
			if ($product_id && $customer_id) {
				$this->load->model('account/wishlist');
				$this->model_account_wishlist->deleteWishlistAPI($product_id, $customer_id); 
				$product_data = $data = array();
				$data = $this->model_account_wishlist->getWishlistAPI();
				foreach ($data as $result) {
					// for never get one more time with same product id
					if(!isset($product_data[$result['product_id']])){
					$product_data[$result['product_id']] = $this->getProduct($result['product_id'],$data['customer_id']);
					}	
				}
				$json['status'] = 'success';
				$json['message']= 'success';
				$json['data'] 	= $product_data;
				$json['total'] 	= $this->model_account_wishlist->getTotalWishlistAPI($customer_id);
		} else {
			$json['status'] = 'error';
			$json['message'] = 'Product no more available!';
		}
	   } else {
					$json['status'] = 'error';
					$json['message'] = 'Invalid parameter';
	   }	  
	    
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	} 
}
