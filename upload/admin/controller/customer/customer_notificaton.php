<?php
class ControllerCustomerCustomerNotification extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('customer/customer_notification');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('customer/customer_notification');

		$this->getList();
	}

	public function add() {
		$this->load->language('customer/customer_notification');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('customer/customer_notification');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_customer_customer_notification->addFaq($this->request->post);

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

			$this->response->redirect($this->url->link('customer/customer_notification', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('customer/customer_notification');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('customer/customer_notification');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_customer_customer_notification->editFaq($this->request->get['id'], $this->request->post);

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

			$this->response->redirect($this->url->link('customer/customer_notification', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('customer/customer_notification');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('customer/customer_notification');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $id) {
				$this->model_customer_customer_notification->deleteFaq($id);
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

			$this->response->redirect($this->url->link('customer/customer_notification', 'user_token=' . $this->session->data['user_token'] . $url));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'notification_id';
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
			'href' => $this->url->link('customer/customer_notification', 'user_token=' . $this->session->data['user_token'] . $url)
		);

		$data['add'] = $this->url->link('customer/customer_notification/add', 'user_token=' . $this->session->data['user_token'] . $url);
		$data['delete'] = $this->url->link('customer/customer_notification/delete', 'user_token=' . $this->session->data['user_token'] . $url);

		$data['Customer_notification'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$customer_notification_total = $this->model_customer_customer_notification->getTotalCustomer_notification();

		$results = $this->model_customer_customer_notification->getCustomerNotifications($filter_data);
		foreach ($results as $result) {
			$data['Customer_notification'][] = array(
				'id' => $result['id'],
				'title' => $result['title'],
				'customer_name' => $result['customer_name'],
				'notification_id'=> $result['notification_id'],
				'customer_id' => $result['customer_id'],
				'edit'   => $this->url->link('customer/customer_notification/edit', 'user_token=' . $this->session->data['user_token'] . '&id=' . $result['id'] . $url)
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

		$data['sort_name'] = $this->url->link('customer/customer_notification', 'user_token=' . $this->session->data['user_token'] . '&sort=notification_id' . $url);
		$data['notification_id'] = $this->url->link('customer/customer_notification', 'user_token=' . $this->session->data['user_token'] . '&sort=notification_id' . $url);
		$data['customer_id'] = $this->url->link('customer/customer_notification', 'user_token=' . $this->session->data['user_token'] . '&sort=customer_id' . $url);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $customer_notification_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('customer/customer_notification', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($customer_notification_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($customer_notification_total - $this->config->get('config_limit_admin'))) ? $customer_notification_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $customer_notification_total, ceil($customer_notification_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
        //echo "<pre>"; print_r($data); die;
		$this->response->setOutput($this->load->view('customer/customer_notification_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['notification_id'])) {
			$data['error_notification_id'] = $this->error['notification_id'];
		} else {
			$data['error_notification_id'] = '';
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
			'href' => $this->url->link('customer/customer_notification', 'user_token=' . $this->session->data['user_token'] . $url)
		);

		if (!isset($this->request->get['id'])) {
			$data['action'] = $this->url->link('customer/customer_notification/add', 'user_token=' . $this->session->data['user_token'] . $url);
		} else {
			$data['action'] = $this->url->link('customer/customer_notification/edit', 'user_token=' . $this->session->data['user_token'] . '&id=' . $this->request->get['id'] . $url);
		}

		$data['cancel'] = $this->url->link('customer/customer_notification', 'user_token=' . $this->session->data['user_token'] . $url);
		$this->load->model('customer/customer');
        $data['customerArr'] = $this->model_customer_customer->getCustomerFields($select="customer_id, CONCAT_WS(' ','firstname','lastname') AS customer_name");
		if (isset($this->request->get['id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$customer_notification_info = $this->model_customer_customer_notification->getCustomerNotification($this->request->get['id']);
		}
		$this->load->model('localisation/custom_notification');
        $data['notificationArr'] = $this->model_localisation_custom_notification->getNotificationTitleID($select="id, title");
		if (isset($this->request->get['id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$customer_notification_info = $this->model_customer_customer_notification->getCustomerNotification($this->request->get['id']);
		}

		if (isset($this->request->post['notification_id'])) {
			$data['notification_id'] = $this->request->post['notification_id'];
		} elseif (!empty($customer_notification_info)) {
			$data['notification_id'] = $customer_notification_info['notification_id'];
		} else {
			$data['notification_id'] = '';
		}

		if (isset($this->request->post['customer_id'])) {
			$data['customer_id'] = $this->request->post['customer_id'];
		} elseif (!empty($customer_notification_info)) {
			$data['customer_id'] = $customer_notification_info['customer_id'];
		} else {
			$data['customer_id'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($customer_notification_info)) {
			$data['status'] = $customer_notification_info['status'];
		} else {
			$data['status'] = '1';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('customer/customer_notification_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'customer/customer_notification')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['notification_id']) < 1) || (utf8_strlen($this->request->post['notification_id']) > 128)) {
			$this->error['notification_id'] = $this->language->get('error_notification_id');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'customer/customer_notification')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
	
	public function customer_notification() {
		$json = array();

		$this->load->model('customer/customer_notification');

		$customer_notification_info = $this->model_customer_customer_notification->getFaq($this->request->get['id']);

		if ($customer_notification_info) {
			$json = array(
				'id'        => $customer_notification_info['id'],
				'notification_id'      => $customer_notification_info['notification_id'],
				'customer_id'        => $customer_notification_info['customer_id'],
				'status'        => $customer_notification_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}	
}