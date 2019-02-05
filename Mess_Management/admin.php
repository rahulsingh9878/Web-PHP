<!DOCTYPE html><?php include 'database.php'; ?>

<html>
<head>
	<title>Admin</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body bgcolor="black">
 <div id="header">ADMIN</div>
<div><marquee class="slide">Mess Food Record</marquee></div>
<table>
<?php

 $date = date("Y-m-d");
 $query = "SELECT * FROM food WHERE datee = '$date'";
    $select = $mysqli->query($query);
while($row = $select->fetch_array()): ?>

	<tr><td><span style="color: green;"><?php echo $row['user'].' '; ?></span> :</td>
	<td><span style="color: brown;"><?php echo $row['item'].' '; ?></span> :</td>
	<td><span style="color: yellow;"><?php echo $row['type'].' '; ?></span> :</td>
	<td><span style="color: brown;"><?php echo $row['datee'].' '; ?></span> :</td>
	<td><span style="color: blue;"><?php echo $row['day'].' '; ?></span></td> </tr>
 
 <?php endwhile; ?>
</table>

</body>
</html>