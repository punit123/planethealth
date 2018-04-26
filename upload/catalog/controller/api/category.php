<?php
class ControllerApiCategory extends Controller {
	public function list() {
		$this->load->language('api/category');

		// Delete past voucher in case there is an error
		unset($this->session->data['category']);

		$json = array();

			$this->load->model('catalog/category');

			if (isset($this->request->post['category'])) {
				$parentCategory = $this->request->post['category'];
			} else {
				$parentCategory = '0';
			}

			$category_info = $this->model_catalog_category->getCategories($parentCategory);

			if ($category_info) {
				$this->session->data['category'] = $this->request->post['category'];
				$json['status'] = 'success';
				$json['message'] = 'success';
				$json['data'] = $category_info;
				
			} else {
				$json['status'] = 'error';
				$json['message'] = $this->language->get('No record found!');
			}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function categoryToBanner(){
		$this->load->language('api/category');
		$this->load->model('catalog/category');
		$json = array();
	
		$category_id = $this->request->post['category_id'];
		if($category_id){
			$categoryToBannerDetail = $this->model_catalog_category->getCatoryToBannerDetail($category_id);
			if(!empty($categoryToBannerDetail) && count($categoryToBannerDetail)>0){
				$json['status'] = 'success';
				$json['message'] = 'success';
				$json['data'] = $categoryToBannerDetail;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = 'Category banner not found!';
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid Category!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
