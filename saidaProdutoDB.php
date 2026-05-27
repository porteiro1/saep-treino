<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$hostname = '127.0.0.1';
$user     = 'root';
$password = '';
$database = 'escola_db';

$connect = new mysqli($hostname,$user,$password,$database);

if($connect -> connect_errno){
  echo "connect error: " . $connect -> connect_error;
  exit();
}else{
  $id = $connect -> real_escape_string($_POST['id']);
  $quantity = $connect ->real_escape_string($_POST['quantity']);
  $dataSaida = $connect -> real_escape_string($_POST['dataSaida']);

  $sql = "SELECT * FROM products WHERE id = " . $id;
  $results = $connect -> query($sql);
  $row = $results -> fetch_array();

  $sqlQuantidade = "UPDATE products SET quantity = quantity + $quantity WHERE id = $id ";
  $connect->query($sqlQuantidade);
   
  $sqlLending = "UPDATE lending SET dataDevolucao = '$dataSaida' WHERE idProduct = $id";
  $connect ->query($sqlLending);
    $sqlHistorico = "INSERT INTO history (idProduct, idManager,idLending) VALUES ($id,".$_SESSION['idManager']. ",$idEmprestimo) ";
    $connect->query($sqlHistorico);
  header('Location: estoque.php');
  
}

?>
