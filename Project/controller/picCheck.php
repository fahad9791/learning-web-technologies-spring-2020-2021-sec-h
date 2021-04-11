<?php

	session_start();
	if (isset($_POST['submit'])) {

		$file_info = $_FILES['image'];
		$file = $file_info['name'];
		$filename = $file_info['tmp_name'];
		$destination = '../asset/image/' . $file_info['name'];
		if(move_uploaded_file($filename, $destination)){
			

			$myfile = file_get_contents('../model/employees.json');
			$current_data = json_decode($myfile, true);

			foreach ($current_data as $search => $value) {

				if ($value['username'] == $_SESSION['username']) {

					$current_data[$search]['picture'] = $file;

					$writedata = json_encode($current_data);

					if (file_put_contents('../model/employees.json', $writedata)) {

						$_SESSION['picture'] = $file;

						header('location: ../view/changeProfilePicture.php');
					}
					else{
						echo "Error";
					}
				}
			}
			
		}
	}
?>