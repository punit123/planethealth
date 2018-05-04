<?php
class ControllerApiAutocomplete extends Controller {
	public function list() {
		
		$json = $autocomplte_res = array();

			$this->load->model('catalog/category');

			if (isset($this->request->get['keywords'])) {
				$keywords = $this->request->get['keywords'];
			}

			if(!empty($keywords))
			{
				$category_info = $this->model_catalog_category->getCategoryForAutoComplete($keywords);

				$brand_info = $this->model_catalog_category->getBrandForAutoComplete($keywords);

				$product_info = $this->model_catalog_category->getProductForAutoComplete($keywords);

				$manufacture_info = $this->model_catalog_category->getManufactureForAutoComplete($keywords);

				$generics_info = $this->model_catalog_category->getGenericsForAutoComplete($keywords);

				$deases_info = $this->model_catalog_category->getDeseaseForAutoComplete($keywords);


				$tags_info = $this->model_catalog_category->getTagsForAutoComplete($keywords);


				$autocomplte_res = array_merge($category_info,$brand_info,$product_info,$manufacture_info,$generics_info,$tags_info,$deases_info);
					
				if ($autocomplte_res) {
					$json['status'] = 'success';
					$json['message'] = 'success';
					$json['data'] = $autocomplte_res;
					
				} else {
					$json['status'] = 'error';
					$json['message'] = $this->language->get('No record found!');
				}
			}
			else
			{
				$json['status'] = 'error';
				$json['message'] = 'Please pass value in keywords';		
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
}
