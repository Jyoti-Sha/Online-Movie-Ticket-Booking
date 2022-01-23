<html>
<?php
   include("../db.php");
   $sel="select * from movieticket";
   $row=mysqli_query($conn,$sel);
   
   
?>
<head>
</head>
 
<body>
	<form action="dashboard.php" method="post">
	<fieldset style="width:300px;">
			<legend>MOVIE'S & THEATER'S</legend>
	<table align="center" >
	<table border="1">
		<tr>
		<th>Sr No</th>
		<th>ADD CITY</th>
		<th>THEATER NAME</th>
		<th>THEATER TYPE</th>
		<th>MOVIE NAME</th>
		<th>MOVIE TYPE</th>
		<th>TIMMING</th>
		<th>SHOWS</th>
		<th>DATETIME</th>
		<th>Delete</th>
		</tr>
		<tr>
      <?php 
       while($res=mysqli_fetch_array($row,MYSQLI_BOTH))
	   {
	  ?>
	  <tr>
		<td><?php echo $res['0']; ?></td>
	    <td><?php echo $res['1']; ?></td>
	    <td><?php echo $res['2']; ?></td>
	    <td><?php echo $res['3']; ?></td>
	    <td><?php echo $res['4']; ?></td>
		<td><?php echo $res['5']; ?></td>
		<td><?php echo $res['6']; ?></td>
		<td><?php echo $res['7']; ?></td>
		<td><?php echo $res['8']; ?></td>
		<td><a href="delete.php?id=<?php echo $res['0']; ?>">Delete</a></td>
		
	  </tr>
	  <?php
	   }
	  ?>
   </table>
</body>
</html>
