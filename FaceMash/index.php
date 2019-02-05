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
<!-- Global site tag (gtag.js) - Google Analytics -->

<style>
* {
    box-sizing: border-box;
}
body{
	text-align: center;
	font-family: arial;
	font-size: 15px;
	 background: url("img.jpg") no-repeat fixed center;

}
h2,h4{
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
    background: url("1.jpg") no-repeat fixed center;
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
if(!isset($i)){
  $i =  $_SESSION['score'];
}

    $a = array(30598,23052,21289,23314,25777,23502,27366,30467,30482,23325,23328,23359,23363,23364,23366,23373,23380,23381,23383,23387,23389,27552,23406,14887,14701,14756,16829,17805,17655,17655,18508,18568,18874,18961,19151,19350,19688,19855,20613,20722,19277,23305,20863,20913,11039,11136,11330,11604,11608,12995,26212,26216,27360,27335);
    $b = array(23294,30979,23330,23384,25831,21449,23255,30293,30014,30394,23543,28425,30290,10382,10447,10774,23303,12525,13812,21759,22649,21482,22230,23500,21774,21872,21892,21896,21912,22036,21143,21621,21622,22885,22890,22936,23137,23238,24348,24575,25101,25117,25878,25988,26071,26082,26127,26192,26209,29934,29949,29950,29959,29990,);
    $c = array(26183,23302,23341,23376,12944,21572,21576,30296,30480,31669,26210,29886,23125,23244,23507,24333,25879,27260,26224,27289,30507,21025,22372,23250,23254,23256,23259,23263,23265,13029,21257,21702,21716,22148,22237,22260,23506,23546,23548,23557,23616,24080,24220,24228,30966,31053,31437,31651,31670,26440,26490,26630,27145,27188);
    $d = array(30462,23378,23377,13318,21642,21685,30466,31135,30424,30008,21109,21119,21504,21131,13365,27398,30180,25848,25850,23508,13243,21525,21197,22289,23409,23412,23447,23479,23485,23496,21089,21521,21264,21331,21344,21367,22420,23503,23505,25821,25822,25825,26241,26254,25840,25843,25854,25861,29159,29272,29878,29887,29902,29924);
          
 ?> 
    
<header>
<div class="container">
	<h1>CHITKARA FaceMash</h1>
</div></header>
<main>
	<div class=main>
		<h2>Vote The One You Like The Most!!!</h2>
		 <center><table>
<form  action="process.php" method="post">
<tr>
<td><input type="image" name="image" <?php echo " src=https://punjab.chitkara.edu.in//Storage/Images/Student/".$a[$i].".jpg  "; echo "value=".$a[$i].">";?></td>
<td><input type="image" name="image" <?php echo " src=https://punjab.chitkara.edu.in//Storage/Images/Student/".$b[$i].".jpg  "; echo "value=".$b[$i].">";?></td>
</tr>
<tr>
<td><input type="image" name="image" <?php echo " src=https://punjab.chitkara.edu.in//Storage/Images/Student/".$c[$i].".jpg  "; echo "value=".$c[$i].">";?></td>
<td><input type="image" name="image" <?php echo " src=https://punjab.chitkara.edu.in//Storage/Images/Student/".$d[$i].".jpg  "; echo "value=".$d[$i].">";?></td>
</tr>
</form>
</table></center>
<?php if($i>30){
 echo "<a href=final.php class=start>Score Board</a>";
}?>
<?php if($i>53){
 header("Location: final.php");
}?>
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
