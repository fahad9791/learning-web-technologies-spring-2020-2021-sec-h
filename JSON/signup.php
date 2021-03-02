<?php
	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$department = $_POST['department'];
		$blood = $_POST['blood'];

		$myfile = fopen('users.json', 'r');
		$data = fread($myfile, filesize('users.json'));
		fclose($myfile);

		$decode = json_decode($data,true);

		$user = [
				'username'=>$username,	
				'name'=>$name,
				'password'=> $password,
				'cpassword'=> $cpassword,
				'email'=> $email,
				'phone'=> $phone,
				'address'=> $address,
				'gender'=> $gender,
				'dob'=> $dob,
				'department'=> $department,
				'blood'=> $blood
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
	<title>Sign UP</title>
</head>
<body>
	<form method="POST" action="">
		<table width="100%" height="900px">
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
											<td>
												Gender
											</td>
											<td>
												<input type="radio" name="gender" value="Male">Male
												<input type="radio" name="gender" value="Female">Female
												<input type="radio" name="gender" value="Others">Others
											</td>
										</tr>
										<tr>
											<td>
												Date of Birth
											</td>
											<td>
												<input type="date" name="dob" value="">
											</td>
										</tr>
										<tr>
											<td>
												Department
											</td>
											<td>
												<select name="department">
													<option>CSE</option>
													<option>EEE</option>
													<option>IPE</option>
													<option>ENG</option>
													<option>BBA</option>
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
											</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<input type="submit" name="submit" value="Sign Up">
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