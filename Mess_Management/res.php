<?php include "database.php" ?>
<?php 
if($_POST){
   
   $user = $_POST['user'];
   $num = $_POST['number'];
   $type = $_POST['type'];
   $br = $_POST['branch'];
   $name = $_POST['name'];
   $pass = $_POST['pass'];
   $pass_1 = $_POST['pass_1'];
  
$query = "SELECT user FROM user WHERE user = '".$user."'";
	   $select = $mysqli->query($query);
	   $row = $select->fetch_assoc();
		if ($row > 0){
			
				echo "Your id is already Register";
		}else{
   if($pass==$pass_1){
  
   	$query = "INSERT INTO user VALUES('','$user','$name','$br','$type','$num','$pass')";
    $select = $mysqli->query($query);
    header('location: login.html');
   }else{
   	 	echo  'Password did not match';
   }}
 

}
 ?>