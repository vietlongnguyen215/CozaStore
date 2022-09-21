<?php 
	trait WishlistModel{
		public function modelAdd($id){
		    if(!isset($_SESSION['Wishlist'][$id])) {        
		        //---
		        //PDO
		        $conn = Connection::getInstance();
		        $query = $conn->prepare("select * from products_project where id=:id");
		        $query->execute(array("id"=>$id));
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        $product = $query->fetch();
		        //---
		        
		        $_SESSION['Wishlist'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'number' => 1,
		            'photo' => $product->photo,

		        );
		    }
		}
		public function modelDelete($id){
		    unset($_SESSION['Wishlist'][$id]);
		}
		public function modelNumber(){
		    $number = 0;
		    foreach($_SESSION['Wishlist'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
	}
 ?>