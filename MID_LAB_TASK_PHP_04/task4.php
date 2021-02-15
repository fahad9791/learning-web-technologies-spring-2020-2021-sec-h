<?php
	$number1 = 1220;
	$number2 = 220;
	$number3 = 30;

	if ($number1 > $number2 && $number1 > $number3) {
		echo "The largest number is :" . $number1;
	}
	elseif ($number2 > $number1 && $number2 > $number3) {
		echo "The largest number is :" . $number2;
	}
	else{
		echo "The largest number is :" . $number3;
	}
?>