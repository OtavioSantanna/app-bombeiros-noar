<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alterar Dados</title>
<link rel="stylesheet" href="../css/historico.css">
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
    <?php

    ?>
    <div class="bloco_ocorrencia">
        <p class="form_tt2">EDITAR DADOS</p>
        <div class="edit_dados">
            <p class="text_content">DATA</p>
            <a href="editardado.html" class="caneta_azul_sq center"><img src="../img/pencil.png" onclick="abrirPagina()" style="width: 30px;"></a>
        </div>
        <div class="edit_dados">
            <p class="text_content">NOME</p>
            <a href="editardado.html" class="caneta_azul_sq center"><img src="../img/pencil.png" style="width: 30px;"></a>
        </div>
        <div class="edit_dados">
            <p class="text_content">IDADE</p>
            <a href="editardado.html" class="caneta_azul_sq center"><img src="../img/pencil.png" style="width: 30px;"></a>
        </div>
        <div class="edit_dados">
            <p class="text_content">ENDEREÇO</p>
            <a href="editardado.html" class="caneta_azul_sq center"><img src="../img/pencil.png" style="width: 30px;"></a>
        </div>
        <div class="edit_dados">
            <p class="text_content">HOSPITAL</p>
            <a href="editardado.html" class="caneta_azul_sq center"><img src="../img/pencil.png" style="width: 30px;"></a>
        </div>


    </div>
    <div class="container center">
        <a href="historico.html" class="botao_cinza center">VOLTAR</a>
    </div>

</div>

</body>
<script>
function abrirPágina(){
    window.open('editardado.html', '_blank');
}
</script>
<script src="../script/imagemInput.js"></script>

</html>