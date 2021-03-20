<?php
	session_start();



	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			$user = $_SESSION['current_user'];
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "select * from registration where username = '$username' and password = '$password'";
			$result = mysqli_query($conn, $sql);

			if($result->num_rows == 1){

				echo "success";


				$_SESSION['flag'] = true;
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>