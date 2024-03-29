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
    <title>Início</title>
    <link rel="stylesheet" href="../../css/socorrista/folhaoutermo.css">
</head>

<body>
    <div class="shadow center" id="menu">
        <div class="menu" >

                <p class="form_tt">FOLHA DE OCORRÊNCIA</p>

                <p class="form_tt">FOLHA DE OCORRÊNCIA</p>

                <p class="form_tt">FOLHA DE OCORRÊNCIA</p>

        </div>
        <div></div>
    </div>
    <div class="header">
    <div class="envio_div" id="menuFotoDiv">
            <div class="envio center">
                <a href="../../php/requests/sair_medico.php" class="sair_href center">SAIR  <ion-icon name="exit" style="margin-left: 5px;"></ion-icon></a>
                <button type="button" class="cancelar_button" onclick="abrirMenuFoto()">CANCELAR</button>
            </div>
        </div>
        <div class="pic_menu_sq" >
            <a class="menu_bt center" href="main.php">
                <ion-icon name="home" style="font-size: 50px; color: white;"></ion-icon>
            </a>
        </div>
        <div class="logo_sq center">
            <img src="../../img/logo_pequena.png" class="logo">
        </div>
        <div class="pic_menu_sq">
            <div class="pic" onclick="abrirMenuFoto()"></div>
        </div>


    </div>
    <div class="forms center">

        <a class="form center" href="folhaoutermo.php">
            <p class="form_tt">NOVA OCORRÊNCIA</p><img src="../../img/plus.png" style="width: 20px;">
        </a>
        <a class="form center" href="historico.php">
            <p class="form_tt">HISTÓRICO DE OCORRÊNCIA</p><img src="../../img/RELOGIO.png" style="width: 20px;">
        </a>

    </div>

</body>
<script>
    function menu(){
        var menu  = document.getElementById("menu")
    if (menu.style.display === "flex") {
        menu.style.display = "none";
    } 
    else {
        menu.style.display = "flex";
    }
    }
</script>
<script src="../script/imagemInput.js"></script>
<script src="../../script/form.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</html>