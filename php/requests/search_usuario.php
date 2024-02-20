<?php
  include('../conecta.php');

  $nome = $_POST["info"];

  $comando = $pdo->prepare("SELECT * from usuario WHERE nome = $nome");
  $resutado = $comando->execute();
?>