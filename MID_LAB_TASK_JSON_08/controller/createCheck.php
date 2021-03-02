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

				$myfile = fopen('../model/users.json', 'r');
				$data = fread($myfile, filesize('../model/users.json'));
				fclose($myfile);

				$decode = json_decode($data,true);

				$user = [	
							'username'=>$username, 
							'password'=>$password, 
							'email'=> $email
						];

					$decode[] = $user;

					$curr_encode=json_encode($decode);

					$myfile = fopen('../model/users.json', 'w');
					fwrite($myfile, $curr_encode);
					fclose($myfile);

				header('location: ../view/home.php');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>