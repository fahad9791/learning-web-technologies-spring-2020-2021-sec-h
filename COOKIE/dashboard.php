<?php

	session_start();
	if ($_COOKIE['flag']) {
		$name = $_COOKIE['name'];

?>

<html>
<head>
	<title>Logged in Dashboard</title>
</head>
<body>
	<form method="POST" action="">
		<table width="100%" height="100px">
			<tr height="100px">
				<td>
					<table width="100%">
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
		<table width="100%">
			<tr height="300px">
				<td width="30%">
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

