<?php

	session_start();
	if ($_SESSION['flag']) {

		$id = $_SESSION['id'];

		if (isset($_POST['submit'])) {
			$cpass = $_POST['cpassword'];
			$npass = $_POST['npassword'];
			$rpass = $_POST['rpassword'];

			if ($cpass != $npass && $cpass == $password) {
				if ($npass == $rpass) {
					
					$conn = mysqli_connect('localhost', 'root', '', 'miniProject');
					$sql = "update registration set password = '$npass', cpassword = 'npass' where id = '$id'";

					$result = mysqli_query($conn, $sql);
					
				}
				else{
					echo "New Password must match with the Retyped Password";
				}
			}
			else{
				echo "New Password should not be same as the Current Password";
		}
		}
	}
		 

?>