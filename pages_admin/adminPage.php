<?php
  //inicia a seção
  session_start();
  //print_r($_SESSION);
  /*if((!isset($_SESSION['matricula']) == true ) and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['matricula']);
      header('Location: login.html');
  }
  $logado = $_SESSION['matricula'];
  $matricula = $_SESSION['matricula'];*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="adminPage.css">
	<title>Document</title>
</head>

<body>

	<header>
		<div class="logo">
			<img src="../images/logo_pequena.png" alt="Logo">
			<div class="column">
				<div class="titulo">Núcleo de Operações Aéreas e Resgate</div>
				<div class="sub">Assoc. de Serviços Sociais</div>
				<div class="sub2">Voluntários</div>
			</div>
		</div>
	</header>

	<nav class="nav-lateral">
		
		<ul>
			<li class="item-menu">
				<a href="#">Cadastrar Usuário</a>
			</li>
			<li class="item-menu">
				<a href="#">Lista de Usuário</a>
			</li>
			<li class="item-menu">
				<a href="#">Histórico de Ocorrências</a>
			</li>
		</ul>

	</nav>

</body>

<script>
    function Cadastrar(){
      //A variável "dados" conterá todos os campos do <form id="form1">
      var dados = $('#form1').serialize(); // TODOS os campos do form devem ter name

      $.ajax({
        type: "POST",
        url: "../../php/inserts/inserir_usuario.php",
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
  <form method="post" action="../../php/inserts/inserir_usuario.php" id="form1">
    Matricula: 
    <input type="number" id="matricula" name="matricula">
    Nome:
    <input type="text" id="nome" name="nome">
    Senha:
    <input type="text" id="senha" name="senha">
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
      <option value="1">Socorrista</option>
      <option value="2">Motorista</option>
    </select>
    <br>
    <input type="button" name="enviar" value="Enviar" onclick="Cadastrar();" />
  </form>


</html>