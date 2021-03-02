
<?php
	$title= "User list Page";
	include('header.php');

?>

	<div id="page_title">
		<h1>User List</h1>
	</div>

	<div id='nav_bar'>
		<a href="home.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<table border="1">
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>EMAIL</td>
				<td>ACTION</td>
			</tr>
			<tr>
				<td>1</td>
				<td>
					<?php $myfile = fopen('../model/users.json', 'r');
						$data = fread($myfile, filesize('../model/users.json'));
							$user = json_decode($data, true);
							echo $user['0']['username']; ?>
				</td>
				<td>
					<?php $myfile = fopen('../model/users.json', 'r');
						$data = fread($myfile, filesize('../model/users.json'));
							$user = json_decode($data, true);
							echo $user['0']['email']; ?>
				</td>
				<td>
					<a href="edit.php?id=1">EDIT</a> |
					<a href="delete.php?id=1">DELETE</a> 
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>
					<?php $myfile = fopen('../model/users.json', 'r');
						$data = fread($myfile, filesize('../model/users.json'));
							$user = json_decode($data, true);
							echo $user['1']['username']; ?>
				</td>
				<td>
					<?php $myfile = fopen('../model/users.json', 'r');
						$data = fread($myfile, filesize('../model/users.json'));
							$user = json_decode($data, true);
							echo $user['1']['email']; ?>
				</td>
				<td>
					<a href="edit.php?id=2">EDIT</a> |
					<a href="delete.php?id=2">DELETE</a> 
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>
					<?php $myfile = fopen('../model/users.json', 'r');
						$data = fread($myfile, filesize('../model/users.json'));
							$user = json_decode($data, true);
							echo $user['2']['username']; ?>
				</td>
				<td>
					<?php $myfile = fopen('../model/users.json', 'r');
						$data = fread($myfile, filesize('../model/users.json'));
							$user = json_decode($data, true);
							echo $user['2']['email']; ?>
				</td>
				<td>
					<a href="edit.php?id=3">EDIT</a> |
					<a href="delete.php?id=3">DELETE</a> 
				</td>
			</tr>
		</table>
	</div>

<?php include('footer.php'); ?>