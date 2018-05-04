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
		$mainArray = array();
		if(($this->request->server['REQUEST_METHOD'] == 'POST') && $product_id != ''){
			$fetchAllProductDetails = $this->model_catalog_product->getProduct($product_id);
			if(isset($fetchAllProductDetails) && !empty($fetchAllProductDetails) && count($fetchAllProductDetails)>0){
				$mainArray[0]['details'] = $fetchAllProductDetails; 				
				$productAttribute = $this->model_catalog_product->getProductAttributes($product_id);			
				$mainArray[0]['attributes'] = $productAttribute;
				$productAttribute = $this->model_catalog_product->getProductImages($product_id);			
				$mainArray[0]['images'] = $productAttribute;					
				$productOptions = $this->model_catalog_product->getProductOptions($product_id);			
				$mainArray[0]['options'] = $productOptions;				
				$json['status'] = 'success';
				$json['message'] = $this->language->get('Success');
				$json['data'] = $mainArray;
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
		
		if (isset($this->request->post['search'])) {
			$search = $this->request->post['search'];
		} else {
			$search = '';
		}
		if (isset($this->request->post['sort_by'])) {
			$sort = $this->request->post['sort_by'];
		} else {
			$sort = 'sort_order';
		}
		if (isset($this->request->post['sort_type'])) {
			$order = $this->request->post['sort_type'];
		} else {
			$order = 'ASC';
		}
		if (isset($this->request->post['offset'])) {
			$offset = $this->request->post['offset'];
		} else {
			$offset = 0;
		}
		$totalBrand = 0;
		$BrandTotalArr = array();
		if (isset($this->request->post['limit'])) {
			$limit = (int)$this->request->post['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}
		
		$filter_data = array(
				'filter_name'         	=> $search,
				'sort'                	=> $sort,
				'order'               	=> $order,
				'start'               	=> $offset,
				'limit'               	=> $limit
			);
		$BrandTotalArr = $this->model_catalog_product->getBrand($filter_data, $total = 1);
		$getBrand = $this->model_catalog_product->getBrand($filter_data, $total = 0);
		if(!empty($getBrand) && count($getBrand)>0 && isset($getBrand)){
			$totalBrand      	= count($BrandTotalArr); 	
			$json['status'] 	= 'success';
			$json['message'] 	= $this->language->get('Success');
			$json['total'] 		= $totalBrand;
			$json['data'] 		= $getBrand;
		}
		else{
			$json['status'] = 'error';
			$json['message'] = $this->language->get('no record found!');
			$json['total'] = $totalBrand;
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
		if (isset($this->request->post['sort_by'])) {
			$sort = $this->request->post['sort_by'];
		} else {
			$sort = 'p.sort_order';
		}
		if (isset($this->request->post['sort_type'])) {
			$order = $this->request->post['sort_type'];
		} else {
			$order = 'ASC';
		}
		if (isset($this->request->post['page'])) {
			$page = $this->request->post['page'];
		} else {
			$page = 1;
		}
		if (isset($this->request->post['offset'])) {
			$offset = $this->request->post['offset'];
		} else {
			$offset = 0;
		}
		if (isset($this->request->post['limit'])) {
			$limit = (int)$this->request->post['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}
		
		$filter_data = array(
				'filter_name'         	=> $search,
				'filter_manufacturer_id'=> $manufacturer_id,
				'sort'                	=> $sort,
				'order'               	=> $order,
				'start'               	=> $offset,
				'limit'               	=> $limit
			);
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
	public function getProductInfo(){
		$json = array();
		$this->load->language('product/search');
		$this->load->model('catalog/category');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');
        $search = "";
		$tag    = "";
		$description = '';
		$category_id = 0;
		$sub_category = '';
		$manufacturer_id = '';
		$url = '';
		$product_total = 0;
		$product_detail = '';
		$product_detail_id = '';
		$featured_product_id = '';
		$brand_id = '';
		$customer_id = $this->request->post['customer_id'];
	if(($this->request->server['REQUEST_METHOD'] == 'POST')){
		
		if (isset($this->request->post['search_by'])) {
			$search_by = $this->request->post['search_by'];
		} else {
			$search_by = '';
		}
		
		if(isset($search_by) && !empty($search_by)){
			if (isset($this->request->post['search_value'])) {
				$search_value = $this->request->post['search_value'];
			} else {
				$search_value = '';
			}
			if($search_by == "search"){
				if(isset($search_value)){
					$search = $search_value;
				}
			}
			if($search_by == "product_detail"){
				if(isset($search_value)){
					$product_detail_id = $search_value;
				}
			}
			if($search_by == "tag"){
				if(isset($search_value)){
					$tag = $search_value;
				} else if(isset($search)){
					$tag = $search;
			
			} else {
					$tag = '';
				}
			}
			if($search_by == "description"){
				if(isset($search_value)){
					$description = $search_value;
				} else {
					$description = '';
				}
			}
			if($search_by == "category"){
				if(isset($search_value)){
					$category_id = $search_value;
				} else {
					$category_id = 0;
				}
			} 
			
			if($search_by == "subcategory"){
				if(isset($search_value)){
					$sub_category = $search_value;
				} else {
					$sub_category = '';
				}
			}
			if($search_by == "manufacturer"){
				if(isset($search_value)){
					$manufacturer_id = $search_value;
				} else {
					$manufacturer_id = '';
				}
			}
			if($search_by == "brand"){
				if(isset($search_value)){
					$brand_id = $search_value;
				} else {
					$brand_id = '';
				}
			}
		}
		if (isset($this->request->post['sort_by'])) {
			$sort = $this->request->post['sort_by'];
		} else {
			$sort = 'p.sort_order';
		}
		if (isset($this->request->post['sort_type'])) {
			$order = $this->request->post['sort_type'];
		} else {
			$order = 'ASC';
		}
		if (isset($this->request->post['offset']) && $this->request->post['offset'] !=0) {
			$offset = $this->request->post['offset'];
		} else {
			$offset = 0;
		}
		if (isset($this->request->post['limit']) && $this->request->post['limit'] !=0) {
			$limit = (int)$this->request->post['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}
		$this->load->model('catalog/category');
        if($search_by == "featured_product"){
			$featured_product = $this->model_catalog_product->getFeaturedProductId();
			$featured_product_id = $featured_product["product"];		
		}
        if($search_by == "latest_product"){
			$latest_product= $this->model_catalog_product->getLatestProducts(5);
			$featured_product_id = array_keys($latest_product);		
		}
        if($search_by == "related_product"){
			$latest_product= $this->model_catalog_product->getProductRelated($search_value);
			if(!empty($latest_product)){
				$featured_product_id = array_keys($latest_product);
			}else{
				$featured_product_id = array(0);
			}
		}
        if($search_by == "wishlist"){
			$this->load->model('account/wishlist');
			$latest_product = $this->model_account_wishlist->getWishlistAPI($customer_id);
			if(!empty($latest_product)){
				$featured_product_id = array_column($latest_product, 'product_id');	
			}else{
				$featured_product_id = array(0);	
			}
			
		}		
		$data['products'] = array();
			$filter_data = array(
			    'customer_id'         		=> $customer_id,
				'filter_name'         		=> $search,
				'filter_tag'          		=> $tag,
				'filter_description'  		=> $description,
				'filter_category_id'  		=> $category_id,
				'filter_sub_category' 		=> $sub_category,
				'filter_manufacturer_id'	=> $manufacturer_id,
				'filter_featured_product_id'=> $featured_product_id,
				'filter_brand_id'         	=> $brand_id,
				'sort'                		=> $sort,
				'order'               		=> $order,
				'start'               		=> $offset,
				'limit'               		=> $limit
			);
			
            if($search_by == 'product_detail' && isset($product_detail_id) && $product_detail_id != 0) {
				$product_total_res = 1;
			    $results = $this->model_catalog_product->getProduct($product_detail_id);		
			} else {
				$product_total_res = $this->model_catalog_product->getProductsInfo($filter_data, $totalFlag = 1);
			    $results = $this->model_catalog_product->getProductsInfo($filter_data, $totalFlag = 0);
			}
			
            if(isset($results) && !empty($results)){
				$product_total = count($product_total_res);
			}
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}
				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}
				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}
				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}
				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}
				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'is_prescription_required'  => $result['is_prescription_required'],
					'is_cart'  => $result['is_cart'],					
					'is_whishlist'  => $result['is_whishlist'],
					'thumb'       => $image,
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
		if(!empty($data) && $product_total>0){
			$json['status']  = 'success';
			$json['message'] = $this->language->get('Success');
			$json['total']   = $product_total;
			$json['data'] 	 = $data;
			
		} else{
			$json['status'] = 'error';
			$json['total']   = $product_total;
			$json['message'] = $this->language->get('No products Found!');
		}
		}else{
			$json['status'] = 'error';
			$json['total']   = $product_total;
			$json['message'] = $this->language->get('No products Found!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	//Search
	public function allSearch() {
		$this->load->language('product/search');
		$this->load->model('catalog/category');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');
        $customer_id = 0;
		$product_total = 0;
		$json = array();
		if(isset($this->request->post['customer_id']) && !empty($this->request->post['customer_id'])){
			$customer_id = $this->request->post['customer_id'];
		}
		$search = '';
		if (isset($this->request->post['keyword']) && !empty($this->request->post['keyword'])) {
			$search = $keyword = $this->request->post['keyword'];
		} else {
			$keyword = '';
		}
		if (isset($this->request->post['sort_by'])) {
			$sort = $this->request->post['sort_by'];
		} else {
			$sort = 'p.sort_order';
		}
		if (isset($this->request->post['sort_type'])) {
			$order = $this->request->post['sort_type'];
		} else {
			$order = 'ASC';
		}
		if (isset($this->request->post['offset'])) {
			$offset = $this->request->post['offset'];
		} else {
			$offset = 0;
		}
		if (isset($this->request->post['limit'])) {
			$limit = (int)$this->request->post['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}
		$this->load->model('catalog/category');
		$data['products'] = array();
		if (isset($this->request->post['keyword'])) {
			$filter_data = array(
				'customer_id'         => $customer_id,
				'filter_name'         => $keyword,
				'sort'                => $sort,
				'order'               => $order,
				'start'               => $offset,
				'limit'               => $limit
			);
			$product_total = $this->model_catalog_product->getAllSearch($filter_data, $totalFlag = 1);
			$results = $this->model_catalog_product->getAllSearch($filter_data, $totalFlag = 0);
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}
				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}
				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}
				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}
				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}
				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'is_prescription_required'  => $result['is_prescription_required'],
					'is_cart'  => $result['is_cart'],					
					'is_whishlist'  => $result['is_whishlist'],					
					'thumb'       => $image,
					'name'        => $result['name'],
					'manufacturer'=> $result['manufacturer'],
					'brand'       => $result['brand'],					
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'discount'     => 5,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $result['rating'],
					'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $result['product_id'] . $url)
				);
			}
			if(!empty($data)){
				$json['status']  = 'success';
				$json['message'] = $this->language->get('Success');
				$json['total']   = count($product_total);
				$json['data'] 	 = $data;			
			} else{
				$json['status'] = 'error';
				$json['total']   = $product_total;
				$json['message'] = $this->language->get('No products Found!');
			}
		} else {
			$json['status'] = 'error';
			$json['total']   = $product_total;
			$json['message'] = $this->language->get('No products Found!');
		
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
?>
