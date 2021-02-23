<?php

	if(isset($_POST['submit'])){ 

	$alpha = range('A', 'Z'); 
	$schar = ['@','#', '$', '%']
}

	if(empty($_POST["username"]))
	{
		echo "You must contain at least two (2) characters";
	}
	elseif ($_POST['username'] == $alpha && strlen($_POST['password'])>=8) {
		echo $_POST['username'];
		echo $_POST['password'];
	}
	else{
		echo "Invalid";
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