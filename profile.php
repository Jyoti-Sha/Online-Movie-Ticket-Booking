<?php
 include("db.php");
 
 session_start();
 $sesid=$_SESSION['user'];

?>
<html>
<head>
<style>
#movie
{
	height:650px;
	width:800px;
	background:pink;
	margin:0px auto;
	padding:50px;
	border:4px solid purple;
	background:url("image/lightbulb_robot.jpg");
	background-size:100% 100%;
}
</style>
</head>
<body>
<div id="movie">
<h1>Welcome to Profile Page</h1>
<a href="login.php"><h1>Logout</h1></a>
<form action="registration.php" method="post">
<table>
<center>
<tr>
<td><h1><u>MOVIE'S & THEATER'S</u></h1></td>
</tr>
<tr>
<td><h2>Select City</h2></td>
<td><select name="city">
<option value="city">---Select city---</option>
<option name="city" value="Lucknow">Lucknow</option>
<option name="city" value="Ballia">Ballia</option></select></td>
</tr>

<tr>
<td><h2>Select Movie</h2></td>
<td><select name="city">
<option value="city">---Select Movie---</option>
<option name="city" value="102-not-out">102-not-out</option>
<option name="city" value="Gangster3">Gangster3</option>
<option name="city" value="Nawabzaade">Nawabzaade</option>
<option name="city" value="Mission:Impossible">Mission:Impossible</option>
<option name="city" value="Soorma">Soorma</option>
<option name="city" value="Sanju">Sanju</option>
<option name="city" value="Sonu Ki Titu Ki Sweety">Sonu Ki Titu Ki Sweety</option>
<option name="city" value="The jungle book">The jungle book</option>
<option name="city" value="Raees">Raees</option>
<option name="city" value="october">October</option>
<option name="city" value="Kabali">Kabali</option>
<option name="city" value="Firangi">Firangi</option>
<option name="city" value="Raid">Raid</option>
<option name="city" value="Bahubali2">Bahubali2</option>
<option name="city" value="Baaghi2">Baaghi2</option>
<option name="city" value="Rormanu">Romanu</option>
<option name="city" value="Satyagratha">Satyagratha</option>
<option name="city" value="Raazi">Raazi</option>
<option name="city" value="Fukrey">Fukrey</option>
<option name="city" value="Fukrey Reture">Fukrey Reture</option>
<option name="city" value="Padmavati">Padmavati</option>
<option name="city" value="Hichki">Hichki</option>
<option name="city" value="Dhadak">Dhadak</option>
<option name="city" value="Gold">Gold</option>
<option name="city" value="Dabangg3">Dabangg3</option>
<option name="city" value="Bharat">Bharat</option>
<option name="city" value="Kashi">Kashi</option>
<option name="city" value="Robot2">Robot2</option>
<option name="city" value="Raajneeti2">Raajneeti2</option>
</tr>

<tr>
<td><h2>Select Movie Type</h2></td>
<td><select name="movie">
<option value="city">---Select Movie Type---</option>
<option name="city" value="3D">3D</option>
<option name="city" value="2D">2D</option>
</tr>

<tr>
<td><h2>Select Theaters</h2></td>
<td><select name="city">
<option value="city">---Select Theaters---</option>
<option name="city" value="Purvachal Cinema Hall:Ballia">Purvachal Cinema Hall:Ballia</option>
<option name="city" value="Shishmahal Cinema Hall:Ballia">Shishmahal Cinema Hall:Ballia</option>
<option name="city" value="Narayani Cinema Hall:Ballia">Narayani Cinema Hall:Ballia</option>
<option name="city" value="Partibha Cinema Hall:Lucknow">Partibha Cinema Hall:Lucknow</option>
<option name="city" value="Novelty Cinema Hall:Aliganj">Novelty Cinema Hall:Aliganj</option>
<option name="city" value="Novelty Cinema Hall:Lucknow">Novelty Cinema Hall:Lucknow</option>
<option name="city" value="Jagat Cinema Hall:Lucknow">Jagat Cinema Hall:Lucknow</option>
<option name="city" value="Camival Cinema Hall:Lucknow">Camival Cinema Hall:Lucknow</option>
<option name="city" value="Sudarshan Cinema Hall:Lucknow">Sudarshan Cinema Hall:Lucknow</option></select></td>
</tr>

<tr>
<td><h2>Select Theater Type</h2></td>
<td><select name="theater">
<option value="theater">---Select Theater Type---</option>
<option name="theater" value="Upperclass">Upperclass</option>
<option name="theater" value="Lowerclass">Lowerclass</option>
<option name="theater" value="Lowerclass">AC type</option>
<option name="theater" value="Lowerclass">NON-AC type</option>
</tr>

<tr>
<td><h2>Date</h2></td>
<td><input type="date" name="date"></td>
</tr>

<tr>
<td><h2>Show Time</h2></td>
<td><select name="time">
<option value="time">---Show Time---</option>
<option name="time" value="9:00am to 12:00am">9:00am to 12:00am</option>
<option name="time" value="12:00am to 3:00pm">12:00am to 3:00pm</option>
<option name="time" value="3:00pm to 6:00pm">3:00pm to 6:00pm</option>
<option name="time" value="6:00pm to 9:00pm">6:00pm to 9:00pm</option>
</tr>

<tr>
<td><h4 style="padding-left:40px; padding-top:20px;"><button>Submit</button></h4></td>
<td><h4 style="padding-left:40px; padding-top:20px;"><button>Clear All</button></h4></td>
</tr>
</center>
</table>
</form>
</div>
</body>
</html>
