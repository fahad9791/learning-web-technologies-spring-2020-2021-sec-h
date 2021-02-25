<?php

	session_start();
	if ($_SESSION['flag']) {
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$date = $_POST['date'];
			if ($name != "" && $email != "") {

			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['gender'] = $gender;
			$_SESSION['date'] = $date;

			header('location: dashboard.php');

		}
		else
		{
			echo "Fill all the information correctly";
		}
		}
		$name = $_SESSION['name'];
		$email = $_SESSION['email'];
		$gender = $_SESSION['gender'];
		$date = $_SESSION['date']; 

?>

<html>
<head>
	<title>Edit Profile</title>
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
									<legend>EDIT PROFILE</legend>
									<table>
										<tr>
											<td width="100px" height="50px">Name:</td>
											<td>
												<input type="text" name="name" value="<?php
													echo $name;
												?>">
											</td>
										</tr>
										<tr>
											<td height="50px">Email:</td>
											<td>
												<input type="email" name="email" value="<?php
													echo $email;
												?>">
											</td>
										</tr>
										<tr>
											<td height="50px">Gender:</td>
											<td>
												<input type="radio" name="gender" value="Male">Male
												<input type="radio" name="gender" value="Female">Female
												<input type="radio" name="gender" value="Others">Others
											</td>
										</tr>
										<tr>
											<td height="50px">Date</td>
											<td>
												<input type="date" name="date" value="<?php
													echo $date;
												?>">
											</td>
										</tr>
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