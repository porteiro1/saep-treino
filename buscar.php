<?php
$hostname = "127.0.0.1";
$user     = "root";
$password = "";
$database = "escola_db";

$connect = new mysqli($hostname, $user, $password, $database);

if ($connect->connect_errno) {
    echo "Erro de conexão: " . $connect->connect_error;
    exit();
}

$name = $connect->real_escape_string($_POST['product']);

$sql = "SELECT * FROM products WHERE `product` = '$name';";
$result = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <form method="post" action="buscar.php">
        <label for="product">Buscar produto:</label>
        <input type="text" name="product" placeholder="Insert product">
        <input type="submit" value="Buscar">
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>ID Manager</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $row = $result->fetch_array();
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td>" . $row[3] . "</td>";
                echo "<td> <a href='editarProduto.php?id={$row[0]}'>editar</a><br><a href='excluirProduto.php?id={$row[0]}'>excluir</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <br>

    <div>
        <form method="post" action="cadastrarProdutoDB.php">
            <label for="product">Product:</label>
            <input type="text" name="product" placeholder="Insert product" required>
            <br>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" placeholder="Insert quantity" required>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <a href="site.php">Voltar</a>
</body>
</html>
