<?php
include("../db.php");

$delid=$_REQUEST['id'];
$del="delete from movieticket where id=$delid";
if(mysqli_query($conn,$del))
{
	header("location:show.php");

}
else
{
	echo "date not deleted";
}
?>