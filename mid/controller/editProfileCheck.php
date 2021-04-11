<?php

	session_start();
	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$department = $_POST['department'];
		$blood = $_POST['blood'];

		if ($name == "" && $email == "" && $phone == "" && $address == "") {
			echo "Fill all the information";
		}
		else{

			$myfile = file_get_contents('../model/employees.json');
			$current_data = json_decode($myfile, true);

			foreach ($current_data as $search => $value) {

				if ($value['username'] == $_SESSION['username']) {

					$current_data[$search]['name'] = $name;
					$current_data[$search]['email'] = $email;
					$current_data[$search]['phone'] = $phone;
					$current_data[$search]['address'] = $address;
					$current_data[$search]['gender'] = $gender;
					$current_data[$search]['dob'] = $dob;
					$current_data[$search]['blood'] = $blood;

					$writedata = json_encode($current_data);

					if (file_put_contents('../model/employees.json', $writedata)) {

						$_SESSION['name'] = $name;
						$_SESSION['email'] = $email;
						$_SESSION['phone'] = $phone;
						$_SESSION['address'] = $address;
						$_SESSION['gender'] = $gender; 
						$_SESSION['dob'] = $dob; 
						$_SESSION['blood'] = $blood;


						header('location: ../view/dashboard.php');
					}
					else{
						echo "Error";
					}
				}
			}


			/*

			$myfile = fopen('../model/employees.json', 'r');
			$data = fread($myfile, filesize('../model/employees.json'));
			fclose($myfile);

			$decode = json_decode($data,true);

			foreach ($decode as $value)
			{
				if ($_SESSION['username'] == $value['username']) {
						
						//echo $value['name'];
						//echo $value['email'];

						$employees = [
							
						$decode[$value]['name']= $name,
						$decode[$value]['email']= $email,
						$decode[$value]['phone']= $phone,
						$decode[$value]['address']= $address,
						$decode[$value]['gender']= $gender,
						$decode[$value]['dob']= $dob,
						$decode[$value]['department']= $department,
						$decode[$value]['blood']= $blood
					];

					$decode[] = $employees;

					$curr_encode=json_encode($decode);

					$myfile = fopen('../model/employees.json', 'w');
					fwrite($myfile, $curr_encode);
					fclose($myfile);
					//header('location: ../view/signin.php');
				}
			}
			*/
		}
	}
?>