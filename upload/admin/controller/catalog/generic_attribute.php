<?php
class ControllerCatalogGenericAttribute extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('catalog/generic_attribute');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/generic_attribute');

		$this->getList();
	}

	public function add() {
		
		$this->load->language('catalog/generic_attribute');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('catalog/generic_attribute');
		//echo "<pre>"; print_r($this->request->post); die;
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_generic_attribute->addAttribute($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/generic_attribute', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('catalog/generic_attribute');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/generic_attribute');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_generic_attribute->editAttribute($this->request->get['attribute_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/generic_attribute', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('catalog/attribute');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/generic_attribute');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $attribute_id) {
				$this->model_catalog_generic_attribute->deleteAttribute($attribute_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/attribute', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'a.title';
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

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/generic_attribute', 'user_token=' . $this->session->data['user_token'] . $url)
		);

		$data['add'] = $this->url->link('catalog/generic_attribute/add', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['delete'] = $this->url->link('catalog/generic_attribute/delete', 'user_token=' . $this->session->data['user_token'] . $url);

		$data['attributes'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$attribute_total = $this->model_catalog_generic_attribute->getTotalAttributes();

		$results = $this->model_catalog_generic_attribute->getAttributes($filter_data);

		foreach ($results as $result) {
			$data['attributes'][] = array(
				'id'    		   => $result['id'],
				'generic_name'       => $result['generic_name'],
				'title'            => $result['title'],
				'default_value'    => $result['default_value'],
				'sort_order'       => $result['sort_order'],
				'edit'             => $this->url->link('catalog/generic_attribute/edit', 'user_token=' . $this->session->data['user_token'] . '&attribute_id=' . $result['id'] . $url)
			);
		}
		//echo '<pre>'; print_r($data['attributes']); die;
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_title'] = $this->url->link('catalog/generic_attribute', 'user_token=' . $this->session->data['user_token'] . '&sort=ad.title' . $url);
		$data['sort_generic_name'] = $this->url->link('catalog/generic_attribute', 'user_token=' . $this->session->data['user_token'] . '&sort=generic_name' . $url);
		$data['sort_sort_order'] = $this->url->link('catalog/generic_attribute', 'user_token=' . $this->session->data['user_token'] . '&sort=a.sort_order' . $url);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $attribute_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('catalog/generic_attribute', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($attribute_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($attribute_total - $this->config->get('config_limit_admin'))) ? $attribute_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $attribute_total, ceil($attribute_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
        //echo "<pre>"; print_r($data); die;
		$this->response->setOutput($this->load->view('catalog/generic_attribute_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['attribute_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		if (isset($this->error['generic'])) {
			$data['error_generic'] = $this->error['generic'];
		} else {
			$data['error_generic'] = '';
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/generic_attribute', 'user_token=' . $this->session->data['user_token'] . $url)
		);

		if (!isset($this->request->get['attribute_id'])) {
			$data['action'] = $this->url->link('catalog/generic_attribute/add', 'user_token=' . $this->session->data['user_token'] . $url);
		} else {
			$data['action'] = $this->url->link('catalog/generic_attribute/edit', 'user_token=' . $this->session->data['user_token'] . '&attribute_id=' . $this->request->get['attribute_id'] . $url);
		}

		$data['cancel'] = $this->url->link('catalog/generic_attribute', 'user_token=' . $this->session->data['user_token'] . $url);

		if (isset($this->request->get['attribute_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$attribute_info = $this->model_catalog_generic_attribute->getAttribute($this->request->get['attribute_id']);
		}
       //echo '<pre>'; print_r($attribute_info); die;
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();
		$lang = (int)$this->config->get('config_language_id');
		
		if (isset($this->request->post['title'][$lang])) {
			$data['title'] = $this->request->post['title'][$lang];
		} elseif (!empty($attribute_info)) { 
			$data['title'] = $attribute_info['title'];
		} else {
			$data['title'] = '';
		}
		if (isset($this->request->post['default_value'][$lang])) {
			$data['default_value'] = $this->request->post['default_value'][$lang];
		} elseif (!empty($attribute_info)) {
			$data['default_value'] = $attribute_info['default_value'];
		} else {
			$data['default_value'] = '';
		}
		//echo "<pre>"; print_r($data); die;
		if (isset($this->request->post['generic_id'])) {
			$data['generic_id'] = $this->request->post['generic_id'];
		} elseif (!empty($attribute_info)) {
			$data['generic_id'] = $attribute_info['generic_id'];
		} else {
			$data['generic_id'] = '';
		}

		$this->load->model('catalog/generic');

		$data['generic'] = $this->model_catalog_generic->getAllGenericName();
        //echo '<pre>';print_r($data['generic']); die;
		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($attribute_info)) {
			$data['sort_order'] = $attribute_info['sort_order'];
		} else {
			$data['sort_order'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		//echo "<pre>"; print_r($data); die;
		$this->response->setOutput($this->load->view('catalog/generic_attribute_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'catalog/attribute')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['generic_id']) {
			$this->error['generic'] = $this->language->get('error_generic');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'catalog/attribute')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		$this->load->model('catalog/product');

		foreach ($this->request->post['selected'] as $attribute_id) {
			$product_total = $this->model_catalog_product->getTotalProductsByAttributeId($attribute_id);

			if ($product_total) {
				$this->error['warning'] = sprintf($this->language->get('error_product'), $product_total);
			}
		}

		return !$this->error;
	}

	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_name'])) {
			$this->load->model('catalog/generic_attribute');

			$filter_data = array(
				'filter_name' => $this->request->get['filter_name'],
				'start'       => 0,
				'limit'       => 5
			);

			$results = $this->model_catalog_generic_attribute->getAttributes($filter_data);

			foreach ($results as $result) {
				$json[] = array(
					'attribute_id'    => $result['attribute_id'],
					'name'            => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
					'generic' => $result['generic']
				);
			}
		}

		$sort_order = array();

		foreach ($json as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
