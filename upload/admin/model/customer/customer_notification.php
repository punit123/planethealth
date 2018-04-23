<?php
class ModelCustomerCustomernotification extends Model {
	public function addCustomerNotification($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer_notification SET notification_id = '" . (int)$data['notification_id'] . "', customer_id = '" . (int)$data['customer_id'] . "', created_date = NOW()");

		$this->cache->delete('customer_notification');
		
		return $this->db->getLastId();
	}

	public function editCustomerNotification($id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "customer_notification SET notification_id = '" . (int)$data['notification_id'] . "', customer_id = '" . (int)$data['customer_id'] . "' , created_date = NOW()' WHERE id = '" . (int)$id . "'");

		$this->cache->delete('customer_notification');
	}

	public function deleteCustomerNotification($id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_notification WHERE id = '" . (int)$id . "'");

		$this->cache->delete('customer_notification');
	}

	public function getCustomerNotification($id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . " customer_notification WHERE id = '" . (int)$id . "'");

		return $query->row;
	}

	public function getCustomerNotifications($data = array()) {
		if ($data) {
			$sql = "SELECT * FROM " . DB_PREFIX . "customer_notification";

			$sort_data = array(
				'notification_id',
				'customer_id',
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY notification_id";
			}

			if (isset($data['order']) && ($data['order'] == 'DESC')) {
				$sql .= " DESC";
			} else {
				$sql .= " ASC";
			}

			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}

			$query = $this->db->query($sql);

			return $query->rows;
		} else {
			$customer_notification_data = $this->cache->get('customer_notification.admin');

			if (!$customer_notification_data) {
				$query = $this->db->query("SELECT crn.*, cn.title, CONCAT_WS(' ','c.firstname','c.lastname') AS customer_name FROM " . DB_PREFIX . "customer_notification crn LEFT JOIN custom_notification cn ON cn.id = crn.notification_id LEFT JOIN customer c ON c.customer_id = crn.customer_id  ORDER BY notification_id ASC");

				$customer_notification_data = $query->rows;

				$this->cache->set('customer_notification.admin', $customer_notification_data);
			}

			return $customer_notification_data;
		}
	}

	public function getTotalCustomerNotifications() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_notification");

		return $query->row['total'];
	}
}