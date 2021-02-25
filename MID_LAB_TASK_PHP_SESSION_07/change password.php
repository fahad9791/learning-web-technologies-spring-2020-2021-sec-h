<?php

	session_start();
	if ($_SESSION['flag']) {

		$name = $_SESSION['name'];
		$password = $_SESSION['password'];

		if (isset($_POST['submit'])) {
			$cpass = $_POST['cpassword'];
			$npass = $_POST['npassword'];
			$rpass = $_POST['rpassword'];

			if ($cpass != $npass && $cpass == $password) {
				if ($npass == $rpass) {
					$_SESSION['password'] = $npass;
					$_SESSION['cpassword'] = $rpass;
					header('location: dashboard.php');
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
		<table border="1" width="100%" height="100px">
			<tr height="100px">
				<td>
					<table width="100%"  border-style: solid;>
						<tr>
						<td><img src="logo.png"></td>
						<td align="right">
							Logged in as
							<a href="dashboard.php">
								<?php
									echo $name;
								?>
							</a> |
							<a href="logout.php"> Logout </a> 
						</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="100%" border="1">
			<tr height="300px">
				<td width="30%">
					<p><strong>Account <br><br></strong></p>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="profile.php">View Profile</a></li>
						<li><a href="edit profile.php">Edit Profile</a></li>
						<li><a href="profile picture.php">Change Profile Picture</a></li>
						<li><a href="change password.php">Change Password</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</td>
				<td>
					<table align="center">
						<tr>
							<td>
								<fieldset>
									<legend>CHANGE PASSWORD</legend>
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
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr height="50px">
				<td colspan="2" align="center">Copyright © 2017</td> 
			</tr>
		</table>
	</form>
</body>
</html>

<?php
		
	}
	else
	{
		header('location: login.php');
	}

?>