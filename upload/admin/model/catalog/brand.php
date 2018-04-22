<?php
class ModelCatalogbrand extends Model {
	public function addbrand($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "brand SET manufacturer_id = ".$this->db->escape((string)$data['manufacturer_id']).",name = '" . $this->db->escape((string)$data['name']) . "', sort_order = '" . (int)$data['sort_order'] . "'");

		$brand_id = $this->db->getLastId();

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "brand SET image = '" . $this->db->escape((string)$data['image']) . "' WHERE brand_id = '" . (int)$brand_id . "'");
		}
				
		// SEO URL
		if (isset($data['brand_seo_url'])) {
			foreach ($data['brand_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if ($keyword) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'brand_id=" . (int)$brand_id . "', keyword = '" . $this->db->escape($keyword) . "', push = '" . $this->db->escape('route=product/brand/info&brand_id=' . (int)$brand_id) . "'");
					}
				}
			}
		}
		
		$this->cache->delete('brand');

		return $brand_id;
	}

	public function editbrand($brand_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "brand SET manufacturer_id = ".$this->db->escape((string)$data['manufacturer_id']).",name = '" . $this->db->escape((string)$data['name']) . "', sort_order = '" . (int)$data['sort_order'] . "' WHERE brand_id = '" . (int)$brand_id . "'");

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "brand SET image = '" . $this->db->escape((string)$data['image']) . "' WHERE brand_id = '" . (int)$brand_id . "'");
		}
		
		$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'brand_id=" . (int)$brand_id . "'");

		if (isset($data['brand_seo_url'])) {
			foreach ($data['brand_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if ($keyword) {
						$this->db->query("INSERT INTO `" . DB_PREFIX . "seo_url` SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'brand_id=" . (int)$brand_id . "', keyword = '" . $this->db->escape($keyword) . "', push = '" . $this->db->escape('route=product/brand/info&brand_id=' . (int)$brand_id) . "'");
					}
				}
			}
		}

		$this->cache->delete('brand');
	}

	public function deletebrand($brand_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "brand` WHERE brand_id = '" . (int)$brand_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'brand_id=" . (int)$brand_id . "'");

		$this->cache->delete('brand');
	}

	public function getbrand($brand_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "brand WHERE brand_id = '" . (int)$brand_id . "'");

		return $query->row;
	}
	
	public function getBrandsByManufatureId($manufacturer_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "brand WHERE manufacturer_id = '" . (int)$manufacturer_id . "'");
        
		return $query->rows;
	}
    
	public function getbrands($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "brand";

		if (!empty($data['filter_name'])) {
			$sql .= " WHERE name LIKE '" . $this->db->escape((string)$data['filter_name']) . "%'";
		}

		$sort_data = array(
			'name',
			'sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
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
	
	public function getbrandSeoUrls($brand_id) {
		$brand_seo_url_data = array();
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'brand_id=" . (int)$brand_id . "'");

		foreach ($query->rows as $result) {
			$brand_seo_url_data[$result['store_id']][$result['language_id']] = $result['keyword'];
		}

		return $brand_seo_url_data;
	}
	
	public function getTotalbrands() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "brand");

		return $query->row['total'];
	}
}
