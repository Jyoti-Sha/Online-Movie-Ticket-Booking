<?php
include("db.php");

$a=$_POST['name'];
echo $a;
echo "<br/>";

$b=$_POST['email'];
echo $b;
echo "<br/>";

$c=$_POST['mob'];
echo $c;
echo "<br/>";

$d=$_POST['adds'];
echo $d;
echo "<br/>";

$e=$_POST['msg'];
echo $e;
echo "<br/>";

date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".date("h:i:sa");

$ins="insert into contact(contname,contemail,contmobile,contaddress,contmassage,contdatetime) values('$a','$b','$c','$d','$e','$datetime')";
if(mysqli_query($conn,$ins))
{
	header("location:contact.php?msg=data insert");
}
else
{
	echo "contact data not insert";
}	
?>