	<?php
class ModelCatalogProductOptionImage extends Model {
	public function addProductOptionImage($product_option_value_id, $data) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_option_value_image WHERE product_option_value_id = '" . (int)$product_option_value_id . "'");
		if (isset($data['product_image'])) {
			foreach ($data['product_image'] as $product_image) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "product_option_value_image SET product_option_value_id = '" . (int)$product_option_value_id . "', image = '" . $this->db->escape($product_image['image']) . "', sort_order = '" . (int)$product_image['sort_order'] . "'");
			}
		}
	}
	public function getProductOptionImages($product_option_value_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option_value_image WHERE product_option_value_id = '" . (int)$product_option_value_id . "' ORDER BY sort_order ASC");

		return $query->rows;
	}		
}