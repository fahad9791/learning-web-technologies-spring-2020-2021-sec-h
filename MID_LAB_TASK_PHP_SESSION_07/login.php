<?php
	session_start();
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username == "" && $password == "") {
			echo "Fill the information correctly";
		}
		else{
			if ($username == $_SESSION['uname'] && $password == $_SESSION['password']) {
				$_SESSION['flag'] = true;
				header('location: dashboard.php');
			}
			else{
				echo "Wrong password or username";
			}
		}
	}
?>


<html>
<head>
	<title>Login</title>
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
							<a href="public home.php"> Home </a> |
							<a href="login.php"> Login </a> |
							<a href="registration.php"> Registration </a> 
						</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="100%" border="1">
			<tr height="300px">
				<td>
					<table  align="center">
						<tr>
							<td>
								<form>
									<fieldset>
										<legend><b>Login</b></legend>
										<table>
											<tr>
												<td>User Name:</td>	
												<td>
													<input type="text" name="username" value="">
												</td>
											</tr>
											<tr>
												<td>Password:</td>		
												<td>
													<input type="password" name="password" value="">
													<br>
												</td>
											</tr>
											<tr>
												<td>
													<input type="checkbox" name="item[]"> Remember Me
												</td>
											</tr>
											<tr>
												<td>
													<input type="submit" name="submit" value="submit">
													<a href="forgot password.php"> Forgot Password?</a>
												</td>
											</tr>
									</table>
									</fieldset>
								</form>
							</td>
						</tr>
						
					</table>
				</td>
			</tr>
			<tr height="50px">
				<td align="center">Copyright © 2017</td> 
			</tr>
		</table>
	</form>
</body>
</html>