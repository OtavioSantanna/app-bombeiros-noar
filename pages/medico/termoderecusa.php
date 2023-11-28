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
    <title>Termo de recusa</title>
    <link rel="stylesheet" href="../../css/socorrista/termo.css">
</head>

<body>
    <div class="header">
    <div class="envio_div" id="menuFotoDiv">
            <div class="envio center">
                <a href="sair.php" class="sair_href center">SAIR  <ion-icon name="exit" style="margin-left: 5px;"></ion-icon></a>
                <button type="button" class="cancelar_button" onclick="abrirMenuFoto()">CANCELAR</button>
            </div>
        </div>
        <div class="pic_menu_sq">
            <a class="menu_bt center" href="main.html">
                <ion-icon name="home" style="font-size: 50px; color: white;"></ion-icon>
            </a>
        </div>
        <div class="logo_sq center">
            <img src="../img/logo_pequena.png" class="logo">
        </div>
        <div class="pic_menu_sq">
            <div class="pic" onclick="abrirMenuFoto()"></div>
        </div>


    </div>
    <div class="title_sq center">
        <p class="title">TERMO DE RECUSA DE ATENDIMENTO E/OU TRANSPORTE</p>
    </div>

    <div class="forms center">
        <div class="form center" style="background-color:transparent;">
            <button class="tt_row center">
                <div></div>
                <div>
                    <div class="check center" id="jabuti_form16">✔</div>
                </div>
            </button>
            
            <div class="bloco" id="16" onclick="blocoClicado(event)" style="display:flex; border: none;">
                    <form id="form11" method="post" action="../../php/inserts/termoRecusa_salvar.php" enctype="multipart/form-data">
                        <label for="imagemInput" class="input_imagem_obj_label">
                            <p class="img_obj_tt" id="tt_add">ADICIONAR IMAGEM +</p>
                            <div id="imagemDiv" class="img_div_obj center">
                                <img id="imagemExibida" src="" alt="Imagem Exibida" class="imagem_obj">
                            </div>
    
                        </label>
                        <input type="file" id="imagemInput" name="imagem" accept="image/*" class="input_obj_none"
                            onchange="verificarPreenchimento('form16')">
                        <p class="img_obj_remover center" id="button_remover"
                            onclick="removerImagemObj();  verificarPreenchimento('form16')">REMOVER IMAGEM ✖</p>
                        <button type="submit" name="enviar">Enviar</button>
                    </form>
            </div>
    </div>

</body>
<script src="../../script/form.js"></script>
<script src="../../script/imagemInput.js"></script>

</html>