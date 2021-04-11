
<?php
	
	include('header.php');
?>

<html>
<head>
	<title>Overtime</title>
</head>
<body>
	<form method="POST" action="../controller/overtimeCheck.php">
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
					<table align="center">
						<tr>
							<td>
								<fieldset>
								<legend>OVERTIME</legend>
								<table>
									<tr>
										<td>
											<input type="submit" name="start" value="Start">
											<input type="submit" name="over" value="Over">
										</td>
									</tr>
									<tr>
										<td><br>
											<h3>overtime List</h3> 
											<?php

												$myfile = file_get_contents('../model/overtime.json');
												$current_data = json_decode($myfile, true);

												echo "<table border=2> 
														<tr>
															<td>Username</td>
															<td>Date</td>
															<td>Time</td>
															<td>Status</td>
														</tr>";

												foreach ($current_data as $search => $value) {

													if ($_SESSION['username'] == $value['username']) {

														echo 	"<tr>
																<td>{$current_data[$search]['username']}</td>
																<td>{$current_data[$search]['date']}</td>
																<td>{$current_data[$search]['time']}</td>
																<td>{$current_data[$search]['status']}</td>
															</tr>";
														
													}

													
												}


												echo "</table>";
											?>

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
		<hr>
		<p align="center"> Copyright © 2021</p>
	</form>
</body>
</html>