<?php
class ModelLocalisationCustomnotification extends Model {
	public function addCustom_notification($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "custom_notification SET title = '" . $this->db->escape((string)$data['title']) . "', message = '" . $this->db->escape((string)$data['message']) . "', push_notification = '" . (int)$data['push_notification'] . "', email = '" . (int)$data['email'] . "', sms = '" . (int)$data['sms'] . "', status = '" . (int)$data['status'] . "', created_date = '" . date("Y-m-d H:i:s") . "'");

		$this->cache->delete('custom_notification');
		
		return $this->db->getLastId();
	}

	public function editCustom_notification($id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "custom_notification SET title = '" . $this->db->escape((string)$data['title']) . "', message = '" . $this->db->escape((string)$data['message']) . "', push_notification = '" . (int)$data['push_notification'] . "', email = '" . (int)$data['email'] . "', sms = '" . (int)$data['sms'] . "', status = '" . (int)$data['status'] . "' WHERE id = '" . (int)$id . "', updated_date = '" . date("Y-m-d H:i:s") . "'");

		$this->cache->delete('custom_notification');
	}

	public function deleteCustom_notification($id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "custom_notification WHERE id = '" . (int)$id . "'");

		$this->cache->delete('custom_notification');
	}

	public function getCustom_notification($id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . " custom_notification WHERE id = '" . (int)$id . "'");

		return $query->row;
	}

	public function getCustom_notifications($data = array()) {
		if ($data) {
			$sql = "SELECT * FROM " . DB_PREFIX . "custom_notification";

			$sort_data = array(
				'title',
				'message',
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY title";
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
			$custom_notification_data = $this->cache->get('custom_notification.admin');

			if (!$custom_notification_data) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "custom_notification ORDER BY title ASC");

				$custom_notification_data = $query->rows;

				$this->cache->set('custom_notification.admin', $custom_notification_data);
			}

			return $custom_notification_data;
		}
	}

	public function getTotalCustom_notifications() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "custom_notification");

		return $query->row['total'];
	}
}