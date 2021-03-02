<?php 
	
	$myfile = fopen('users.json', 'r');
	$data = fread($myfile, filesize('users.json'));
	$user = json_decode($data, true);
	//print_r($user['1']['name']);
	//echo $user['1']['email'];

	$output = "";
	foreach ($user as $name) 
	{
		$output.= "Name: ".$name['name'];
		$output.= "<br />";
	}
	echo $output;
?>