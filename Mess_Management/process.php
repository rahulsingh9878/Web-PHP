<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
if(!isset($_SESSION['score'])){
   $_SESSION['score'] = 0;
}else{
   $_SESSION['score']++;
}


if($_POST){
   $number = $_POST['image'];
   $query = "SELECT * FROM `point` WHERE address=$number";
    $select = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $select = $select->fetch_assoc();
if($select['address']==$number){ 
   $query = "SELECT mark FROM `point` WHERE address=$number";
    $select = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $select = $select->fetch_assoc();
    $mark = $select['mark'];
    $mark = $mark+1;
     $query = "UPDATE `point` SET mark = $mark WHERE address=$number";
    $select = $mysqli->query($query) or die($mysqli->error.__LINE__);
header("Location: index.php");
}
else{

$query = "INSERT INTO `point`(address) VALUES ('$number')";
  $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);


   header("Location: index.php");}}else{
header("Location: index.php");
   }

   

?>