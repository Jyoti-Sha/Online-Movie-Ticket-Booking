<?php
include("../db.php");
$a=$_POST['oemail'];
$b=$_POST['nemail'];
$c=$_POST['cemail'];
session_start();
$_SESSION['admin']=$a;
$sel="select * from adminlogin where adminemail='$a'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);
if(!$row)
{
	echo "email id not match";
}
else
{
	if($b==$c)
	{
		$up="update adminlogin set adminemail='$b' where adminemail='$a'";
		if(mysqli_query($conn,$up))
		{
			header("location:dashboard.php");
		}
		else
		{
			echo "new emailid and confirm emailid not match";
		}
	}
	else
	{
		echo "old email id is wrong";
	}
}
?>