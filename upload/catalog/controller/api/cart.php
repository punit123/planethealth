<?php
class ControllerApiCart extends Controller {
	public function add() {
		$this->load->language('api/cart');
		$json = array();
			$customer_id = $this->request->post['customer_id'];
			$device_id = $this->request->post['device_id'];
			if (isset($this->request->post['product'])) {
				$this->cart->clear();
				foreach ($this->request->post['product'] as $product) {
					if (isset($product['option'])) {
						$option = $product['option'];
					} else {
						$option = array();
					}
					$this->cart->add($product['product_id'], $product['quantity'], $option,$customer_id,$device_id);
				}
				$json['status'] = 'success';
				$json['message'] = $this->language->get('text_success');
				unset($this->session->data['shipping_method']);
				unset($this->session->data['shipping_methods']);
				unset($this->session->data['payment_method']);
				unset($this->session->data['payment_methods']);
			} elseif (isset($this->request->post['product_id'])) {
				$this->load->model('catalog/product');
				$product_info = $this->model_catalog_product->getProduct($this->request->post['product_id']);
				if ($product_info) {
					if (isset($this->request->post['quantity'])) {
						$quantity = $this->request->post['quantity'];
					} else {
						$quantity = 1;
					}
					if (isset($this->request->post['option'])) {
						$option = array_filter($this->request->post['option']);
					} else {
						$option = array();
					}
					$product_options = $this->model_catalog_product->getProductOptions($this->request->post['product_id']);
					foreach ($product_options as $product_option) {
						if ($product_option['required'] && empty($option[$product_option['product_option_id']])) {
							$json['status'] = 'error';
				            $json['message'] = sprintf($this->language->get('error_required'), $product_option['name']);							
						}
					}
					if (1==1) {
						$this->cart->add($this->request->post['product_id'], $quantity, $option,$customer_id,$device_id);
						$json['status'] = 'success';
						$json['message'] = $this->language->get('text_success');
						unset($this->session->data['shipping_method']);
						unset($this->session->data['shipping_methods']);
						unset($this->session->data['payment_method']);
						unset($this->session->data['payment_methods']);
					}
				} else {
					$json['status'] = 'error';
					$json['message'] = $this->language->get('error_store');
				}
			}
			
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	public function edit() {
		$this->load->language('api/cart');
		$json = array();
		$customer_id = $this->request->post['customer_id'];
		$device_id = $this->request->post['device_id'];
		$this->cart->update($this->request->post['cart_id'], $this->request->post['quantity'],$customer_id,$device_id);
		$json['status'] = 'success';
		$json['message'] = $this->language->get('text_success');
		unset($this->session->data['shipping_method']);
		unset($this->session->data['shipping_methods']);
		unset($this->session->data['payment_method']);
		unset($this->session->data['payment_methods']);
		unset($this->session->data['reward']);
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	public function remove() {
		$this->load->language('api/cart');
		$json = array();
		// Remove
		if (isset($this->request->post['cart_id'])) {
			$this->cart->cartRemove($this->request->post['cart_id']);
			unset($this->session->data['vouchers'][$this->request->post['cart_id']]);
			$json['status'] = 'success';
			$json['message'] = $this->language->get('text_success');
			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['reward']);
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	public function products() {
		$this->load->language('api/cart');
		$json = array();
			// Products
			$json['data']['products'] = array();
			$customer_id = $this->request->post['customer_id'];
			$products = $this->cart->getProducts($customer_id);
			if(!empty($products)){
			foreach ($products as $product) {
				$product_total = 0;
				foreach ($products as $product_2) {
					if ($product_2['product_id'] == $product['product_id']) {
						$product_total += $product_2['quantity'];
					}
				}
				$option_data = array();
				foreach ($product['option'] as $option) {
					$option_data[] = array(
						'product_option_id'       => $option['product_option_id'],
						'product_option_value_id' => $option['product_option_value_id'],
						'name'                    => $option['name'],
						'value'                   => $option['value'],
						'type'                    => $option['type']
					);
				}
				$json['data']['products'][] = array(
					'cart_id'    => $product['cart_id'],
					'product_id' => $product['product_id'],
					'is_prescription_required'     => $product['is_prescription_required'],
					'name'            => $product['name'],
					'manufacturer_name'            => $product['manufacturer_name'],
					'brand_name'       => $product['brand_name'],
					'model'      => $product['model'],
					'option'     => $option_data,
					'quantity'   => $product['quantity'],
					'stock'      => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
					'shipping'   => $product['shipping'],
					'price'      => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
					'total'      => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')) * $product['quantity'], $this->session->data['currency']),
					'reward'     => $product['reward']
				);
			}
			// Voucher
			$json['data']['vouchers'] = array();
			if (!empty($this->session->data['vouchers'])) {
				foreach ($this->session->data['vouchers'] as $key => $voucher) {
					$json['data']['vouchers'][] = array(
						'code'             => $voucher['code'],
						'description'      => $voucher['description'],
						'from_name'        => $voucher['from_name'],
						'from_email'       => $voucher['from_email'],
						'to_name'          => $voucher['to_name'],
						'to_email'         => $voucher['to_email'],
						'voucher_theme_id' => $voucher['voucher_theme_id'],
						'message'          => $voucher['message'],
						'price'            => $this->currency->format($voucher['amount'], $this->session->data['currency']),			
						'amount'           => $voucher['amount']
					);
				}
			}
			// Totals
			$this->load->model('setting/extension');
			$totals = array();
			$taxes = $this->cart->getTaxes();
			$total = 0;
			// Because __call can not keep var references so we put them into an array. 
			$total_data = array(
				'totals' => &$totals,
				'taxes'  => &$taxes,
				'total'  => &$total
			);
			
			$sort_order = array();
			$results = $this->model_setting_extension->getExtensions('total');
			foreach ($results as $key => $value) {
				$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
			}
			array_multisort($sort_order, SORT_ASC, $results);
			foreach ($results as $result) {
				if ($this->config->get('total_' . $result['code'] . '_status')) {
					$this->load->model('extension/total/' . $result['code']);
					
					// We have to put the totals in an array so that they pass by reference.
					$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
				}
			}
			$sort_order = array();
			foreach ($totals as $key => $value) {
				$sort_order[$key] = $value['sort_order'];
			}
			array_multisort($sort_order, SORT_ASC, $totals);
			$json['data']['totals'] = array();
			foreach ($totals as $total) {
				$json['data']['totals'][] = array(
					'title' => $total['title'],
					'text'  => $this->currency->format($total['value'], $this->session->data['currency'])
				);
			}
			$json['status'] = 'success';
			$json['message'] = 'success';
			}else{
				$json['status'] = 'error';
				$json['data'] = array();
				$json['message'] = 'No records Found';
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}