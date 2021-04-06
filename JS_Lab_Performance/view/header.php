<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		
		header('location: signin.php');
	}
	else{
		$name = $_SESSION['name'];
		$username = $_SESSION['username'];
		$email = $_SESSION['email'];
		$phone = $_SESSION['phone'];
		$address = $_SESSION['address'];
		$gender = $_SESSION['gender'];
		$dob = $_SESSION['dob'];
		$department = $_SESSION['department'];
		$blood = $_SESSION['blood'];

	}
?>