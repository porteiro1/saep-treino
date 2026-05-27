<?php
session_start();

echo "<header> <h1>" .$_SESSION['name']. "</h1> </header>"
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>saep</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <a href="index.php"> sair </a>
    <br>
    <a href="cadastrarProduto.php">cadastrar Produto</a>
    <br>
    <a href="estoque.php"> Gestão de estoque</a>
  </body>
</html>
