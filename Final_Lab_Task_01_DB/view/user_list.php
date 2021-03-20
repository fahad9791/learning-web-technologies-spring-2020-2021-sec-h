
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
		
		<?php 

			//connection
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');

			$sql = 'select * from registration';
		                    
			$result = mysqli_query($conn, $sql);
			
			echo "<table border=2> 
					<tr>
						<td>Username</td>
						<td>Email</td>
						<td>Action</td>
					</tr>";
			while ($row = mysqli_fetch_assoc($result)) {
				
				echo 	"<tr>
							<td>{$row['username']}</td>
							<td>{$row['email']}</td>
							<td>
								<a>EDIT</a> |
								<a>DELETE</a> 
							</td>
						</tr>";
			}
			echo "</table>";
			
		?>

		
	</div>
	<a href=""></a>

<?php include('footer.php'); ?>