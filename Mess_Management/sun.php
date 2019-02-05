<?php include 'database.php'; ?>

<?php 
if($_POST){
$day = $_POST['day'];
$user = $_POST['user'];
$query = "SELECT * FROM user WHERE user = '$user'";
 $select = $mysqli->query($query);
 $sel = $select->fetch_assoc();
 $user = $sel['name'];
$b = $sel['type'];
$c = '';

if($day="sunday"){
	
   if(isset($_POST['a'])){
   	$a=$_POST['a'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['b'])){
   	$a=$_POST['b'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['c'])){
   	$a=$_POST['c'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['d'])){
   	$a=$_POST['d'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['e'])){
   	$a=$_POST['e'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['f'])){
   	$a=$_POST['f'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['g'])){
   	$a=$_POST['g'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['h'])){
   	$a=$_POST['h'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['i'])){
   	$a=$_POST['i'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['j'])){
   	$a=$_POST['j'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['k'])){
   	$a=$_POST['k'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['l'])){
   	$a=$_POST['l'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['m'])){
   	$a=$_POST['m'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['n'])){
   	$a=$_POST['n'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['o'])){
   	$a=$_POST['o'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['p'])){
   	$a=$_POST['p'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}

    if(isset($_POST['q'])){
   	$a=$_POST['q'];
   $query = "INSERT INTO food VALUES('','$user','$a','$c','$b',NOW(),'$day')";
    $select = $mysqli->query($query);}
    echo 'Done';
}  header('location: orderdone.html');
}
?>
