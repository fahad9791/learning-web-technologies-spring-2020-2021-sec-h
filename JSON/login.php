<?php
	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($_POST['username'] == "" && $_POST['password'] == "") {
			echo "Enter Correct Information";
		}
		else
		{
			$myfile = fopen('users.json', 'r');
			$data = fread($myfile, filesize('users.json'));
			$user = json_decode($data, true);

			$output = "";
			foreach ($user as $value) 
			{
				$output.= "Name: ".$value['username'];
				$output.= "password: ".$value['password'];
				//$output.= "<br />";
				if ($username == $value['username'] && $password == $value['password'])  {
					header('location: index.php');
				}
				else{
					echo "Invalid";
				}
			}
			echo $output;
		}


	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>
</head>
<body>
	<form method="POST" action="">
		<table width="100%" height="500px">
			<tr>
				<td>
					<table align="center" >
						<tr>
							<td>
								<fieldset>
									<table>
										<tr>
											<td colspan="2">
												<h2 align="center">Sign Up</h2>
											</td>
										</tr>
										
										<tr>
											<td>
												Username
											</td>
											<td>
												<input type="text" name="username" value="">
											</td>
										</tr>
										<tr>
											<td>
												Password
											</td>
											<td>
												<input type="password" name="password" value="">
											</td>
										</tr>
										
										<tr align="center">
											<td colspan="2">
												<br>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<input type="submit" name="submit" value="Sign In">
											</td>
										</tr>
									</table>
								</fieldset>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>