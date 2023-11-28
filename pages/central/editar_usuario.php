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
          <a href="historico_ocorrencias.php">Histórico de Ocorrências</a>
        </li>
        <li class="item-menu">
        <a href="../../php/requests/sair_central.php">Sair do usuario</a>
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
            <th>Dado atual</th>
            <th>Dado Novo</th>
            <th>Salvar</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include('../../php/conecta.php');

            $id_usuario = $_GET['id_usuario'];
            $comando = $pdo->prepare("SELECT usuario.*, info_usuario.*, cargo.nome_cargo
            FROM usuario
            INNER JOIN info_usuario ON usuario.matricula = info_usuario.matricula
            INNER JOIN cargo ON info_usuario.cargo = cargo.id_cargo
            WHERE usuario.matricula = $id_usuario;
            ");
            $comando->execute();

            while ($linhas = $comando->fetch()) {
              $matricula = $linhas['matricula'];
              $nome = $linhas['nome'];
              $cpf = $linhas['cpf'];
              $idade = $linhas['idade'];
              $email = $linhas['email'];
              $telefone = $linhas['telefone'];
              $cep = $linhas['cep'];
              $nome_cargo = $linhas['nome_cargo'];
              $cargo = $linhas['cargo'];

              echo ("
              <form method='post' action='../../php/inserts/mudarnome.php'>
                <tr>
                    <td>
                        <p>Nome: $nome</p>
                    </td>
                    <td>
                        <input type='text' name='novo_nome'>
                    </td>
                    <td>
                        <input type='hidden' name='matricula' value='$matricula'>
                        <input type='submit' name='salvar'>
                    </td>
                </tr>
              </form>
              <form method='post' action='../../php/inserts/mudaridade.php'>
              <tr>
                  <td>
                      <p>Idade: $idade</p>
                  </td>
                  <td>
                      <input type='number' name='nova_idade'>
                  </td>
                  <td>
                      <input type='hidden' name='matricula' value='$matricula'>
                      <input type='submit' name='salvar'>
                  </td>
              </tr>
            </form>
            <form method='post' action='../../php/inserts/mudarcpf.php'>
            <tr>
                <td>
                    <p>CPF: $cpf</p>
                </td>
                <td>
                    <input type='text' name='novo_cpf'>
                </td>
                <td>
                    <input type='hidden' name='matricula' value='$matricula'>
                    <input type='submit' name='salvar'>
                </td>
            </tr>
          </form>
          <form method='post' action='../../php/inserts/mudaremail.php'>
          <tr>
              <td>
                  <p>Email: $email</p>
              </td>
              <td>
                  <input type='text' name='novo_email'>
              </td>
              <td>
                  <input type='hidden' name='matricula' value='$matricula'>
                  <input type='submit' name='salvar'>
              </td>
          </tr>
        </form>
        <form method='post' action='../../php/inserts/mudartelefone.php'>
        <tr>
            <td>
                <p>Email: $telefone</p>
            </td>
            <td>
                <input type='text' name='novo_telefone'>
            </td>
            <td>
                <input type='hidden' name='matricula' value='$matricula'>
                <input type='submit' name='salvar'>
            </td>
        </tr>
      </form>
              ");
            }
          ?>

        </tbody>
      </table>
    </div>
  </main>
</body>

</html>