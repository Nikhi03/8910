<?php
$trans=array(array(1,2,9),array(3,4,5),array(6,7,8));
echo "<h2>Matrix</h2>";
	for($row=0;$row<3;$row++)
		{
			echo "<br>";
		for($col=0;$col<3;$col++)
			{
				echo " ".$trans[$row][$col];
			}
		}


echo "<h2>Transpose of Matrix</h2>";
for($row=0;$row<3;$row++)
		{
			echo "<br>";
		for($col=0;$col<3;$col++)
			{
				echo " ".$trans[$col][$row];
			}
		}
?>
