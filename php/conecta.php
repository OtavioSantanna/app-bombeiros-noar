<?php
  // DEFININDO O FUSO HORÁRIO:
  date_default_timezone_set('America/Sao_Paulo');
  
  // Conexão com o banco de dados utilzando PDO para consultas preparadas:
  try
  {
      $pdo = new PDO("mysql:dbname=bombeiros-johm;host=localhost;charset=utf8","root","");
  }
  catch(PDOException $erro)
  {
      echo("ERRO NA CONEXÃO: <br>".$erro->getMessage());
  }
?>