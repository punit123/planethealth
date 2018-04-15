<?php
class ModelCatalogGeneric extends Model {
	public function addGeneric($data) {
		$lang = (int)$this->config->get('config_language_id');
		$this->db->query("INSERT INTO " . DB_PREFIX . "generic SET disease = '" . $this->db->escape($data['disease'][$lang]['disease']) ."', 
		how_to_use = '" . $this->db->escape($data['how_to_use'][$lang]['how_to_use']) ."',
		dose = '" . $this->db->escape($data['dose'][$lang]['dose']) ."',
		warning = '" . $this->db->escape($data['warning'][$lang]['warning']) ."',
		indication = '" . $this->db->escape($data['indication'][$lang]['indication']) ."',
		side_effect = '" . $this->db->escape($data['side_effect'][$lang]['side_effect']) ."',
		about_medicine = '" . $this->db->escape($data['about_medicine'][$lang]['about_medicine']) ."',
		disclaimer = '" . $this->db->escape($data['disclaimer'][$lang]['disclaimer']) ."',
		generic_name = '" . $this->db->escape($data['generic_name'][$lang]['generic_name']) ."',
		sort_order = '" . (int)$data['sort_order'] . "'");

		$generic_id = $this->db->getLastId();
		return $generic_id;
	}

	public function editGeneric($generic_id, $data) {
		$lang = (int)$this->config->get('config_language_id');
		$this->db->query("UPDATE " . DB_PREFIX . "generic SET disease = '" . $this->db->escape($data['disease'][$lang]['disease']) ."', 
		how_to_use = '" . $this->db->escape($data['how_to_use'][$lang]['how_to_use']) ."',
		dose = '" . $this->db->escape($data['dose'][$lang]['dose']) ."',
		warning = '" . $this->db->escape($data['warning'][$lang]['warning']) ."',
		indication = '" . $this->db->escape($data['indication'][$lang]['indication']) ."',
		side_effect = '" . $this->db->escape($data['side_effect'][$lang]['side_effect']) ."',
		about_medicine = '" . $this->db->escape($data['about_medicine'][$lang]['about_medicine']) ."',
		disclaimer = '" . $this->db->escape($data['disclaimer'][$lang]['disclaimer']) ."',
		generic_name = '" . $this->db->escape($data['generic_name'][$lang]['generic_name']) ."',
		sort_order = '" . (int)$data['sort_order'] . "' WHERE id = '" . (int)$generic_id . "'");
	}

	public function deleteGeneric($generic_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "generic WHERE id = '" . (int)$generic_id . "'");
	}

	public function getGeneric($generic_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "generic WHERE id = '" . (int)$generic_id . "'");
		return $query->row;
	}

	public function getGenerics($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "generic ag WHERE ag.language_id = '" . (int)$this->config->get('config_language_id') . "'";
       
		$sort_data = array(
			'ag.id',
			'ag.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY ag.id";
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
	}

	public function getAllGenericName() {
		$generic_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "generic");

		foreach ($query->rows as $result) {
			//$generic_data[$result['language_id']] = array($result['id'] => $result['generic_name']);
			$generic_data[] = array('id' => $result['id'],'generic_name' => $result['generic_name'] );
		}
		//echo '<pre>';print_r($generic_data); die;
		return $generic_data;
	}

	public function getTotalGenerics() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "generic");

		return $query->row['total'];
	}
}