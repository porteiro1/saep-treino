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

$sql = "SELECT * FROM `products`";
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
    <form method="post" action="buscar.php">
      <label for="product">buscar produto: </label>
      <input type="text" name="product" placeholder="insert product">
      <input type="submit" value="buscar">
    </form>
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
        echo "<td> <a href='editarProduto.php?id={$row[0]}'>editar</a><br><a href='excluirProduto.php?id={$row[0]}'>excluir</a>";
        }
        } 
        ?>
      </tbody>
    </table>
    <br>
    <div>
    <form method="post" action="cadastrarProdutoDB.php">
      <label for="product">product:  </label>
      <input type="text" name="product" placeholder="insert product" required>
      <br>
      <label for="quantity">quantity: </label>
      <input type="number" name="quantity" placeholder="insert quantity" required>
      <br>
      <input type="submit" value="Submit">
    </form>
    </div>
    <a href="site.php">Voltar</a>
  </body>
</html>
