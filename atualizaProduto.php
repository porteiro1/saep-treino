<?php
session_start();

$hostname = "127.0.0.1";
$user     = "root";
$password = "";
$database = "escola_db";

$connect = new mysqli($hostname, $user, $password, $database);

if ($connect->connect_errno) {
    echo "Connection error: " . $connect->connect_error;
    exit();
} else {
    $id       = $connect ->real_escape_string($_POST['id']);
    $product  = $connect->real_escape_string($_POST['product']);
    $quantity = $connect->real_escape_string($_POST['quantity']);

    // Corrigido: uso correto de aspas e concatenação
    $sql = "UPDATE products 
            SET `product` = '$product', `quantity` = '$quantity' 
            WHERE `id` = '$id'";

    if ($connect->query($sql)) {
        header('Location: cadastrarProduto.php', true, 301);
        exit();
    } else {
        echo "Erro ao atualizar: " . $connect->error;
    }

    $connect->close();
}
?>
