<?php
class ModelCatalogCategory extends Model {
	public function getCategory($category_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.category_id = '" . (int)$category_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");

		return $query->row;
	}
	public function getCategoryForAutoComplete($keywords) {

		//$query = $this->db->query("SELECT cd.name,cd.category_id as categoty_id, IF(cd.name IS NULL, '','Category') as type FROM " . DB_PREFIX . "category_description cd RIGHT JOIN " . DB_PREFIX . "category c ON (cd.category_id = c.category_id) WHERE cd.name LIKE '%".$keywords."%' AND c.status = '1'");

		$query = $this->db->query("SELECT cd.name,cd.category_id as id, IF(cd.name IS NULL, '','Category') as type FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE cd.name LIKE '%".$keywords."%' AND c.status = '1'");

		return $query->rows;
	}

	public function getBrandForAutoComplete($keywords) {

		$query = $this->db->query("SELECT b.name,b.brand_id as id, IF(b.name IS NULL, '','Brand') as type FROM " . DB_PREFIX . "brand b WHERE b.name LIKE '%".$keywords."%'");
		
		return $query->rows;
	}

	public function getManufactureForAutoComplete($keywords) {

		$query = $this->db->query("SELECT b.name,b.manufacturer_id as id, IF(b.name IS NULL, '','Manufacturer') as type FROM " . DB_PREFIX . "manufacturer b WHERE b.name LIKE '%".$keywords."%'");
		
		return $query->rows;
	}

	public function getProductForAutoComplete($keywords) {

		$query = $this->db->query("SELECT pd.name,p.price,pd.product_id as id, IF(pd.name IS NULL, '','Product') as type FROM " . DB_PREFIX . "product_description pd  RIGHT JOIN " . DB_PREFIX . "product p ON (pd.product_id = p.product_id) WHERE pd.name LIKE '%".$keywords."%'");
		
		return $query->rows;
	}

	public function getGenericsForAutoComplete($keywords) {

		
		$query = $this->db->query("SELECT b.generic_name,b.id as id, IF(b.generic_name IS NULL, '','Generic') as type FROM " . DB_PREFIX . "generic b WHERE b.generic_name LIKE '%".$keywords."%'");
		
		return $query->rows;
	}

	public function getTagsForAutoComplete($keywords) {

		
		$query = $this->db->query("SELECT b.tag,b.product_id as id, IF(b.tag IS NULL, '','Tag') as type FROM " . DB_PREFIX . "product_description b WHERE b.tag LIKE '%".$keywords."%'");
		
		return $query->rows;
	}


	public function getDeseaseForAutoComplete($keywords) {
	
		$query = $this->db->query("SELECT b.disease,b.product_disease_id as id, IF(b.disease IS NULL, '','Disease') as type FROM " . DB_PREFIX . "product_disease b WHERE b.disease LIKE '%".$keywords."%'");
		
		return $query->rows;
	}

	public function getCategories($parent_id = 0) {
		$query = $this->db->query("SELECT *,IF(scat.category_id IS NULL,0,1) AS sub_available FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN oc_category AS scat ON c.category_id = scat.parent_id  LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.parent_id = '" . (int)$parent_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  AND c.status = '1' GROUP BY c.category_id ORDER BY c.sort_order, LCASE(cd.name)");

		return $query->rows;
	}

	public function getCategoryFilters($category_id) {
		$implode = array();

		$query = $this->db->query("SELECT filter_id FROM " . DB_PREFIX . "category_filter WHERE category_id = '" . (int)$category_id . "'");

		foreach ($query->rows as $result) {
			$implode[] = (int)$result['filter_id'];
		}

		$filter_group_data = array();

		if ($implode) {
			$filter_group_query = $this->db->query("SELECT DISTINCT f.filter_group_id, fgd.name, fg.sort_order FROM " . DB_PREFIX . "filter f LEFT JOIN " . DB_PREFIX . "filter_group fg ON (f.filter_group_id = fg.filter_group_id) LEFT JOIN " . DB_PREFIX . "filter_group_description fgd ON (fg.filter_group_id = fgd.filter_group_id) WHERE f.filter_id IN (" . implode(',', $implode) . ") AND fgd.language_id = '" . (int)$this->config->get('config_language_id') . "' GROUP BY f.filter_group_id ORDER BY fg.sort_order, LCASE(fgd.name)");

			foreach ($filter_group_query->rows as $filter_group) {
				$filter_data = array();

				$filter_query = $this->db->query("SELECT DISTINCT f.filter_id, fd.name FROM " . DB_PREFIX . "filter f LEFT JOIN " . DB_PREFIX . "filter_description fd ON (f.filter_id = fd.filter_id) WHERE f.filter_id IN (" . implode(',', $implode) . ") AND f.filter_group_id = '" . (int)$filter_group['filter_group_id'] . "' AND fd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY f.sort_order, LCASE(fd.name)");

				foreach ($filter_query->rows as $filter) {
					$filter_data[] = array(
						'filter_id' => $filter['filter_id'],
						'name'      => $filter['name']
					);
				}

				if ($filter_data) {
					$filter_group_data[] = array(
						'filter_group_id' => $filter_group['filter_group_id'],
						'name'            => $filter_group['name'],
						'filter'          => $filter_data
					);
				}
			}
		}

		return $filter_group_data;
	}

	public function getCategoryLayoutId($category_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_to_layout WHERE category_id = '" . (int)$category_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return (int)$query->row['layout_id'];
		} else {
			return 0;
		}
	}

	public function getTotalCategoriesByCategoryId($parent_id = 0) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.parent_id = '" . (int)$parent_id . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");

		return $query->row['total'];
	}
        public function getCatoryToBannerDetail($category_id){
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "banner_to_category btc INNER JOIN " . DB_PREFIX . "banner b on btc.banner_id = b.banner_id INNER JOIN oc_banner_image bi on btc.banner_id = bi.banner_id WHERE category_id = '" . (int)$category_id . "'");
		return $query->rows;
	}
}