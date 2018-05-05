<?php
class ControllerCatalogProductOptionImage extends Controller {
	private $error = array();

	public function add() {
		$this->load->language('catalog/product_option_image');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/product_option_image');

		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$product_option_value_id =  $this->request->get['product_option_value_id'];
			$this->model_catalog_product_option_image->addProductOptionImage($product_option_value_id,$this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['product_option_id'])) {
				$url .= '&product_option_id='.$this->request->get['product_option_id'];
			}
			$this->response->redirect($this->url->link('catalog/product_option/edit', 'user_token=' . $this->session->data['user_token'] . $url));
		}
		
		$this->getForm();
	}
	
	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['option_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['product'])) {
			$data['error_product'] = $this->error['product'];
		} else {
			$data['error_product'] = '';
		}

		if (isset($this->error['option'])) {
			$data['error_option'] = $this->error['option'];
		} else {
			$data['error_option'] = '';
		}

		$url = '';

		if (isset($this->request->get['product_option_id'])) {
			$url .= '&product_option_id=' . $this->request->get['product_option_id'];
		}
		
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/product_option_image', 'user_token=' . $this->session->data['user_token'] . $url)
		);

		if (!isset($this->request->get['product_option_value_id'])) {
			$data['product_option_value_id'] = '';
			$data['action'] = $this->url->link('catalog/product_option_image/add', 'user_token=' . $this->session->data['user_token'] . $url);
		} else {
			$data['product_option_value_id'] = $this->request->get['product_option_value_id'];
			$data['action'] = $this->url->link('catalog/product_option_image/add', 'user_token=' . $this->session->data['user_token'] . '&product_option_value_id=' . $this->request->get['product_option_value_id'] . $url);
		}

		$data['cancel'] = $this->url->link('catalog/product_option/edit', 'user_token=' . $this->session->data['user_token'] . $url);


		$data['user_token'] = $this->session->data['user_token'];

		// Images
		if (isset($this->request->post['product_image'])) {
			$product_images = $this->request->post['product_image'];
		} elseif (isset($this->request->get['product_option_value_id'])) {
			$product_images = $this->model_catalog_product_option_image->getProductOptionImages($this->request->get['product_option_value_id']);
		} else {
			$product_images = array();
		}

		$data['product_images'] = array();

		foreach ($product_images as $product_image) {
			if ($product_image['image']!='') {
				$image = $product_image['image'];
				$thumb = $product_image['image'];
			} else {
				$image = '';
				$thumb = 'no_image.png';
			}

			$data['product_images'][] = array(
				'image'      => $image,
				'thumb'      => $thumb,
				'sort_order' => $product_image['sort_order']
			);
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/product_option_image', $data));
	}
}