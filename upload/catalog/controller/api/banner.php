<?php
class ControllerApiBanner extends Controller {
	public function index() {
		$this->load->language('api/banner');

		// Delete past voucher in case there is an error
		unset($this->session->data['banner']);

		$json = array();

		if (!isset($this->session->data['api_id'])) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			$this->load->model('design/banner');

			$banner_info = $this->model_design_banner->getBanner(7);

			if ($banner_info) {
				$this->session->data['banner'] = $this->request->post['banner'];
				$json['data'] = $banner_info;
				$json['success'] = $this->language->get('text_success');
			} else {
				$json['error'] = $this->language->get('error_voucher');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
