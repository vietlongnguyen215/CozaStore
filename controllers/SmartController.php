<?php 
	include "models/SmartModel.php";
	class SmartController extends Controller{
		use SmartModel;
		public function index(){
			$this->loadSmartView("SmartView.php");
		}
	}
 ?>