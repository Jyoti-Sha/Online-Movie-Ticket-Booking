<?php
include("db.php");
$a=$_POST['name'];
//echo $a;
echo "<br/>";

$b=$_POST['email'];
//echo $b;
echo "<br/>";

$c=$_POST['pass'];
//echo $c;
echo "<br/>";

$d=$_POST['mob'];
//echo $d;
echo "<br/>";

$e=$_POST['gen'];
//echo $e;
echo "<br/>";

$f=$_POST['city'];
//echo $f;
echo "<br/>";

$g=$_POST['adds'];
//echo $g;
echo "<br/>";


date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");


$ins="insert into registration(regname,regemail,regpassword,regmobile,reggender,regcity,regaddress,regdatetime) values('$a','$b','$c','$d','$e','$f','$g','$datetime')";

if(mysqli_query($conn,$ins))
{
	$ins1="insert into login(logemail,logpassword) values('$b','$c')";
	if(mysqli_query($conn,$ins1))
	{
		header("location:login.php");
	}
	else
	{
		echo "login data not insert";
	}
}
else
{
	echo "registration data not insert";
}	
?>