<?php include 'database.php'; ?>

<?php 
if($_POST){
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $pass_1 = $_POST['pass_1'];
   $name = $_POST['name'];
  

   $query = "SELECT * FROM user WHERE user = '".$user."'";
    $select = $mysqli->query($query);
    $select = $select->fetch_assoc();
if($select['user']==$user && $select['name']==$name){ 
	if($pass_1==$pass){

       $query = "UPDATE user SET pass = '$pass' WHERE user = '$user'";
    $select = $mysqli->query($query);
      header("Location: login.html");
	}

}  

else{header("Location: forget.html");

}
}else{header("Location: login.html");
}