<?php

	session_start();

	date_default_timezone_set('Asia/Dhaka');
	$date = date('d-m-y');
	$time = date('h:i:s');
	$enter = "Enter";
	$exit = "Exit";
	$check = 0;
	//echo $date;


	$myfile = fopen('../model/attendance.json', 'r');
	$data = fread($myfile, filesize('../model/attendance.json'));
	fclose($myfile);

	$decode = json_decode($data,true);

	if (isset($_POST['enter'])) {

		foreach ($decode as $value)
		{
			
			//echo $value['username'];
			if ($_SESSION['username'] == $value['username'] && $value['date'] == $date  && $value['status'] == $enter ) {

				//echo "you already attendance";
				$check = 1;
				break;
				
			}
			
				
	}
	if ($check == 0) {
		//echo "attendance";
		$attendance = [
			
		'username'=> $_SESSION['username'],
		'date'=> $date,
		'time' => $time,
		'status' => $enter

	];

	$decode[] = $attendance;

	$curr_encode=json_encode($decode);

	$myfile = fopen('../model/attendance.json', 'w');
	fwrite($myfile, $curr_encode);
	fclose($myfile);
	header('location: ../view/attendance.php');
	}
	else{
		echo "you already attendance";
	}
}
else{

	foreach ($decode as $value)
		{
			
			//echo $value['username'];
			if ($_SESSION['username'] == $value['username'] && $value['date'] == $date  && $value['status'] == $exit ) {

				$check = 1;
				break;
				
			}
			
				
	}
	if ($check == 0) {
		//echo "attendance";
		$attendance = [
			
		'username'=> $_SESSION['username'],
		'date'=> $date,
		'time' => $time,
		'status' => $exit

	];

	$decode[] = $attendance;

	$curr_encode=json_encode($decode);

	$myfile = fopen('../model/attendance.json', 'w');
	fwrite($myfile, $curr_encode);
	fclose($myfile);
	header('location: ../view/attendance.php');
	}
	else{
		echo "you already exit";
	}

}


	
?>