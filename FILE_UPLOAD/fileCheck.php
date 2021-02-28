<?php

	if (isset($_POST['submit'])) {

		$file_info = $_FILES['picture'];
		$file = $file_info['name'];
		$filename = $file_info['tmp_name'];
		$destination = 'picture/' . $file_info['name'];
		if(move_uploaded_file($filename, $destination)){
			echo "success <br>";
?>

<html>
<head>
	<title>Change Profile Picture</title>
</head>
<body>
	<img src="picture/<?php echo $file; ?>" width="300" height="300">
</body>
</html>
<?php
		}
		else{
			echo "failed";
		}
	}

?>