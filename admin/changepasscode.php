<?php
session_start();
$sedid=$_SESSION['admin'];
include("../db.php");

$a=$_POST['opass'];
$b=$_POST['npass'];
$c=$_POST['cpass'];
$sel="select * from adminlogin where adminemail='$sedid'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);

if(!$row)
{
	echo "password not macth";
}
else
{
   if($row['2']==$a)
   {
   if($b==$c)
   {
    $up="update adminlogin set adminpassword='$b' where adminemail='$sedid'";
	if(mysqli_query($conn,$up))
	{
		header("location:dashboard.php");
	}
	else
	{
		echo "password not change";
	}
   }
   else
   {
	   echo "new password and confirm not match";
   }
   }
else
{
echo "old password not match";
}
}
?>