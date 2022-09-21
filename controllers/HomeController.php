<?php 
	include "models/HomeModel.php";
	class HomeController extends Controller{
		use HomeModel;
		public function index(){
			$this->loadView("HomeView.php");
		}
	}
 ?>