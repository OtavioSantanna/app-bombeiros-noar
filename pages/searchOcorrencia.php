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
    <link rel="stylesheet" href="../css/searchOcorrencia.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title>Cadastrar Usuário</title>
</head>
<body>

<header>
    <div class="logo">
        <img src="../public/logo_pequena.png" alt="Logo">
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
                <a href="searchUsuario.php">Histórico de Ocorrências</a>
            </li>
        </ul>
    </nav>


    <div class="main">
        <div class="form">
            <h2 class="form-title">Pesquisar Ocorrência</h2>
            <form class="form" method="post" action="../../php/inserts/inserir_usuario.php" id="form1">
                <div class="form-linha1">
                    <div class="input-container">
                        <input type="text" id="info" name="info" placeholder="Insira os dados aqui...">
                    </div>
                    <select id="filtro">
      <option value="" selected disabled>Selecione...</option>
      <option value="id_ocorrencia">ID da Ocorrência</option>
      <option value="nome_paciente">Nome do Paciente</option>
      <option value="nome_hospital">Nome do Hospital</option>
      <!-- Adicione outras opções conforme necessário -->
                    <input type="submit" class="button" name="pesquisar" value="Pesquisar" onclick="#();"/>
                </div>
            </form>

            
        </div>

            <div class="card">
                <div class="text">
                    <div class="nivel">Nível: 3</div>
                    <br>
                    <div class="resto">
                        <div class="sangue">Tipo Sanguíneo: B+</div>
                        <br>
                        <div class="status">Status: Estável</div>
                        <br>
                        <div class="tipo-acidente">Tipo do acidente: Acidente de trabalho</div>
                        <br>
                        <div class="atendimento">Atendimento no local: Controle de hemorragia</div>
                    </div>
                </div>
                <img src="../public/menos-linha-reta-horizontal.png" alt="Linha" width="300px" height="15px">
                <div class="ver">Ver ficha completa</div>
            </div>
    </div>
</main>
</body>
</html>