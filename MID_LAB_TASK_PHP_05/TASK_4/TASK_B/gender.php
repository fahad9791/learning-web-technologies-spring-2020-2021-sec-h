<?php
	
		$gender = $_POST['gender'];

		if($gender == ""){
			echo "null submission";
		}else{
			echo $gender;
		}
?>

<html>
<head>
	<title>Gender input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>GENDER</legend>
				<input type="radio" name="gender" value="Male"> Male 
				<input type="radio" name="gender" value="Female"> Female 
				<input type="radio" name="gender" value="Others"> Others 
				<br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>