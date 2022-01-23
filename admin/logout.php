<?php
session_start();
$sesid=$_SESSION['admin'];

if(!$sesid)
{
	echo "session error";
}
else
{
	session_destroy();
	header("location:admin.php");
}
?>