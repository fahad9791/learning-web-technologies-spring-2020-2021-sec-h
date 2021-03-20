<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$conn = mysqli_connect('localhost', 'root', '', 'webtech');
				$sql = "insert into registration values('$username', '$password', '$repass', '$email')"; 
				$result = mysqli_query($conn, $sql);
				
				header('location: ../view/home.php');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>