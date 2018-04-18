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
	
	public function getProductSearch()
	{
		echo "hello";
	}
}
?>