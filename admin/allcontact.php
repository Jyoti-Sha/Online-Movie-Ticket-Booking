<html>
<?php
   include("../db.php");
   $sel="select * from contact";
   $row=mysqli_query($conn,$sel);
     
?>
<head>
</head>
 
<body>
	<form action="dashboard.php" method="post">
	<fieldset style="width:300px;">
			<legend>Registration</legend>
	<table align="center" >
	<table border="1">
		<tr>
		<th>Sr No</th>
		<th> Name</th>
		<th>Email </th>
		<th>Mobile</th>
		<th>Addess</th>
		<th>Message</th>
		<th> datetime</th>
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
		
	  </tr>
	  <?php
	   }
	  ?>
   </table>
</body>
</html>