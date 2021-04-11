<?php
	
	include('header.php');
?>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
	<form method="POST" action="../controller/editProfileCheck.php">
		<table width="100%" height="100px">
			<tr height="100px">
				<td>
					<table width="100%">
						<tr>
						<td>
							<a href="dashboard.php"><img src="../asset/5.png" width="400px"></a><br>
							<a href="dashboard.php"><img src="../asset/4.png" width="20px" height="20px">Back</a>
						</td>
						<td align="right">
							<a href="viewProfile.php"><img src="../asset/image/<?php echo $_SESSION['picture']; ?>" width="20px"> 
								<?php
									echo $name;
								?>
							</a>
						</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<hr>
		<table border="1" width="100%">
			<tr>
				<td width="20%">
					<h2>
					<details>
						<summary>MENU</summary>
						<details>
							<summary>Profile</summary>
							<a href="viewProfile.php">Profile</a><br>
							<a href="editProfile.php">Edit Profile</a><br>
							<a href="changePassword.php">Change Password</a>
						</details>
						<details>
							<summary>Dashboard</summary>
							<a href="dashboard.php">Dashboard</a>
						</details>
						<details>
							<summary>Attendance</summary>
							<a href="attendance.php">Attendance</a>
						</details>
						<details>
							<summary>Application</summary>
							<a href="vacation.php">Vacation</a><br>
							<a href="transfer.php">Transfer</a><br>
							<a href="resignation.php">Resignation</a><br>
							<a href="reference.php">job Reference</a><br>
							<a href="promotional.php">Promotional</a>
						</details>
						<details>
							<summary>Overtime</summary>
							<a href="overtime.php">Overtime</a>
						</details>
						<details>
							<summary>Task</summary>
							<a href="task.php">Task</a>
						</details>
						<details>
							<summary>Loan</summary>
							<a href="loan.php">Loan</a>
						</details>
						<a href="../controller/logout.php">Logout</a> 
					</details>
				</h2>
				</td>
				<td>
					<table width="100%">
						<tr>
							<td>
								Name
							</td>
							<td>
								<input type="text" name="name" value="<?php
									echo $name;
								?>">
							</td>
							<td rowspan="8" align="center">
								<img src="../asset/image/<?php echo $_SESSION['picture']; ?>" width="150px"> <br>
								<a href="changeProfilePicture.php">Change Profile Picture</a>
							</td>
						</tr>
						<tr>
							<td>
								Email
							</td>
							<td>
								<input type="email" name="email" value="<?php
									echo $email;
								?>">
							</td>
						</tr>
						<tr>
							<td>
								Phone
							</td>
							<td>
								<input type="number" name="phone" value="<?php
									echo $phone;
								?>">
							</td>
						</tr>
						<tr>
							<td>
								Address
							</td>
							<td>
								<textarea name="address"><?php
									echo $address;
									?>
								</textarea>
							</td>
						</tr>
						<tr>
							<td>
								Gender
							</td>
							<td>
								<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male
								<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
								<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Others">Others
							</td>
						</tr>
						<tr>
							<td>
								Date of Birth
							</td>
							<td>
								<input type="date" name="dob" value="<?php echo $dob; ?>">
							</td>
						</tr>
						
						<tr>
							<td>
								Blood Group
							</td>
							<td>
								<select name="blood">
									<option value=""><?php echo $blood; ?></option>
									<option value="A+">A+</option>
									<option value="B+">B+</option>
									<option value="AB+">AB+</option>
									<option value="O+">O+</option>
									<option value="A-">A-</option>
									<option value="B-">B-</option>
									<option value="AB-">AB-</option>
									<option value="O-">O-</option>
								</select>
							</td>
						</tr>
						<tr>
							<td align="right" colspan="2">
								<hr>
								<input type="submit" name="submit" value="Change">
							</td>
						</tr>

					</table>
				</td>
			</tr>
			
		</table>
		<hr>
		<p align="center"> Copyright © 2021</p>
	</form>
</body>
</html>