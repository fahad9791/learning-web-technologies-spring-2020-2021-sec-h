<?php
    if(isset($_POST['degree']) )
    {
        echo "Degree: ".$_POST['degree'];
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
			<input type="checkbox" name="degree" value="SSC" <?php if(isset($_POST['degree'])){if($_POST['degree'] == "SSC")echo "checked";}?>> SSC
            <input type="checkbox" name="degree" value="HSC" <?php if(isset($_POST['degree'])){if($_POST['degree'] == "HSC")echo "checked";}?>> HSC
            <input type="checkbox" name="degree" value="Bsc" <?php if(isset($_POST['degree'])){if($_POST['degree'] == "Bsc")echo "checked";}?>> Bsc
            <input type="checkbox" name="degree" value="Msc" <?php if(isset($_POST['degree'])){if($_POST['degree'] == "Msc")echo "checked";}?>> Msc 
            <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>