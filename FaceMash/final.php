<?php 
include 'database.php'; ?>
<?php session_start(); ?>
<?php 
if(!isset($_SESSION['score'])){
  $_SESSION['score'] = 0;
  $i=0;
}?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<style>
* {
    box-sizing: border-box;
}
body{
	text-align: center;
	font-family: arial;
	font-size: 15px;
	 background: url("https://storage.googleapis.com/movie_series/img.jpg") no-repeat fixed center;

}
h2{
    color:#e4e4e4;
}
p{
    color:#6bf861;
}

a{
	text-decoration: none;
	color:#ffffff;
	display: inline-block;
	border-radius: 25px;
	background: rgba(81,206,96, 0.7);
		padding:6px 13px;
}
a:hover{
    	color:#ffffff;
    background: rgba(81,206,96, 1);
}
table{
	padding:10px;
}
.container {
    bottom: 0;
    border-radius: 5px;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    height:100%;
    padding: 10px;
}

input{
		width: 200px;
		height: 200px;
	}
header{
	border-bottom: 3px #f4f4f4 solid;
		padding-bottom: 5px;
}
footer{
	border-top: 3px #f4f4f4 solid;
	text-align: center;
	padding-top: 5px;
}
main{
	padding-bottom: 15px;
}
.main{
    padding-bottom: 7px;
}
td{
    color:#ffffff;
    font-size:50px;
}
a.start{
	display: inline-block;
	color: #666;
	background: #f4f4f4;
	border:#ccc dotted 1px;
	padding:6px 16px;
}
a.start:hover{
    background: #ffffff;
}

label{
	display:inline-block;
	width: 180px;
}
form{
	display:inline-block;
}
input{
	-webkit-filter: contrast(120%);filter: contrast(120%);
padding:1px;
border-radius: 200px;
border:5px #fff solid;
width: 200px;
height: 200px;
}
input:hover{
-webkit-filter: contrast(150%);filter: contrast(150%);
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
	border:3px #fff solid;
}

@media only screen and (max-width:850px){
	.container{
		align-items: center;
		width: 100%;
		
	}
	body{
    background: url("https://storage.googleapis.com/movie_series/1.jpg") no-repeat fixed center;
     background-size: 100% 100%;
	}
	input{
		width: 130px;
		height: 130px;
	}
}
</style>
</head>
<body>
<?php
 $query = "SELECT  * FROM `point` ORDER BY mark DESC";
$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
   $select = $select->fetch_assoc();
 
 $a = $select['address'];

 $query = "SELECT  address FROM `point` WHERE address != $a ORDER BY mark DESC";
$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
 $select = $select->fetch_assoc();
 
 $b = $select['address'];

$query = "SELECT  address FROM `point` WHERE address != $b AND address != $a ORDER BY mark DESC";
$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
 $select = $select->fetch_assoc();
 
 $c = $select['address'];

 $query = "SELECT  address FROM `point` WHERE address != $c AND address != $b AND address != $a ORDER BY mark DESC";
$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
 $select = $select->fetch_assoc();
 
 $d = $select['address'];
 
 $query = "SELECT  address FROM `point` WHERE address != $d AND address != $c AND address != $b AND address != $a ORDER BY mark DESC";
$select = $mysqli->query($query) or die($mysqli->error.__LINE__);
 $select = $select->fetch_assoc();
 
 $e = $select['address'];
          
 ?> 

<header>
<div class="container">
	<h1>CHITKARA FaceMash</h1></header>
</div>
<main>
	<div class="main">
		<h2>SCOREBOARD</h2>
		 <center><table>
<tr><td>1<sup>st</sup></td>
<td><input type="image" name="image"<?php echo " src=https://punjab.chitkara.edu.in//Storage/Images/Student/".$a.".jpg >";?></td></tr>
<tr><td>2<sup>nd</sup></td>
<td><input type="image" name="image"<?php echo " src=https://punjab.chitkara.edu.in//Storage/Images/Student/".$b.".jpg  >";?></td></tr>
<tr><td>3<sup>rd</sup></td>
<td><input type="image" name="image"<?php echo " src=https://punjab.chitkara.edu.in//Storage/Images/Student/".$c.".jpg  >";?></td></tr>
<tr><td>4<sup>th</sup></td>
<td><input type="image" name="image"<?php echo " src=https://punjab.chitkara.edu.in//Storage/Images/Student/".$d.".jpg >";?></td></tr>
<tr><td>5<sup>th</sup></td>
<td><input type="image" name="image"<?php echo " src=https://punjab.chitkara.edu.in//Storage/Images/Student/".$e.".jpg >";?></td></tr>
</table></center>
<center><a href=process.php class=start>Want To Contiune</a></center>
<center><p>Suggest Your Friends To Vote!!!</p>
<a href="whatsapp://send?text=*The Only ChitKara FaceMash* Vote the one You Like The Most!!! But Bhaiyon Pighalna Nahi Hai.
 Link:- http://www.filmycatalog.com/FaceMash 
Suggest Your Friends Too...">Share on Whatsapp</a></center>
	</div>
</main>
<footer>
<div class="container">
	Copyright &copy; 2018, CHITKARA FaceMash
</div>
</footer>
</body>
</html>