<?php
	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$department = $_POST['department'];
		$blood = $_POST['blood'];

		if ($username == "" && $name == "" && $password == "" && $cpassword == "" && $email == "" && $phone == "" && $address == "") {
			echo "Fill all the information";
		}else{
			if ($password == $cpassword) {
				$myfile = fopen('../model/employees.json', 'r');
				$data = fread($myfile, filesize('../model/employees.json'));
				fclose($myfile);

				$decode = json_decode($data,true);

				$employees = [
						'username'=>$username,	
						'name'=>$name,
						'password'=> $password,
						'cpassword'=> $cpassword,
						'email'=> $email,
						'phone'=> $phone,
						'address'=> $address,
						'gender'=> $gender,
						'dob'=> $dob,
						'department'=> $department,
						'blood'=> $blood
					];

					$decode[] = $employees;

					$curr_encode=json_encode($decode);

					$myfile = fopen('../model/employees.json', 'w');
					fwrite($myfile, $curr_encode);
					fclose($myfile);
					header('location: ../view/signin.php');
			}
		}

		
		
	}
?>