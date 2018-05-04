<?php
class ControllerApiWishlist extends Controller {
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
						$product_data[$result['product_id']] = $this->model_catalog_product->getProduct($result['product_id'],$result['customer_id']);
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
				foreach ($data as $result1) {
					// for never get one more time with same product id
					if(!isset($product_data[$result1['product_id']])){
						$result = $this->model_catalog_product->getProduct($result1['product_id'],$customer_id);
						$product_data[] = array(
											'product_id'  => $result['product_id'],
											'is_prescription_required'  => $result['is_prescription_required'],
											'is_cart'  => $result['is_cart'],					
											'is_whishlist'  => $result['is_whishlist'],
											'thumb'       => $result['image'],
											'name'        => $result['name'],
											'manufacturer'=> $result['manufacturer'],
											'brand'       => $result['brand'],
											'discount'     => 5,
											'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
											'price'       => $price,
											'special'     => $special,
											'tax'         => $tax,
											'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
											'rating'      => $result['rating']
										);
					}	
				}
				$json['status'] = 'success';
				$json['message']= 'success';
				$json['data']['products'][] = $product_data;
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
				$json['status'] = 'success';
				$json['message']= 'success';
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