<?php
	if(isset($_POST['submit']) && isset($_POST['cpassword']) && isset($_POST['npassword']) && isset($_POST['rpassword'])){ 

		$cpass = $_POST['cpassword'];
		$npass = $_POST['npassword'];
		$rpass = $_POST['rpassword'];

		if ($cpass != $npass ) {
			if ($npass == $rpass) {
				echo "Password Changed";
			}
			else{
				echo "New Password must match with the Retyped Password";
			}
		}
		else{
			echo "New Password should not be same as the Current Password";
		}

	
	}
	

?>

<html>
<head>
	<title>Change Password</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>CHANGE PASSWORD</legend> <br>
				<table>
					<tr>
						<td>Current Password:</td>	
						<td>
							<input type="password" name="cpassword" value="">
						</td>
					</tr>
					<tr>
						<td>New Password:</td>		
						<td>
							<input type="password" name="npassword" value=""> 
							<br>
						</td>
					</tr>
					<tr>
						<td>Retype New Password:</td>		
						<td>
							<input type="password" name="rpassword" value="">
							<br>
						</td>
					<tr>
						<td>
							<input type="submit" name="submit" value="submit">
						</td>
					</tr>
				</table>
		</fieldset>		
	</form>
</body>
</html>