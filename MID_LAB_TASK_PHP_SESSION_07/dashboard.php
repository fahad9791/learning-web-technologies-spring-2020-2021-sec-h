<?php

	session_start();
	if ($_SESSION['flag']) {
		$name = $_SESSION['name'];

?>

<html>
<head>
	<title>Logged in Dashboard</title>
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
					<h2>
						<b> 
							<?php
							echo "Welcome " . $name;
							?> 
						</b>
					</h2>
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

