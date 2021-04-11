<?php
	session_start();
	//unset($_SESSION['flag']);
	setcookie('flag', true, time()-3600, '/');
	header('location: ../view/signin.php');
?>