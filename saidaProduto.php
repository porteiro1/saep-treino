<?php
session_start();
if(empty($_SESSION['idManager'])){
  header('Location: sair.html', true, 301);
  exit();
}
$hostname = "127.0.0.1";
$user     = "root";
$password = "";
$database = "escola_db";

$connect  = new mysqli($hostname,$user,$password,$database);

$sql = "SELECT `product` FROM products WHERE id =" .$_GET['id'];
$result = $connect -> query($sql);
$row = $result -> fetch_array();
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Produto</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <form method="post" action="saidaProdutoDB.php">
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>">
      <label for="product">product:  </label>
      <input type="text" name="product" value="<?php echo htmlspecialchars($row[0]); ?>" readonly>
      <br>
      <label for="quantity">quantity: </label>
      <input type="number" name="quantity" placeholder="insert quantity" required>
      <br>
      <label for="dataSaida">data saida:  </label>
      <input type="date" name="dataSaida" placeholder="insert data" required>
      <br>
      <input type="submit" value="Submit">
    </form>
    <a href="site.php">Voltar</a>
  </body>
</html>
