<?php
		
		if(empty($_POST['degree'])){
			echo "null submission";
		}else{
			echo $_POST['degree'];
		}
?>

<html>
<head>
	<title>Degree input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>DEGREE</legend>
			<input type="checkbox" name="degree" value="SSC"> SSC
            <input type="checkbox" name="degree" value="HSC"> HSC
            <input type="checkbox" name="degree" value="Bsc"> Bsc
            <input type="checkbox" name="degree" value="Msc"> Msc 
            <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>