<?php
	
	session_start();
	if (isset($_POST['submit'])) {

		$cpassword = $_POST['cpassword'];
		$npassword = $_POST['npassword'];
		$rpassword = $_POST['rpassword'];

		if ($cpassword != "" && $npassword != "" && $rpassword != "") {

			if ($cpassword != $npassword && $npassword == $rpassword) {
				
				$myfile = file_get_contents('../model/employees.json');
				$current_data = json_decode($myfile, true);

				foreach ($current_data as $search => $value) {

					if ($value['username'] == $_SESSION['username']) {

						$current_data[$search]['password'] = $npassword;
						$current_data[$search]['cpassword'] = $rpassword;

						$writedata = json_encode($current_data);

						if (file_put_contents('../model/employees.json', $writedata)) {

							header('location: logout.php');
						}
					}
				}

			}
		}
		else{

			echo "Fill all the information";
		}
	}
?>