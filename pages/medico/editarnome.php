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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Ocorrência</title>
    <link rel="stylesheet" href="../../css/socorrista/historico.css">
</head>

<body style="width: 100%; height: 100vh;">
    <div class="shadow center" id="menu">
        <div class="menu" >

                <p class="form_tt">FOLHA DE OCORRÊNCIA</p>

                <p class="form_tt">FOLHA DE OCORRÊNCIA</p>

                <p class="form_tt">FOLHA DE OCORRÊNCIA</p>

        </div>
        <div></div>
    </div>
    <div class="header">
        <div class="pic_menu_sq">
            <a class="menu_bt center" href="main.html">
                <ion-icon name="home" style="font-size: 50px; color: white;"></ion-icon>
            </a>
        </div>
        <div class="logo_sq center">
            <img src="../../img/logo_pequena.png" class="logo">
        </div>
        <div class="pic_menu_sq">
            <div class="pic"></div>
        </div>


    </div>
    <form method="post" action="../../php/requests/editarNome.php">
        <div class="title_sq center">
            <p class="titulo">DADO A SER ALTERADO:</p>
        </div>
        <div class="dado center">
            <p>nome</p>
        </div>
        <?php
            include("../../php/conecta.php");

            $id_ocorrencia = $_GET['id_ocorrencia'];
        echo("
            <div class='sasquat'>
            <div class='title_sq center'>
                <p class='titulo2'>DADO QUE SUBSTITUIRÁ:</p>
                <input type='name' name='novo_nome' class='input_edicao' placeholder='NOVO DADO...'>
                <input type='hidden' name='id_ocorrencia' value='$id_ocorrencia'>
            </div>
            <div class='container center'>
                <p class='aviso_certeza'>AVISO: TENHA CERTEZA DA ALTERAÇÃO!</p>
                <a href='edicaohistorico.php' class='botao_vermelho center'>CANCELAR</a>
                <button type='submit' class='botao_verde center'>CONFIRMAR ALTERAÇÃO</button>
                
            </div>

        </div>
        ");
        ?>
    </form>

</body>
<script src="../script/imagemInput.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</html>