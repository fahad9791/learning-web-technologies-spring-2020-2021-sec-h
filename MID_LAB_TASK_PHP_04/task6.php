<?php
	$flag = 0;
	$search = "Fahad";
	$arr = [10, 20, 30, 40, 50, "Fahad", "Fahim", "Farabi", "Banana",  "Apple", "Orange"];
	foreach ($arr as $value) {
		if ($value == $search) {
			$flag = 1;
		}
	}
	if ($flag == 1) {
			echo "Found :" . $search;
		}
		else{
			echo "Not found";
		}
?>