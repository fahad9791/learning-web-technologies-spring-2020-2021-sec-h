<?php
	if (isset($_POST['submit'])) {

		$id = $_POST['id'];
		$password = $_POST['password'];
		if ($_POST['username'] == "" && $_POST['password'] == "") {
			echo "Enter Correct Information";
		}
		else
		{
			$myfile = fopen('users.json', 'r');
			$data = fread($myfile, filesize('users.json'));
			$user = json_decode($data, true);

			
			foreach ($user as $value) 
			{
				
				if ($username == $value['username'] && $password == $value['password'] && $value['type'] == 'Admin')  {
					header('location: admin.php');
				}
				elseif ($username == $value['username'] && $password == $value['password'] && $value['type'] == 'User') {
					header('location: user.php');
				}
				else{
					echo "Invalid";
				}
			}
		}


	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<table>
		<tr>
			<td>
				<form method="Post" action="">
					<fieldset>
						<legend>LOGIN</legend>
						<table>
							<tr>
								<td>
									User Id
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="id" value="">
								</td>
							</tr>
							<tr>
								<td>
									Password
								</td>
							</tr>
							<tr>
								<td>
									<input type="password" name="password" value="">
									<hr>
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="submit" value="Login">
									<a href="registration.php">Register</a>
								</td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
	
</body>
</html>