 <?php 
 trait LoginModel{
 	public function modelLogin(){
 		$email = $_POST["email"];

 		$password = $_POST["password"];
 		$password = md5($password);
 		$conn = Connection::getInstance();
 		$query = $conn->query("select email, password from users_project where email = '$email'");
 		if($query->rowCount() > 0){
 			$record = $query->fetch();
 			if($record->password == $password){
 				$_SESSION["email"] = $email;
 				header("location:index.php");
 			}
 			else 	
 				header("location:index.php?controller=login");
 		}
 	}
 }
 ?>