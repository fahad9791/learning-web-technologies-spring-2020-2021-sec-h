<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>REGISTRATION</legend> <br>
				<table>
					<tr>
						<td>Name:</td>
						<td>
							<input type="text" name="name" value="">
						</td>
					</tr>
					<tr>
						<td>Email:</td>
						<td>
							<input type="email" name="email" value="">
						</td>
					</tr>
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
						</td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td>
							<input type="password" name="cpassword" value="">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<form>
								<fieldset>
									<legend>Gender</legend>
									
									<input type="radio" name="gender" value="">Male
									<input type="radio" name="gender" value="">Female
									<input type="radio" name="gender" value="">Others
									
								</fieldset>
							</form>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<form>
								<fieldset>
									<legend>Date of Birth</legend>
									<input type="date" name="date" value="">
								</fieldset>
							</form>
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
</body>
</html>