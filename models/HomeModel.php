<?php 
	trait HomeModel{
		//hot product
		public function modelHotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products_project where hot=1 order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelGetCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories_project where displayhomepage=1 order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelGetProducts($category_id){
			$conn = Connection::getInstance();
			//lay cac san pham thuoc danh muc do va danh muc cap con cua no
			$query = $conn->query("select * from products_project where category_id in (select id from categories_project where id=$category_id or parent_id=$category_id) order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelGetHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news_project where hot=1 order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
	}
 ?>