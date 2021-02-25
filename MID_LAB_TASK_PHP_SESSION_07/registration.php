<?php
	session_start();
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$gender = $_POST['gender'];
		$date = $_POST['date'];
		if ($name != "" && $email != "" && $uname != "" && $password == $cpassword) {

			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['uname'] = $uname;
			$_SESSION['password'] = $password;
			$_SESSION['cpassword'] = $cpassword;
			$_SESSION['gender'] = $gender;
			$_SESSION['date'] = $date;

			header('location: login.php');

		}
		else
		{
			echo "Fill all the information correctly";
		}
	}
?>


<html>
<head>
	<title>Registration</title>
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
										<legend><b>REGISTRATION</b></legend>
										<table>
											<tr>
												<td>Name:</td>
												<td>
													<input type="text" name="name" value="">
												</td>
											</tr>
											<tr>
												<td>Email:</td>
												<td><input type="email" name="email" value=""></td>
											</tr>
											<tr>
												<td>User Name:</td>
												<td><input type="text" name="uname" value=""></td>
											</tr>
											<tr>
												<td>Password:</td>
												<td><input type="password" name="password" value=""></td>
											</tr>
											<tr>
												<td>Cofirm Password:</td>
												<td><input type="password" name="cpassword" value=""></td>
											</tr>
											<tr>
												<td colspan="2">
													<fieldset>
														<legend>Gender</legend>
														<input type="radio" name="gender" value="Male">Male
														<input type="radio" name="gender" value="Female">Female
														<input type="radio" name="gender" value="Others">Others
													</fieldset>
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<fieldset>
														<legend>Date of Birth</legend>
														<input type="date" name="date" value="">
													</fieldset>
												</td>
											</tr>
											<tr>
												<td>
													<input type="submit" name="submit" value="submit">
													<input type="reset" name="reset" value="reset">
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