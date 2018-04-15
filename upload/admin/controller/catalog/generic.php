<?php
class ControllerCatalogGeneric extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('catalog/generic');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/generic');

		$this->getList();
	}

	public function add() {
		$this->load->language('catalog/generic');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/generic');
       // echo '<pre>'; print_r($this->request->post); die;
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_generic->addGeneric($this->request->post);

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

			$this->response->redirect($this->url->link('catalog/generic', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('catalog/generic');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/generic');
        //echo '<pre>'; print_r($this->request->post); die;
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			
			$this->model_catalog_generic->editGeneric($this->request->get['id'], $this->request->post);

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

			$this->response->redirect($this->url->link('catalog/generic', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('catalog/generic');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/generic');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			
			foreach ($this->request->post['selected'] as $generic_id) {
				$this->model_catalog_generic->deleteGeneric($generic_id);
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

			$this->response->redirect($this->url->link('catalog/generic', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'ag.generic_name';
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
			'href' => $this->url->link('catalog/generic', 'user_token=' . $this->session->data['user_token'] . $url)
		);

		$data['add'] = $this->url->link('catalog/generic/add', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['delete'] = $this->url->link('catalog/generic/delete', 'user_token=' . $this->session->data['user_token'] . $url);

		$data['generics'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$generic_total = $this->model_catalog_generic->getTotalGenerics();

		$results = $this->model_catalog_generic->getGenerics($filter_data);
		
		foreach ($results as $result) {
			$data['generics'][] = array(
				'id' => $result['id'],
				'generic_name'               => $result['generic_name'],
				'sort_order'         => $result['sort_order'],
				'edit'               => $this->url->link('catalog/generic/edit', 'user_token=' . $this->session->data['user_token'] . '&id=' . $result['id'] . $url)
			);
		}

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

		$data['sort_name'] = $this->url->link('catalog/generic', 'user_token=' . $this->session->data['user_token'] . '&sort=ag.generic_name' . $url);
		$data['sort_sort_order'] = $this->url->link('catalog/generic', 'user_token=' . $this->session->data['user_token'] . '&sort=ag.sort_order' . $url);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $generic_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('catalog/generic', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($generic_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($generic_total - $this->config->get('config_limit_admin'))) ? $generic_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $generic_total, ceil($generic_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
        //echo '<pre>'; print_r($data); die;
		$this->response->setOutput($this->load->view('catalog/generic_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['generic_name'])) {
			$data['error_generic_name'] = $this->error['generic_name'];
		} else {
			$data['error_generic_name'] = array();
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
			'href' => $this->url->link('catalog/generic', 'user_token=' . $this->session->data['user_token'] . $url)
		);

		if (!isset($this->request->get['id'])) {
			$data['action'] = $this->url->link('catalog/generic/add', 'user_token=' . $this->session->data['user_token'] . $url);
		} else {
			$data['action'] = $this->url->link('catalog/generic/edit', 'user_token=' . $this->session->data['user_token'] . '&id=' . $this->request->get['id'] . $url);
		}

		$data['cancel'] = $this->url->link('catalog/generic', 'user_token=' . $this->session->data['user_token'] . $url);
        $generic_info = array();
		if (isset($this->request->get['id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$generic_info = $this->model_catalog_generic->getGeneric($this->request->get['id']);
		}
        //echo '<pre>'; print_r($generic_info); die;
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();
        $lang = (int)$this->config->get('config_language_id');
		if (isset($this->request->post['generic_name'])) {
			$data['generic_name'][$lang]['generic_name'] = $this->request->post['generic_name'];
		} elseif (isset($this->request->get['id'])) {
			$data['generic_name'][$lang]['generic_name'] = $generic_info['generic_name'];
		} else {
			$data['generic_name'][$lang]['generic_name'] = array();
		}
		if (isset($this->request->post['id'])) {
			$data['disease'][$lang]['disease'] = $this->request->post['disease'];
		} elseif (isset($this->request->get['id'])) {
			$data['disease'][$lang]['disease'] = $generic_info['disease'];
		} else {
			$data['disease'][$lang]['disease'] = array();
		}
		if (isset($this->request->post['id'])) {
			$data['how_to_use'][$lang]['how_to_use'] = $this->request->post['how_to_use'];
		} elseif (isset($this->request->get['id'])) {
			$data['how_to_use'][$lang]['how_to_use'] = $generic_info['how_to_use'];
		} else {
			$data['how_to_use'][$lang]['how_to_use'] = array();
		}
		if (isset($this->request->post['id'])) {
			$data['dose'][$lang]['dose'] = $this->request->post['dose'];
		} elseif (isset($this->request->get['id'])) {
			$data['dose'][$lang]['dose'] = $generic_info['dose'];
		} else {
			$data['dose'][$lang]['dose'] = array();
		}
		if (isset($this->request->post['id'])) {
			$data['warning'][$lang]['warning'] = $this->request->post['warning'];
		} elseif (isset($this->request->get['id'])) {
			$data['warning'][$lang]['warning'] = $generic_info['warning'];
		} else {
			$data['warning'][$lang]['warning'] = array();
		}
		if (isset($this->request->post['id'])) {
			$data['indication'][$lang]['indication'] = $this->request->post['indication'];
		} elseif (isset($this->request->get['id'])) {
			$data['indication'][$lang]['indication'] = $generic_info['indication'];
		} else {
			$data['indication'][$lang]['indication'] = array();
		}
		if (isset($this->request->post['id'])) {
			$data['side_effect'][$lang]['side_effect']= $this->request->post['side_effect'];
		} elseif (isset($this->request->get['id'])) {
			$data['side_effect'][$lang]['side_effect'] = $generic_info['side_effect'];
		} else {
			$data['side_effect'][$lang]['side_effect'] = array();
		}
		if (isset($this->request->post['id'])) {
			$data['about_medicine'][$lang]['about_medicine'] = $this->request->post['about_medicine'];
		} elseif (isset($this->request->get['id'])) {
			$data['about_medicine'][$lang]['about_medicine'] = $generic_info['about_medicine'];
		} else {
			$data['about_medicine'][$lang]['about_medicine'] = array();
		}
		if (isset($this->request->post['id'])) {
			$data['description'][$lang]['description'] = $this->request->post['description'];
		} elseif (isset($this->request->get['id'])) {
			$data['description'][$lang]['description'] = $generic_info['description'];
		} else {
			$data['description'][$lang]['description'] = array();
		}
		if (isset($this->request->post['id'])) {
			$data['disclaimer'][$lang]['disclaimer'] = $this->request->post['disclaimer'];
		} elseif (isset($this->request->get['id'])) {
			$data['disclaimer'][$lang]['disclaimer'] = $generic_info['disclaimer'];
		} else {
			$data['disclaimer'][$lang]['disclaimer'] = array();
		}
		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($generic_info)) {
			$data['sort_order'] = $generic_info['sort_order'];
		} else {
			$data['sort_order'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
        //echo '<pre>'; print_r($data); die;
		$this->response->setOutput($this->load->view('catalog/generic_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'catalog/generic')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['generic_name'] as $language_id => $value) {
			if ((utf8_strlen($value['generic_name']) < 1) || (utf8_strlen($value['generic_name']) > 64)) {
				$this->error['generic_name'][$language_id] = $this->language->get('error_generic_name');
			}
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'catalog/generic')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		$this->load->model('catalog/attribute');

		foreach ($this->request->post['selected'] as $generic_id) {
			$attribute_total = $this->model_catalog_attribute->getTotalAttributesByGenericId($generic_id);

			if ($attribute_total) {
				$this->error['warning'] = sprintf($this->language->get('error_attribute'), $attribute_total);
			}
		}

		return !$this->error;
	}
}
