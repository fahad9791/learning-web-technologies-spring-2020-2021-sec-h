<?php
	
	if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];
		$flag = 0;

		if (strlen($username<2) || strlen($password<8)) {
			
			echo "User Name must contain at least two (2) characters 
			<br>";
			echo "Password must not be less than eight (8) characters 
			<br>";

		}
		for ($i=0; $i < strlen($password); $i++) {
				if ($password[$i] == '@' || $password[$i] == '#' || $password[$i] == '$' || $password[$i] == '%') {
				 	
				 	$flag = 1;
					break;
				} 
				
			}
			if ($flag == 0) {
					echo "Password must contain at least one of the special characters (@, #, $, %) <br>";
					}
	}

?>


  
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>LOGIN</legend> <br>
				<table>
					<tr>
						<td>User Name:</td>	
						<td>
							<input type="text" name="username">
						</td>
					</tr>
					<tr>
						<td>Password:</td>		
						<td>
							<input type="password" name="password">
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
							<a href=""> Forgot Password?</a>
						</td>
					</tr>
				</table>
		</fieldset>		
	</form>
</body>
</html>