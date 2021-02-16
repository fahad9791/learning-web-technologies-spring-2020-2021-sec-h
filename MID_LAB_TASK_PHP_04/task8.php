<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<table border="1">
		<tr>
			<td> The array to declare</td>
			<td> Shapes to print</td>
		</tr>
		<tr>
			<td>
				<?php

					$arr = array(
					  array(1, 2, 3, 'A'),
					  array(1, 2, 'B', 'C'),
					  array(1, 'D', 'E', 'F')
					  );
					echo "<table border='1' align='center'>";
					foreach ($arr as $value1) {
						echo "<tr>";
						foreach ($value1 as $value2) {
							echo "<td> $value2 </td>";
						}
						echo "</tr>";
					}
					echo "</table>";
				?>
			</td>
			<td>
				<table border="1" align='center'>
					<tr>
						<td>
							<?php
								$n = 3;
								for ($i=0; $i <4 ; $i++) { 
									for ($j=0; $j <$n ; $j++) { 
										echo $arr[$i][$j]. " ";
									}

									$n--;
									echo "<br>";
								}
							?>
						</td>
						<td>
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
			</td>
		</tr>
	</table>
 
</body>
</html>