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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/socorrista/cadastro.css">
  <title>Inserir usuario</title>
</head>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<body>
  <script>
    function Cadastrar(){
      //A variável "dados" conterá todos os campos do <form id="form1">
      var dados = $('#form1').serialize(); // TODOS os campos do form devem ter name

      $.ajax({
        type: "POST",
        url: "../../php/inserts/insert-usuario.php",
        data: dados,
        dataType: 'json',

        success: function(meu_json)
        {
          var nome = meu_json;
          console.log(nome);
        }
      })
    }
  </script>
  <form method="post" id="form1">
    Matricula: 
    <input type="number" id="matricula" name="matricula">
    Nome:
    <input type="text" id="nome" name="nome">
    Senha:
    <input type="text" id="senha" name="senha">
    CPF:
    <input type="number" id="cpf" name="cpf">
    CEP:
    <input type="number" id="cep" name="cep">
    Numero da Casa:
    <input type="number" id="num_casa" name="num_casa">
    Email:
    <input type="text" id="email" name="email">
    Idade:
    <input type="number" id="idade" name="idade">
    Telefone:
    <input type="number" id="telefone" name="telefone">
    Cargo:
    <select name="cargo" id="cargo">
      <?php
        include("../../php/conecta.php");
        $comando = $pdo->prepare("SELECT * from cargo");     
        $resultado = $comando->execute();

        while($linhas = $comando->fetch()) {
          $id_cargo = $linhas["id_cargo"];
          $cargo = $linhas["nome_cargo"];

          echo("
          <option value='$id_cargo'>$cargo</option>
          ");
        }
      ?>
    </select>
    <br>
    <input type="button" name="enviar" value="Enviar" onclick="Cadastrar();" />
  </form>
</body>
</html>