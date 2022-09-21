<?php 
	include "models/LoginModel.php";
	class LoginController extends Controller{
		use LoginModel;
		public function index(){
			$this->loadView("LoginView.php");
		}
		public function login(){
			$this->modelLogin();
		}
		public function logout(){
			unset($_SESSION["email"]);
			header("location:index.php");
		}
	}
 ?>