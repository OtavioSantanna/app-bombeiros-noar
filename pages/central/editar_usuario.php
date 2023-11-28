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
<?php
include('../../php/conecta.php');
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $info = $_POST["info"];

  // Consulta para buscar usuários com base no nome
  $sql = $pdo->prepare("SELECT * FROM usuario WHERE nome LIKE :info");
  $sql->bindValue(':info', "%$info%", PDO::PARAM_STR);
  $sql->execute();

  // Obtém os resultados da consulta
  $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
  // Se não houver uma pesquisa, retorna todos os usuários
  $sql = $pdo->prepare("SELECT * FROM usuario");
  $sql->execute();

  // Obtém os resultados da consulta
  $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/central/searchUsuario.css">
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
        <form class="form" method="post" id="form1">
          <div class="form-linha1">
            <div class="input-container">
              <label for="info">Insira o dado aqui:</label>
              <input type="text" id="info" name="info">
            </div>
            <input type="submit" class="button" name="pesquisar" value="Pesquisar"/>
          </div>
        </form>
      </div>
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Loop para exibir resultados
            if (isset($resultados)) {
              foreach ($resultados as $usuario) {
                if ($usuario['matricula'] == 1) {
                  continue; // Ignora o NOAR
                }
                echo "<tr>";
                echo "<td>" . $usuario['nome'] . "</td>";
                echo "<td>" . $usuario['matricula'] . "</td>";
                echo "<td>" . $usuario['cpf'] . "</td>";
                echo "<td>" . $usuario['idade'] . "</td>";
                echo "<td>" . $usuario['email'] . "</td>";
                echo "<td>" . $usuario['admin'] . "</td>";
                echo "<td>" . $usuario['cep'] . "</td>";
                echo "<td>" . $usuario['num_casa'] . "</td>";
                echo "<td>" . $usuario['telefone'] . "</td>";
                echo "<td>" . $usuario['cargo'] . "</td>";
                echo "<td class='th-button'>
                  <a href='../../php/requests/excluir_user.php?id_usuario=" . $usuario['matricula'] . "' class='button-table'>Excluir</a>
                  <a href='#' class='button-table'>Editar</a>
                </td>";
                echo "</tr>";
              }
            }
          ?>

        </tbody>
      </table>
    </div>
  </main>
</body>

</html>