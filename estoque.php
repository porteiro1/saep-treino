<?php
session_start();

if(empty($_SESSION['idManager'])){
  header('Location: sair.php');
  exit();
}else{
  echo "<header>
    <h1> olá, " . $_SESSION['name'] . "</h1> <br>
  </header>";
}

$hostname = "127.0.0.1";
$user     = "root";
$password = "";
$database = "escola_db";

$connect  = new mysqli($hostname,$user,$password,$database);

$sql = "SELECT * FROM `products` ORDER BY `product` ASC";
$result = $connect -> query($sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Produto</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <table>
      <thead>
       <tr>
          <th>id</th>
          <th>product</th>
          <th>quantity</th>
          <th>id Manager</th>
         <th>options</th>
       </tr>
      </thead>
      <tbody>
        <?php
        if($result -> num_rows > 0){
        while($row = $result -> fetch_array()){
        echo "<tr>";
        echo "<td>" .$row[0]. "</td>";
        echo "<td>" .$row[1]. "</td>";
        echo "<td>" .$row[2]. "</td>";
        echo "<td>" .$row[3]. "</td>";
        echo "<td> <a href='entradaProduto.php?id={$row[0]}'>entrada</a><br><a href='saidaProduto.php?id={$row[0]}'>saida</a>";
        }
        } 
        ?>
      </tbody>
    </table>
    <a href="site.php">Sair</a>
  </body>
</html>
