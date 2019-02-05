<?php
$Query_username = "something1";
$Query_pswd = "something2";

$userName = $_POST['userName'];
$pswd = $_POST['pswd'];

if(($userName == $Query_username) && ($pswd == $Query_pswd)) {

  echo "OK, logged in, good to go.";
} else {
  $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
}

?>