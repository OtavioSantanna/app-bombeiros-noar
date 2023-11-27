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
    <link rel="stylesheet" href="searchUsuario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title>Cadastrar Usuário</title>
</head>
<body>

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
                <a href="searchUsuario.php">Histórico de Ocorrências</a>
            </li>
        </ul>
    </nav>


    <div class="main">
        <div class="form">
            <h2 class="form-title">Pesquisar Usuário</h2>
            <form class="form" method="post" action="../../php/inserts/inserir_usuario.php" id="form1">
                <div class="form-linha1">
                    <div class="input-container">
                        <label for="info">Insira o dado aqui:</label>
                        <input type="text" id="info" name="info">
                    </div>
                    <input type="submit" class="button" name="pesquisar" value="Pesquisar" onclick="#();"/>
                </div>
            </form>
        </div>
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
        </tr>
        </thead>
        <tbody>
        
            <tr>
                <!-- <td> <?php echo $item[2]; ?> </td> -->
                <td> </td>
                <td> </td>
                <td> </td>
                <th class="th-button"><input class="button-table" type="button" value="Excluir"></th>
                <th class="th-button"><input class="button-table" type="button" value="Editar"></th>
            </tr>
        
        </tbody>
    </table>
    </div>
</main>
</body>
</html>