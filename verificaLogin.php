<?php
session_start();

$hostname = "127.0.0.1";
$user     = "root";
$password = "";
$database = "escola_db";

$connect  = new mysqli($hostname,$user,$password,$database);

if($connect -> connect_errno){
  echo "connection has failed" . $connect -> connect_error;
}else{
  $password = $connect -> real_escape_string($_POST['password']);
  $email    = $connect -> real_escape_string($_POST['email']);

  $sql = "SELECT * FROM managers WHERE `email` = '".$email."' AND `password` = '".$password."';";
 
  $result = $connect ->query($sql);

  if($result -> num_rows != 0){
    $row = $result -> fetch_array();
    $_SESSION["idManager"] = $row[0];
    $_SESSION["name"] = $row[1];

    $_SESSION["login_valido"] = true;
    $connect ->close();
    header('Location: site.php', true, 301);
    exit();
  }else{
    $_SESSION['login_valido'] = false;
    $connect ->close();
    header('Location: index.php',true,301);
    exit();
  }
}
?>
