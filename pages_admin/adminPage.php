<?php
  //inicia a seção
  session_start();
  //print_r($_SESSION);
  if((!isset($_SESSION['matricula']) == true ) and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['matricula']);
      header('Location: login.html');
  }
  $logado = $_SESSION['matricula'];
  $matricula = $_SESSION['matricula'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Inicial</title>
</head>
<body>
  <?php
    print_r($matricula)
  ?>
</body>
</html>