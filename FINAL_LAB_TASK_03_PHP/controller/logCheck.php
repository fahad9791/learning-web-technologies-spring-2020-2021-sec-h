<?php
	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		//$type = 

		if($id == "" || $password == ""){
			echo "null submission...";
		}else{

			$conn = mysqli_connect('localhost', 'root', '', 'miniProject');
			$sql = "select * from registration where id = '$id' and password = '$password'";
			$result = mysqli_query($conn, $sql);

			if($result->num_rows == 1  ){

				$_SESSION['flag'] = true;

				header('location: ../view/user_home.html');
			}else{
				echo "invalid user";
			}
		}

	}
?>