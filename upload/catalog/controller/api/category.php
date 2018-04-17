<?php
class ControllerApiCategory extends Controller {
	public function list() {
		$this->load->language('api/category');
		$this->load->model('catalog/category');
		// Delete past voucher in case there is an error
		unset($this->session->data['category']);

		$json = array();
			if (isset($this->request->post['category'])) {
				$parentCategory = $this->request->post['category'];
			} else {
				$parentCategory = '0';
			}

			$category_info = $this->model_catalog_category->getCategories($parentCategory);
			if ($category_info) {
				$this->session->data['category'] = $this->request->post['category'];
				$json['data'] = $category_info;
				$json['success'] = $this->language->get('text_success');
			} else {
				$json['error'] = $this->language->get('error_voucher');
			}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
