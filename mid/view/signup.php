<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>
</head>
<body>
	<form method="POST" action="../controller/regCheck.php">
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
												<h2 align="center">Sign Up</h2>
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
										<tr>
											<td>
												Name
											</td>
											<td>
												<input type="text" name="name" value="">
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
										<tr>
											<td>
												Confirm Password
											</td>
											<td>
												<input type="password" name="cpassword" value="">
											</td>
										</tr>
										<tr>
											<td>
												Email
											</td>
											<td>
												<input type="email" name="email" value="">
											</td>
										</tr>
										<tr>
											<td>
												Phone
											</td>
											<td>
												<input type="number" name="phone" value="">
											</td>
										</tr>
										<tr>
											<td>
												Address
											</td>
											<td>
												<textarea name="address"></textarea>
											</td>
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
													<input type="date" name="dob" value="">
												</fieldset>
											</td>
										</tr>
										<tr>
											<td>
												Department
											</td>
											<td>
												<select name="department">
													<option>Sofware</option>
													<option>Developer</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												Blood Group
											</td>
											<td>
												<select name="blood">
													<option>A+</option>
													<option>B+</option>
													<option>AB+</option>
													<option>O+</option>
													<option>A-</option>
													<option>B-</option>
													<option>AB-</option>
													<option>O-</option>
												</select>
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
												<input type="submit" name="submit" value="Sign Up">
												<a href="signin.php">Sign In</a>
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