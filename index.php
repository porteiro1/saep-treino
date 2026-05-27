<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>saep</title>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
   <form method="post" action="verificaLogin.php">
      <label for="email">Email: </label>
      <input type="email" name="email" placeholder="insert email" required>
      <br>
      <label for="password">Password: </label>
      <input type="password" name="password" placeholder="insert password" required>
      <br>
      <?php
      session_start();
      if($_SESSION['login_valido'] == false){
      echo "<p color='red'> email ou senha incorreta </p>";
      }
      ?>
      <input type="submit"  value="Submit">
   </form>

    <a href="cadastrarGerente.html">Cadastrar Gerente</a>
  </body>
</html>
<?php
session_start();
$_SESSION['login_valido'] = true;
?>
