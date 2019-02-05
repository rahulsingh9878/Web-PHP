<?php include 'database.php'; ?>

<?php 
if($_POST){
   $user = $_POST['user'];
   $pass = $_POST['pass'];

  
   $query = "SELECT * FROM user WHERE name = '".$user."'";
    $select = $mysqli->query($query);
    $select = $select->fetch_assoc();
if($select['name']==$user && $select['pass']==$pass){ 
header("Location: admin.php");
}  

else{header("Location: adminlog.php");

}
}