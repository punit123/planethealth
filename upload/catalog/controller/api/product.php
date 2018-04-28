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
		if (isset($this->request->get['search_by'])) {
			$search_by = $this->request->get['search_by'];
		} else {
			$search_by = '';
		}
		
		if(isset($search_by) && !empty($search_by)){
			if (isset($this->request->get['search_value'])) {
				$search_value = $this->request->get['search_value'];
			} else {
				$search_value = '';
			}
			if($search_by == "search"){
				if(isset($search_value)){
					$search = $search_value;
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
			
		}
		//echo $search_by . "--" .$search_value; die;
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'p.sort_order';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}
		$this->load->model('catalog/category');

		// 3 Level Category Search
		$data['categories'] = array();

		$categories_1 = $this->model_catalog_category->getCategories(0);

		foreach ($categories_1 as $category_1) {
			$level_2_data = array();

			$categories_2 = $this->model_catalog_category->getCategories($category_1['category_id']);

			foreach ($categories_2 as $category_2) {
				$level_3_data = array();

				$categories_3 = $this->model_catalog_category->getCategories($category_2['category_id']);

				foreach ($categories_3 as $category_3) {
					$level_3_data[] = array(
						'category_id' => $category_3['category_id'],
						'name'        => $category_3['name'],
					);
				}

				$level_2_data[] = array(
					'category_id' => $category_2['category_id'],
					'name'        => $category_2['name'],
					'children'    => $level_3_data
				);
			}

			$data['categories'][] = array(
				'category_id' => $category_1['category_id'],
				'name'        => $category_1['name'],
				'children'    => $level_2_data
			);
		}

		$data['products'] = array();

		if (isset($search) || isset($tag)) {
			$filter_data = array(
				'filter_name'         	=> $search,
				'filter_tag'          	=> $tag,
				'filter_description'  	=> $description,
				'filter_category_id'  	=> $category_id,
				'filter_sub_category' 	=> $sub_category,
				'filter_manufacturer_id'=> $manufacturer_id,
				'sort'                	=> $sort,
				'order'               	=> $order,
				'start'               	=> ($page - 1) * $limit,
				'limit'               	=> $limit
			);

			$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

			$results = $this->model_catalog_product->getProducts($filter_data);

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
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $result['rating'],
					'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $result['product_id'] . $url)
				);
			}

			$data['limits'] = array();

			$limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

			sort($limits);

			foreach($limits as $value) {
				$data['limits'][] = array(
					'text'  => $value,
					'value' => $value,
					'href'  => $this->url->link('product/search', 'language=' . $this->config->get('config_language') . $url . '&limit=' . $value)
				);
			}

			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$pagination = new Pagination();
			$pagination->total = $product_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link('product/search', 'language=' . $this->config->get('config_language') . $url . '&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

			if (isset($this->request->get['search']) && $this->config->get('config_customer_search')) {
				$this->load->model('account/search');

				if ($this->customer->isLogged()) {
					$customer_id = $this->customer->getId();
				} else {
					$customer_id = 0;
				}

				if (isset($this->request->server['REMOTE_ADDR'])) {
					$ip = $this->request->server['REMOTE_ADDR'];
				} else {
					$ip = '';
				}

				$search_data = array(
					'keyword'       => $search,
					'category_id'   => $category_id,
					'sub_category'  => $sub_category,
					'description'   => $description,
					'products'      => $product_total,
					'customer_id'   => $customer_id,
					'ip'            => $ip
				);

				$this->model_account_search->addSearch($search_data);
			}
		}

		$data['search'] = $search;
		$data['description'] = $description;
		$data['category_id'] = $category_id;
		$data['sub_category'] = $sub_category;
		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['limit'] = $limit;

		$data['language'] = $this->config->get('config_language');
		if(!empty($data)){
			$json['status'] = 'success';
			$json['message'] = $this->language->get('Success');
			$json['data'] = $data;
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