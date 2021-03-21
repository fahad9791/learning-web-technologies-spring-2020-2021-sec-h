<?php

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$buying = $_POST['buying'];
		$selling = $_POST['selling'];

		if($name == "" || $buying == "" || $selling == ""){
			echo "null submission...";
		}else{

				$conn = mysqli_connect('localhost', 'root', '', 'product_db');
				$sql = "insert into products values('', '$name', '$buying', '$selling')"; 
				$result = mysqli_query($conn, $sql);

				header('location: ../view/displayProduct.php');
			
		}

	}
?>