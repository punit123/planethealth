<?php
class ControllerApiProduct extends Controller {
	public function getProductByCategories(){
		$category_id = $this->request->post['category_id'];
		if(isset($category_id) && $category_id != ''){
			echo "if";	
		}
		else{
			echo "else";
		}
		echo '<pre>';print_r($category_id);die;
	}
}
?>