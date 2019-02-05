<?php include 'database.php'; ?>

<?php 
if($_POST){
   $user = $_POST['user'];
   $pass = $_POST['pass'];
  echo $pass;
  echo $user;
  
   $query = "SELECT * FROM user WHERE user = '".$user."'";
    $select = $mysqli->query($query);
    $select = $select->fetch_assoc();
if($select['user']==$user && $select['pass']==$pass){ 
header("Location: menuhosteller.php?user=$user");
}  

else{header("Location: login.html");

}
}