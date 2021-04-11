</<?php 
	
	session_start();
	$username = $_SESSION['username'];
	$subject = $_POST['subject'];
	$msg = $_POST['msg'];

	$myfile = fopen('../model/application.json', 'r');
	$data = fread($myfile, filesize('../model/application.json'));
	fclose($myfile);
	$decode = json_decode($data,true);

	if (isset($_POST['vacation'])) {

		$application = [
						'username'=>$username,	
						'subject'=>$subject,
						'msg'=> $msg,
						'topic'=> 'vacation'
					];
			
		}
		elseif (isset($_POST['transfer'])) {
			$application = [
						'username'=>$username,	
						'subject'=>$subject,
						'msg'=> $msg,
						'topic'=> 'transfer'
					];
		}
		elseif (isset($_POST['resignation'])) {
			$application = [
						'username'=>$username,	
						'subject'=>$subject,
						'msg'=> $msg,
						'topic'=> 'resignation'
					];
		}
		elseif (isset($_POST['reference'])) {
			$application = [
						'username'=>$username,	
						'subject'=>$subject,
						'msg'=> $msg,
						'topic'=> 'reference'
					];
		}
		elseif (isset($_POST['promotion'])) {
			$application = [
						'username'=>$username,	
						'subject'=>$subject,
						'msg'=> $msg,
						'topic'=> 'promotion'
					];
		}
		elseif (isset($_POST['loan'])) {
			$application = [
						'username'=>$username,	
						'subject'=>$subject,
						'msg'=> $msg,
						'topic'=> 'loan'
					];
		}

		$decode[] = $application;

		$curr_encode=json_encode($decode);

		$myfile = fopen('../model/application.json', 'w');
		fwrite($myfile, $curr_encode);
		fclose($myfile);
		header('location: ../view/dashboard.php');	
?>