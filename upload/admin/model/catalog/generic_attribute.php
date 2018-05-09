<?php
class ModelCatalogGenericAttribute extends Model {
	public function addAttribute($data) { 
	//echo "<pre>"; print_r($data); die;
		$lang = (int)$this->config->get('config_language_id');
		$title = $this->db->escape($data['title'][$lang]['title']);
		$default_value = $this->db->escape($data['default_value'][$lang]['default_value']);
		
		$this->db->query("INSERT INTO " . DB_PREFIX . "generic_attribute SET generic_id = '" . (int)$data['generic_id'] . "',
		title = '" . $title ."',
		default_value = '" . $default_value ."',
		sort_order = '" . (int)$data['sort_order'] . "'");

		$attribute_id = $this->db->getLastId();

		return $attribute_id;
	}

	public function editAttribute($attribute_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "generic_attribute SET generic_id = '" . (int)$data['generic_id'] . "',
		title = '" . $this->db->escape($data['title']) ."',
		default_value = '" . $this->db->escape($data['default_value']) ."',
		generic_id = '" . (int)$data['generic_id'] . "',
		sort_order = '" . (int)$data['sort_order'] . "' WHERE id = '" . (int)$attribute_id . "'");
	}

	public function deleteAttribute($attribute_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "generic_attribute WHERE id = '" . (int)$attribute_id . "'");
	}

	public function getAttribute($attribute_id) {
		$query = $this->db->query("SELECT a.*, ad.generic_name	 FROM " . DB_PREFIX . "generic_attribute a LEFT JOIN " . DB_PREFIX . "generic ad ON (a.generic_id = ad.id) WHERE a.id = '" . (int)$attribute_id . "'");

		return $query->row;
	}
	public function getAttributebyGeneric($generic_id) {
		$query = $this->db->query("SELECT a.*,IF(gpa.product_id IS NULL,GROUP_CONCAT(a.default_value),GROUP_CONCAT(gpa.value)) as default_value FROM " . DB_PREFIX . "generic_attribute a LEFT JOIN " . DB_PREFIX . "generic ad ON (a.generic_id = ad.id) LEFT JOIN " . DB_PREFIX . "generic_product_attributes gpa ON (a.generic_id = gpa.generic_attribute_id) WHERE a.generic_id in (" .$generic_id. ") GROUP BY a.title");

		return $query->rows;
	}
	public function getAttributes($data = array()) {
		$sql = "SELECT a.*, ad.generic_name FROM " . DB_PREFIX . "generic_attribute a LEFT JOIN " . DB_PREFIX . "generic ad ON (a.generic_id = ad.id) WHERE 1=1";

		if (!empty($data['filter_name'])) {
			$sql .= " AND ad.generic_name LIKE '" . $this->db->escape((string)$data['filter_name']) . "%'";
		}

		if (!empty($data['filter_attribute_group_id'])) {
			$sql .= " AND a.generic_id = '" . (int)$data['filter_generic_id'] . "'";
		}

		$sort_data = array(
			'a.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY a.id";
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

	public function getAttributeDescriptions($attribute_id) {
		$attribute_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "attribute_description WHERE attribute_id = '" . (int)$attribute_id . "'");

		foreach ($query->rows as $result) {
			$attribute_data[$result['language_id']] = array('name' => $result['name']);
		}

		return $attribute_data;
	}

	public function getTotalAttributes() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "generic_attribute");

		return $query->row['total'];
	}

	public function getTotalAttributesByAttributeGroupId($attribute_group_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "generic_attribute WHERE generic_id = '" . (int)$attribute_group_id . "'");

		return $query->row['total'];
	}
}
