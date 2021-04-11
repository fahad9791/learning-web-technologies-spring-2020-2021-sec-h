<?php
	
	include('header.php');
?>

<html>
<head>
	<title>Task</title>
</head>
<body>
	<form method="POST" action="">
		<table width="100%" height="100px">
			<tr height="100px">
				<td>
					<table width="100%">
						<tr>
						<td>
							<a href="dashboard.php"><img src="../asset/5.png" width="400px"></a>
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
							<a href="sent.php">Sent</a><br>
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
					<table align="center">
						<tr>
							<td>
								<fieldset>
									<legend>TASK</legend>
									<ol>
										<li>task 1</li>
										<li>task 2</li>
										<li>task 3</li>
										<li>task 4</li>
										<li>task 5</li>
										<li>task 6</li>
										<li>task 7</li>
										<li>task 8</li>
										<li>task 9</li>

									</ol>
								</fieldset>
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