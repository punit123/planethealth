<?php
class ModelLocalisationFaq extends Model {
	public function addFaq($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "faq SET question = '" . $this->db->escape((string)$data['question']) . "', answer = '" . $this->db->escape((string)$data['answer']) . "', status = '" . (int)$data['status'] . "'");

		$this->cache->delete('faq');
		
		return $this->db->getLastId();
	}

	public function editFaq($faq_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "faq SET question = '" . $this->db->escape((string)$data['question']) . "', answer = '" . $this->db->escape((string)$data['answer']) . "', status = '" . (int)$data['status'] . "' WHERE faq_id = '" . (int)$faq_id . "'");

		$this->cache->delete('faq');
	}

	public function deleteFaq($faq_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "faq WHERE faq_id = '" . (int)$faq_id . "'");

		$this->cache->delete('faq');
	}

	public function getFaq($faq_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . " faq WHERE faq_id = '" . (int)$faq_id . "'");

		return $query->row;
	}

	public function getFaqs($data = array()) {
		if ($data) {
			$sql = "SELECT * FROM " . DB_PREFIX . "faq";

			$sort_data = array(
				'question',
				'answer',
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY question";
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
			$faq_data = $this->cache->get('faq.admin');

			if (!$faq_data) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "faq ORDER BY question ASC");

				$faq_data = $query->rows;

				$this->cache->set('faq.admin', $faq_data);
			}

			return $faq_data;
		}
	}

	public function getTotalFaqs() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "faq");

		return $query->row['total'];
	}
}