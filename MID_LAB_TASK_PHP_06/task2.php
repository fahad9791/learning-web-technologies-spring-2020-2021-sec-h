<?php
	if(isset($_POST['submit'])){ 

	echo "hello world";
}
	else{
		echo "Invalid";
	}

?>

<html>
<head>
	<title>Change Password</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>CHANGE PASSWORD</legend> <br>
				<table>
					<tr>
						<td>Current Password:</td>	
						<td>
							<input type="password" name="password">
						</td>
					</tr>
					<tr>
						<td>New Password:</td>		
						<td>
							<input type="password" name="password">
							<br>
						</td>
					</tr>
					<tr>
						<td>Retype New Password:</td>		
						<td>
							<input type="password" name="password">
							<br>
						</td>
					<tr>
						<td>
							<input type="submit" name="submit" value="submit">
						</td>
					</tr>
				</table>
		</fieldset>		
	</form>
</body>
</html>