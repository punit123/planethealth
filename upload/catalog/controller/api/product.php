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
	
	public function FeaturedProduct()
	{
		$this->load->model('catalog/product');
		$json = array();
        $featured_product = $this->model_catalog_product->getFeaturedProductId();
		$featured_product_id=$featured_product["product"];
        $featured_product = $this->model_catalog_product->getFeaturedproduct($featured_product_id);
		if(count($featured_product)>0 && !empty($featured_product)){
		$json['status'] = 'success';
		$json['message'] = $this->language->get('Success');
		$json['data'] = $featured_product;
		}
		else
		{
		$json['status'] = 'error';
		$json['message'] = $this->language->get('no record found!');

		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));			
	}
	
	public function getProductDetails(){
		$this->load->model('catalog/product');
		$product_id = $this->request->post['product_id'];
		$json = array();
		if(($this->request->server['REQUEST_METHOD'] == 'POST') && $product_id != ''){
			$fetchAllProductDetails = $this->model_catalog_product->getProduct($product_id);
			if(isset($fetchAllProductDetails) && !empty($fetchAllProductDetails) && count($fetchAllProductDetails)>0){
				$json['status'] = 'success';
				$json['message'] = $this->language->get('Success');
				$json['data'] = $fetchAllProductDetails;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('no record found!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid product!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getProductRelatedDetails(){
		$this->load->model('catalog/product');
		$product_id = $this->request->post['product_id'];
		$json = array();
		if(($this->request->server['REQUEST_METHOD'] == 'POST') && $product_id != ''){
			$fetchAllProductDetails = $this->model_catalog_product->getProduct($product_id);
			if(isset($fetchAllProductDetails) && !empty($fetchAllProductDetails) && count($fetchAllProductDetails)>0){
				$fetchAllRelatedProductDetails = $this->model_catalog_product->getAllProductRelated($fetchAllProductDetails['product_id']);
				if(count($fetchAllRelatedProductDetails)>0){
					$result = $fetchAllRelatedProductDetails;
				}
				else{
					$result = '';
				}
				$json['status'] = 'success';
				$json['message'] = $this->language->get('Success');
				$json['data'] = $fetchAllProductDetails;
				$json['data']['related_product'] = $result;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('no record found!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid product!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
?>