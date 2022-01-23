<?php
include("../db.php");
$a=$_POST['city'];
echo $a;
echo "<br/>";

$b=$_POST['theaname'];
echo $b;
echo "<br/>";

$c=$_POST['theatype'];
echo $c;
echo "<br/>";

$d=$_POST['movietype'];
echo $d;
echo "<br/>";

$e=$_POST['moviename'];
echo $e;
echo "<br/>";

$f=$_POST['timing'];
echo $f;
echo "<br/>";

$g=$_POST['show'];
echo $g;
echo "<br/>";

date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");

$ins="insert into movieticket(city,theatername,theatertype,moviename,movietype,timings,shows,datetime) values('$a','$b','$c','$d','$e','$f','$g','$datetime')";

if(mysqli_query($conn,$ins))
{
	echo "data insert";
}
else
{
	echo "data not insert";
}
?>