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
  $product  = $connect -> real_escape_string($_POST['product']);
  $quantity = $connect -> real_escape_string($_POST['quantity']);

  $sql      = "INSERT INTO `products` (`product`, `quantity`, `idManager`) VALUES ('".$product."', '".$quantity."', '".$_SESSION['idManager']."');";
  $connect -> query($sql);

  $connect ->close();
  header('Location: cadastrarProduto.php', true, 301);
  exit();
  
}
?>
