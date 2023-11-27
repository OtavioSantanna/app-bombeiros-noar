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
  <link rel="stylesheet" type="text/css" href="../../css/central/adminPage.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  <title>Pesquisar Ocorrência</title>
</head>

<body>
  <script>
    function Cadastrar() {
      //A variável "dados" conterá todos os campos do <form id="form1">
      var dados = $('#form1').serialize(); // TODOS os campos do form devem ter name

      $.ajax({
        type: "POST",
        url: "../../php/inserts/insert-usuario.php",
        data: dados,
        dataType: 'json',

        success: function(meu_json) {
          var nome = meu_json;
          console.log(nome);
        }
      })
    }
  </script>

  <header>
    <div class="logo">
      <img src="../images/logo_pequena.png" alt="Logo">
      <div class="column">
        <div class="titulo-header">Núcleo de Operações Aéreas e Resgate</div>
        <div class="sub">Assoc. de Serviços Sociais</div>
        <div class="sub">Voluntários</div>
      </div>
    </div>
  </header>

<main>
  <nav class="nav-lateral">
    <ul class="nav-div">
      <li class="item-menu">
        <a href="adminPage.php">Cadastrar Usuário</a>
      </li>
      <li class="item-menu">
        <a href="searchUsuario.php">Pesquisa de Usuário</a>
      </li>
      <li class="item-menu">
        <a href="#">Histórico de Ocorrências</a>
      </li>
    </ul>
  </nav>
  <div class="main">
    <div class="form">
      <h2 class="form-title">Cadastrar Usuário</h2>
      <form class="form" method="post" id="form1">
        <div class="form-linha1">
          <div class="input-container">
            <label for="matricula">Matrícula:</label>
            <input type="number" id="matricula" name="matricula">
          </div>
          <div class="input-container">
            <label for="nome">Nome do Usuário:</label>
            <input type="text" id="nome" name="nome">
          </div>
          <div class="input-container">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf">
          </div>
        </div>
        <div class="form-linha1">
          <div class="input-container">
            <label for="idade">Idade:</label>
            <input type="text" id="idade" name="idade">
          </div>
          <div class="input-container">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
          </div>
          <div class="input-container">
            <label for="admin">Admin:</label>
            <input type="text" id="admin" name="admin">
          </div>
        </div>
        <div class="form-linha1">
          <div class="input-container">
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep">
          </div>
          <div class="input-container">
            <label for="num_casa">Número da Casa:</label>
            <input type="text" id="num_casa" name="num_casa">
          </div>
          <div class="input-container">
            <label for="telefone">Telefone:</label>
            <input type="text" id="teleone" name="telefone">
          </div>
        </div>
        <div class="form-linha1">
          <div class="input-container">
            <label for="senha">Senha:</label>
            <input type="text" id="senha" name="senha">
          </div>
          <div class="input-container">
            <label for="cargo">Cargo:</label>
            <select name="cargo" id="cargo">
              <?php
                include("../../");
                $comando = $pdo->prepare("SELECT * from cargo");
                $resultado = $comando->execute();

                while ($linhas = $comando->fetch()) {
                  $id_cargo = $linhas["id_cargo"];
                  $cargo = $linhas["nome_cargo"];

                  echo ("
                  <option value='$id_cargo'>$cargo</option>
                  ");
                }
              ?>
            </select>
          </div>
        </div>
        <div class="form-linha1">
          <div class="enviar"><input type="button" name="enviar" value="Enviar" onclick="Cadastrar();" /></div>
        </div>
      </div>
    </form>
  </div>
  </div>
</main>


</body>

</html>