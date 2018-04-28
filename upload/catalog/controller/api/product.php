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
				$json['message'] = 'No product found for this category!';
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('please select category!');
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
	
	public function FeaturedProduct(){
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
	
	/*
	public function getProductRelatedDetails(){
		$this->load->model('catalog/product');
		$product_id = $this->request->post['product_id'];
		$json = array();
		if(($this->request->server['REQUEST_METHOD'] == 'POST') && $product_id != ''){
			$fetchAllProductDetails = $this->model_catalog_product->getProduct($product_id);
			if(isset($fetchAllProductDetails) && !empty($fetchAllProductDetails) && count($fetchAllProductDetails)>0){
				$fetchAllRelatedProductDetails = $this->model_catalog_product->getAllProductRelated($product_id);
				if(count($fetchAllRelatedProductDetails)>0){
					$result = $fetchAllRelatedProductDetails;
				}
				else{
					$result = 'No related product found!';
				}
				$json['status'] = 'success';
				$json['message'] = $this->language->get('Success');
				//$json['data'] = $fetchAllProductDetails;
				$json['data'] = $result;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('Invalid product!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid product!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	*/
	
	public function getProductRelatedDetails(){
		$this->load->model('catalog/product');
		$product_id = $this->request->post['product_id'];
		$json = array();
		if(($this->request->server['REQUEST_METHOD'] == 'POST') && $product_id != ''){
			$fetchAllRelatedProductDetails = $this->model_catalog_product->getAllProductRelated($product_id);
			if(count($fetchAllRelatedProductDetails)>0){
				$json['status'] = 'success';
				$json['message'] = $this->language->get('Success');
				$json['data'] = $fetchAllRelatedProductDetails;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = 'No related product found!';
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid product!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getAllManufacturerList(){
		$this->load->model('catalog/product');
		$json = array();
		$getManufacturer = $this->model_catalog_product->getManufacturer();
		if(!empty($getManufacturer) && count($getManufacturer)>0 && isset($getManufacturer)){
			$json['status'] = 'success';
			$json['message'] = $this->language->get('Success');
			$json['data'] = $getManufacturer;
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('no record found!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getAllManufacturerListById(){
		$this->load->model('catalog/product');
		$json = array();
		$manufatcure_id = $this->request->post['manufacturer_id'];
		if($manufatcure_id && $manufatcure_id != ''){
			$manufacturer_id = $this->request->post['manufacturer_id'];
			$getManufacturerById = $this->model_catalog_product->getManufacturerById($manufacturer_id);
			if(isset($getManufacturerById) && !empty($getManufacturerById) && count($getManufacturerById)){
				$json['status'] = 'success';
				$json['message'] = $this->language->get('Success');
				$json['data'] = $getManufacturerById;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('no record found!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid manufacturer!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getAllBrandList(){
		$this->load->model('catalog/product');
		$json = array();
		$getBrand = $this->model_catalog_product->getBrand();
		if(!empty($getBrand) && count($getBrand)>0 && isset($getBrand)){
			$json['status'] = 'success';
			$json['message'] = $this->language->get('Success');
			$json['data'] = $getBrand;
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('no record found!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getAllBrandListById(){
		$this->load->model('catalog/product');
		$json = array();
		$brand_id = $this->request->post['brand_id'];
		if($brand_id && $brand_id != ''){
			$brand_id = $this->request->post['brand_id'];
			$getBrandById = $this->model_catalog_product->getBrandById($brand_id);
			if(isset($getBrandById) && !empty($getBrandById) && count($getBrandById)){
				$json['status'] = 'success';
				$json['message'] = $this->language->get('Success');
				$json['data'] = $getBrandById;
			}
			else{
				$json['status'] = 'error';
				$json['message'] = $this->language->get('no record found!');
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid brand!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function brandManufacturerList(){
		$this->load->model('catalog/product');
		$json = array();
		$manufatcure_id = $this->request->post['manufacturer_id'];
		if(isset($manufatcure_id)&& count($manufatcure_id)>0){
			$getBrandManufacturer = $this->model_catalog_product->getBrandManufacturer($manufatcure_id);
			if(isset($getBrandManufacturer) && !empty($getBrandManufacturer) && count($getBrandManufacturer)){
				$json['status'] = 'success';
				$json['message'] = $this->language->get('Success');
				$json['data'] = $getBrandManufacturer;
			}
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('Invalid brand!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function storeList(){
		$this->load->model('catalog/product');
		$json = array();
		$getstoredetail = $this->model_catalog_product->getStoreId();
		if(isset($getstoredetail) && !empty($getstoredetail) && count($getstoredetail)){
				$json['status'] = 'success';
				$json['message'] = $this->language->get('Success');
				$json['data'] = $getstoredetail;
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('No Store Found!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getAllProductList(){
		$this->load->model('catalog/product');
		$json = array();
		$customer_id = $this->request->post['customer_id'];
		$getAllProduct = $this->model_catalog_product->getProducts();
		if(!empty($getAllProduct)){
			$json['status'] = 'success';
			$json['message'] = $this->language->get('Success');
			$json['data'] = $getAllProduct;
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('No products Found!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
?>