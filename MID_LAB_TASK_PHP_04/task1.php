<?php
	function rectangle($length, $width)
	{
		$area = $length * $width;
		$perimeter = 2* ($length + $width);
		echo "The area of a Rectangle : ". $area . "<br>";
		echo "The perimeter of a Rectangle = ". $perimeter;
	}
	rectangle(5, 6);

	
	
	
	
?>
