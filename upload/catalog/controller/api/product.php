<?php
class ControllerApiProduct extends Controller {
	public function getProductByCategories(){
		$this->load->model('catalog/product');
		$category_id = $this->request->post['category_id'];
		$json = array();
		if(($this->request->server['REQUEST_METHOD'] == 'POST') && $category_id != ''){
			$fetchAllProducts = $this->model_catalog_product->getProductbyCatid($category_id);
			if(!empty($fetchAllProducts) && count($fetchAllProducts)>0){
				$json['status'] = 'success';
				$json['message'] = $this->language->get('Success');
				$json['data'] = $fetchAllProducts;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('No record found!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('please select category id!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getProductsBySearch(){
		$this->load->model('catalog/product');
		$search = $this->request->post['search'];
		$json = array();
		if(($this->request->server['REQUEST_METHOD'] == 'POST') && $search != ''){
			$fetchAllProductsBySearch = $this->model_catalog_product->getProductsBySearch($search);
			if(count($fetchAllProductsBySearch)>0 && !empty($fetchAllProductsBySearch)){
				$json['status'] = 'success';
				$json['message'] = $this->language->get('Success');
				$json['data'] = $fetchAllProductsBySearch;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('no record found!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('no record found!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
?>