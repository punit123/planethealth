<?php
class ControllerLocalisationCustomnotification extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('localisation/custom_notification');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('localisation/custom_notification');

		$this->getList();
	}

	public function add() {
		$this->load->language('localisation/custom_notification');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('localisation/custom_notification');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_localisation_custom_notification->addCustom_notification($this->request->post);

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

			$this->response->redirect($this->url->link('localisation/custom_notification', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('localisation/custom_notification');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('localisation/custom_notification');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_localisation_custom_notification->editCustom_notification($this->request->get['id'], $this->request->post);

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

			$this->response->redirect($this->url->link('localisation/custom_notification', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('localisation/custom_notification');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('localisation/custom_notification');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $id) {
				$this->model_localisation_custom_notification->deleteCustom_notification($id);
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

			$this->response->redirect($this->url->link('localisation/custom_notification', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = '	title';
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
			'href' => $this->url->link('localisation/custom_notification', 'user_token=' . $this->session->data['user_token'] . $url)
		);

		$data['add'] = $this->url->link('localisation/custom_notification/add', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['delete'] = $this->url->link('localisation/custom_notification/delete', 'user_token=' . $this->session->data['user_token'] . $url);

		$data['Custom_notifications'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$custom_notification_total = $this->model_localisation_custom_notification->getTotalCustom_notifications();

		$results = $this->model_localisation_custom_notification->getCustom_notifications($filter_data);
		foreach ($results as $result) {
			$data['Custom_notifications'][] = array(
				'id' => $result['id'],
				'title'=> $result['title'],
				'message' => $result['message'],
				'edit'   => $this->url->link('localisation/custom_notification/edit', 'user_token=' . $this->session->data['user_token'] . '&id=' . $result['id'] . $url)
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

		$data['sort_name'] = $this->url->link('localisation/custom_notification', 'user_token=' . $this->session->data['user_token'] . '&sort=title' . $url);
		$data['title'] = $this->url->link('localisation/custom_notification', 'user_token=' . $this->session->data['user_token'] . '&sort=title' . $url);
		$data['message'] = $this->url->link('localisation/custom_notification', 'user_token=' . $this->session->data['user_token'] . '&sort=message' . $url);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $custom_notification_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('localisation/custom_notification', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($custom_notification_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($custom_notification_total - $this->config->get('config_limit_admin'))) ? $custom_notification_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $custom_notification_total, ceil($custom_notification_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
        //echo "<pre>"; print_r($data); die;
		$this->response->setOutput($this->load->view('localisation/custom_notification_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = '';
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
			'href' => $this->url->link('localisation/custom_notification', 'user_token=' . $this->session->data['user_token'] . $url)
		);

		if (!isset($this->request->get['id'])) {
			$data['action'] = $this->url->link('localisation/custom_notification/add', 'user_token=' . $this->session->data['user_token'] . $url);
		} else {
			$data['action'] = $this->url->link('localisation/custom_notification/edit', 'user_token=' . $this->session->data['user_token'] . '&id=' . $this->request->get['id'] . $url);
		}

		$data['cancel'] = $this->url->link('localisation/custom_notification', 'user_token=' . $this->session->data['user_token'] . $url);

		if (isset($this->request->get['id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$custom_notification_info = $this->model_localisation_custom_notification->getCustom_notification($this->request->get['id']);
		}

		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($custom_notification_info)) {
			$data['title'] = $custom_notification_info['title'];
		} else {
			$data['title'] = '';
		}

		if (isset($this->request->post['message'])) {
			$data['message'] = $this->request->post['message'];
		} elseif (!empty($custom_notification_info)) {
			$data['message'] = $custom_notification_info['message'];
		} else {
			$data['message'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($custom_notification_info)) {
			$data['status'] = $custom_notification_info['status'];
		} else {
			$data['status'] = '1';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('localisation/custom_notification_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'localisation/custom_notification')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['title']) < 1) || (utf8_strlen($this->request->post['title']) > 128)) {
			$this->error['title'] = $this->language->get('error_title');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'localisation/custom_notification')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
	
	public function custom_notification() {
		$json = array();

		$this->load->model('localisation/custom_notification');

		$custom_notification_info = $this->model_localisation_custom_notification->getCustom_notification($this->request->get['id']);

		if ($custom_notification_info) {
			$json = array(
				'id'        => $custom_notification_info['id'],
				'title'      => $custom_notification_info['title'],
				'message'        => $custom_notification_info['message'],
				'status'        => $custom_notification_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}	
}