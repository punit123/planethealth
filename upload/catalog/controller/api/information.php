<?php
class ControllerApiInformation extends Controller {
	
	public function getAllCmsInformation(){
		$this->load->model('catalog/information');
		$cmsInformation = $this->model_catalog_information->getInformations();
		
		$json['success'] = $this->language->get('success');
		$json['data'] = $cmsInformation;
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getAllCmsInformationById(){
		$this->load->model('catalog/information');
		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$cmsInformationById = $this->request->post['information_id'];
			
			$cmsInfoById = $this->model_catalog_information->getInformation($cmsInformationById);
			if(count($cmsInfoById)>0 && $cmsInfoById != ''){
				$json['success'] = $this->language->get('success');
				$json['data'] = $cmsInfoById;
			}
			else{
				$json['error'] = $this->language->get('error');
				$json['message'] = $this->language->get('Invalid Information!');
			}
		}
		else{
			$json['error'] = $this->language->get('error');
			$json['message'] = $this->language->get('Invalid Information!');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}