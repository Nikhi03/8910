<?php
$arr1=array(array(1,2,9),array(3,4,5),array(6,7,8));
$arr2=array(array(1,2,9),array(3,4,5),array(6,7,8));
echo "<h2>Matrix1</h2>";
	for($row=0;$row<3;$row++)
		{
			echo "<br>";
		for($col=0;$col<3;$col++)
			{
				echo " ".$arr1[$row][$col];
			}
		}

echo "<h2>Matrix2</h2>";
	for($row=0;$row<3;$row++)
		{
			echo "<br>";
		for($col=0;$col<3;$col++)
			{
				echo " ".$arr2[$row][$col];
			}
		}



echo "<h2>Addition of Matrix</h2>";
for($row=0;$row<3;$row++)
		{
			echo "<br>";
		for($col=0;$col<3;$col++)
			{	echo " ";
				echo $arr1[$row][$col]+$arr2[$row][$col];
			}
		}
?>
