<?php
	if (isset($_POST['submit'])) {
		
		$id = $_POST['id'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$name = $_POST['name'];
		$type = $_POST['type'];

		$myfile = fopen('users.json', 'r');
		$data = fread($myfile, filesize('users.json'));
		fclose($myfile);

		$decode = json_decode($data,true);

		$user = [
				'id'=>$id,	
				'password'=> $password,
				'cpassword'=> $cpassword,
				'name'=>$name,
				'type'=>$type
			];

			$decode[] = $user;

			$curr_encode=json_encode($decode);

			$myfile = fopen('users.json', 'w');
			fwrite($myfile, $curr_encode);
			fclose($myfile);
			header('location: login.php');
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<table>
		<tr>
			<td>
				<form method="POST" action="">
					<fieldset>
						<legend>REGISTRATION</legend>
						<table>
							<tr>
								<td>
									Id
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
								</td>
							</tr>
							<tr>
								<td>
									Confirm Password
								</td>
							</tr>
							<tr>
								<td>
									<input type="password" name="cpassword" value="">
								</td>
							</tr>
							<tr>
								<td>
									Name
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="name" value="">
								</td>
							</tr>
							<tr>
								<td>
									User Type
									<hr>
								</td>
							</tr>
							<tr>
								<td>
									<input type="radio" name="type" value="User">User
									<input type="radio" name="type" value="Admin">Admin
									<hr>
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="submit" value="Sign Up">
									<a href="login.php">Sign In</a>
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