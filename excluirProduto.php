<?php
$hostname = "127.0.0.1";
$user     = 'root';
$password = '';
$database = "escola_db";

$connect  = new mysqli($hostname,$user,$password,$database);
$sql = "DELETE FROM `products` WHERE `id` =" .$_GET['id']; 
$connect -> query($sql);
header('Location: cadastrarProduto.php',true,301);
?>
