<?php
	
	include('header.php');
?>

<html>
<head>
	<title>View Profile</title>
</head>
<body>
	<form method="POST" action="">
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
							<a href="viewProfile.php"><img src="../asset/3.png" width="20px" > 
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
							<a href="">Vacation</a><br>
							<a href="">Transfer</a><br>
							<a href="">Resignation</a><br>
							<a href="">job Reference</a><br>
							<a href="">Promotional</a>
						</details>
						<details>
							<summary>Overtime</summary>
							<a href="">Overtime</a>
						</details>
						<details>
							<summary>Task</summary>
							<a href="">Task</a>
						</details>
						<details>
							<summary>Loan</summary>
							<a href="">Loan</a>
						</details>
						<a href="../controller/logout.php">Logout</a> 
					</details>
				</h2>
				</td>
				<td>
					<table>
						<tr>
							<td>
								Name
							</td>
							<td>
								<pre>:	<?php
									echo $name;
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Email
							</td>
							<td>
								<pre>:	<?php
									echo $email;
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Phone
							</td>
							<td>
								<pre>:	<?php
									echo $phone;
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Address
							</td>
							<td>
								<pre>:	<?php
									echo $address;
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Gender
							</td>
							<td>
								<pre>:	<?php
									echo $gender;
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Date of Birth
							</td>
							<td>
								<pre>:	<?php
									echo $dob;
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Department
							</td>
							<td>
								<pre>:	<?php
									echo $department;
								?></pre>
							</td>
						</tr>
						<tr>
							<td>
								Blood Group
							</td>
							<td>
								<pre>:	<?php
									echo $blood;
								?></pre>
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