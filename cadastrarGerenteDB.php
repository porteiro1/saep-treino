<?php
session_start();

$hostname = "127.0.0.1";
$user     = "root";
$password = "";
$database = "escola_db";

$connect  = new mysqli($hostname,$user,$password,$database);

if($connect -> connect_errno){
  echo "connection error: ". $connect ->connect_error;
  exit();
}else{
  $name  = $connect -> real_escape_string($_POST['name']);
  $email = $connect -> real_escape_string($_POST['email']);
  $password = $connect -> real_escape_string($_POST['password']);

  $sql      = "INSERT INTO `managers` (`name`, `email`, `password`) VALUES ('".$name."', '".$email."', '".$password."');";
  $connect -> query($sql);

  $connect ->close();
  header('Location: index.php', true, 301);
  exit();
  
}
?>
