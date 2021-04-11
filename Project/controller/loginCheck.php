<?php
	
	session_start();
	if (isset($_POST['submit'])) {

		$check = 0;

		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($_POST['username'] == "" && $_POST['password'] == "") {
			echo "Enter Correct Information";
		}
		else
		{
			$myfile = fopen('../model/employees.json', 'r');
			$data = fread($myfile, filesize('../model/employees.json'));
			$user = json_decode($data, true);

			foreach ($user as $value) 
			{
				
				if ($username == $value['username'] && $password == $value['password'])  {

					$check = 1;

				}
				

				
			}
			if ($check == 1) {
				
				$_SESSION['name'] = $value['name'];
					$_SESSION['username'] = $value['username'];
					$_SESSION['email'] = $value['email'];
					$_SESSION['phone'] = $value['phone'];
					$_SESSION['address'] = $value['address'];
					$_SESSION['gender'] = $value['gender'];
					$_SESSION['dob'] = $value['dob'];
					$_SESSION['department'] = $value['department'];
					$_SESSION['blood'] = $value['blood'];
					$_SESSION['picture'] = $value['picture'];

					//$_SESSION['flag'] = true; 
					setcookie('flag', true, time()+3600, '/');
					header('location: ../view/dashboard.php');
			}
			else{
				echo "Wrong username or password";
			}
		}


	}
?>