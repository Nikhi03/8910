<html>
<head>
<style>
table,td,th
{
border:1px solid black;
width:33%;
text-allign:center;
border-collapse:collapse;
background_color:lightblue;
}
table
{
margin:auto;
}
</style>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname=" sort";
$a=[];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
die("connection failed:".$conn->connect_error);
$result=$conn->query($sql);
echo "<br>";
echo "<center>before starting </center>";
echo "<table border = '2'>";
echo"<tr>";
echo "<th>usn</th>
<th> name</th>
<th>add</th>
</tr>";
if($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>".$row["usn"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["sem"]."</td>";
</tr>";
array_push($a,$row["usn"]);
}
}
else
echo "table is empty";
echo "</table>";
$n=count($a);
$b=$a;
for($i=0;$i<($n-1);$i++)
{
$pos=$i;
for($j=$i+1;$j<$n;$j++)
{
if($a[$pos]>$a[$j])
$pos=$j;
}
if($pos!=$i)
{
$temp=$a[$i];
$a[$i]=$a[$pos];
$a[$pos]=$temp;
}
}
$c=[];
$d=[];
$result=$conn->query[$sql];
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
for($i=0;$i<$n;$i++)
{
if($row["usn"]=$a[$i])
{
$c[$i]=$row["name"];
$d[$i]=$row["sem"];
}
}
}
}
echo "<br>";
echo "<center>after sorting </center>";
echo "<table border = '2'>";
echo"<tr>";
echo "<th>usn</th>
<th> name</th>
<th>add</th>
</tr>";
for($i=0;$i<$n;$i++)
{
echo "<tr>";
echo "<td>".$a[$i]."</td>";
echo "<td>".$c[$i]."</td>";
echo "<td>".$d["$i"]."</td>";
</tr>";
echo "</table>" ;
$conn ->close()
?>
</body>
</html>
