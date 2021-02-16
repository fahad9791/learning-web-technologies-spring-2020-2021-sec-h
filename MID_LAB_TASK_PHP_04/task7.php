
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table border="1" width="30%">
		<tr>
			<td width="10%">
				<?php
					$n = 4;
					for ($i=0; $i < $n; $i++) { 
						for ($j=0; $j < $i; $j++) { 
							
							echo "*"." ";
						}
						
						echo "<br>";
					}
				?>
			</td>
			<td width="10%">
				<?php  
 
					$n = 3;
					for ($i = $n; $i >= 0; $i--)
					{
						for ($j = 1; $j <= $i; $j++)
						{
							echo $j;
						}
						echo "<br>";
					}
				?>
			</td>
			<td width="10%">
				<?php  
 
					$alpha = range('A', 'Z'); 
					$k = 0; 
					$n = 2;
					for ($i = 0; $i <= $n; $i++)
					{
						for ($j = 0; $j <= $i; $j++)
						{
							echo $alpha[$k++]." ";
						}
						echo "<br>";
					}
				?>
			</td>
		</tr>
	</table>
</body>
</html>