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
    <title>Ocorrência</title>
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
        <div class="pic_menu_sq" onclick="menu()">
            <div class="menu_bt">
                <div class="menu_dash"></div>
                <div class="menu_dash"></div>
                <div class="menu_dash"></div>
            </div>
        </div>
        <div class="logo_sq center">
            <img src="../img/logo_pequena.png" class="logo">
        </div>
        <div class="pic_menu_sq">
            <div class="pic"></div>
        </div>


    </div>
    <div class="forms center">

        <a class="form0 center" href="termoderecusa.php">
            <p class="form_tt">TERMO DE RECUSA</p>
        </a>
        <a class="form0 center" href="form.php">
            <p class="form_tt">FOLHA DE OCORRÊNCIA</p>
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

</html>