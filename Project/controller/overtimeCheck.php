<?php

	session_start();

	date_default_timezone_set('Asia/Dhaka');
	$date = date('d-m-y');
	$time = date('h:i:s');
	$start = "Start";
	$over = "Over";
	$check = 0;
	//echo $date;


	$myfile = fopen('../model/overtime.json', 'r');
	$data = fread($myfile, filesize('../model/overtime.json'));
	fclose($myfile);

	$decode = json_decode($data,true);

	if (isset($_POST['start'])) {

		foreach ($decode as $value)
		{
			
			if ($_SESSION['username'] == $value['username'] && $value['date'] == $date  && $value['status'] == $start ) {

				$check = 1;
				break;
				
			}
			
				
	}
	if ($check == 0) {

		$overtime = [
			
		'username'=> $_SESSION['username'],
		'date'=> $date,
		'time' => $time,
		'status' => $start

	];

	$decode[] = $overtime;

	$curr_encode=json_encode($decode);

	$myfile = fopen('../model/overtime.json', 'w');
	fwrite($myfile, $curr_encode);
	fclose($myfile);
	header('location: ../view/overtime.php');
	}
	else{
		echo "You already Started";
	}
}
else{

	foreach ($decode as $value)
		{
			
			if ($_SESSION['username'] == $value['username'] && $value['date'] == $date  && $value['status'] == $over ) {

				$check = 1;
				break;
				
			}
			
				
	}
	if ($check == 0) {
		
		$overtime = [
			
		'username'=> $_SESSION['username'],
		'date'=> $date,
		'time' => $time,
		'status' => $over

	];

	$decode[] = $overtime;

	$curr_encode=json_encode($decode);

	$myfile = fopen('../model/overtime.json', 'w');
	fwrite($myfile, $curr_encode);
	fclose($myfile);
	header('location: ../view/overtime.php');
	}
	else{
		echo "You already Overed";
	}

}


	
?>