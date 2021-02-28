<?php
	session_start();
	setcookie('flag', true, time()-3600, '/');
	header('location: login.php');
?>