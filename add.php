<?php
$trans = array(
array(1,2,3),
array(3,4,9),
array(5,6,9));
echo "<h2> matrix </h2>";
for($row=0;$row<3;$row++)
{
echo "<br>";
for($col =0;$col<3;$col++)
{
echo " ".$trans[$row][$col];
}
}
echo "<h2> transpose of matrix </h2>";
for($row=0;$row<3;$row++)
{
echo "<br>";
for($col=0;$col<3;$col++)
{
echo " ".$trans[$col][$row];
}
}
?>
