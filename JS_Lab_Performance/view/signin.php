<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>
<body>
	<form method="POST" action="../controller/loginCheck.php">
		<table width="100%" height="700px">
			<tr>
				<td>
					<table align="center" >
						<tr>
							<td>
								<fieldset>
									<table>
										<tr>
											<td colspan="2">
												<h2 align="center">Sign In</h2>
											</td>
										</tr>
										<tr>
											<td colspan="2" align="center">
												<img src="../asset/5.png" width="250px">
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
										<tr align="center">
											<td colspan="2">
												<br>
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
												<hr>
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<input type="submit" name="submit" value="Sign In">
											</td>
										</tr>
										<tr>
											<td>
												<a href="signup.php">Create an Account?</a>
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