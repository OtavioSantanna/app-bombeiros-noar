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
<title>Alterar Dados</title>
<link rel="stylesheet" href="../../css/socorrista/historico.css">
</head>

<body style="width: 100%;">
  <div class="shadow center" id="menu">
  </div>

  <div></div>
</div>
<div class="header">
<div class="envio_div" id="menuFotoDiv">
            <div class="envio center">
                <a href="sair.php" class="sair_href center">SAIR  <ion-icon name="exit" style="margin-left: 5px;"></ion-icon></a>
                <button type="button" class="cancelar_button" onclick="abrirMenuFoto()">CANCELAR</button>
            </div>
        </div>
  <div class="pic_menu_sq" onclick="menu()">
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
      <?php
      include("../../php/conecta.php");
      
      $id_ocorrencia = $_GET['id_ocorrencia'];
      $comando = $pdo->prepare("SELECT * FROM info_ocorrencia WHERE id_usuario = $matricula AND id_ocorrencia = $id_ocorrencia");
      $resutado = $comando->execute();
  
      if($resutado) {
        while($row = $comando->fetch(PDO::FETCH_ASSOC)){
          $causas = array();
  
          $id_ocorrencia = $row['id_ocorrencia'];
          $cabecalhoArray = json_decode($row['cabecalho'], true);
          $pre_hospitalarArray = json_decode($row['pre_hospitalar'], true);
          $glasgowArray = json_decode($row['glasgow'], true);
          $sinais_vitaisArray = json_decode($row['sinais_vitais'], true);
          $problemas_suspeitosArray = json_decode($row['problemas_suspeitos'], true);
          $sinais_sintomasArray = json_decode($row['sinais_sintomas'], true);
          $conducaoArray = json_decode($row['conducao'], true);
          $decisao_transArray = json_decode($row['decisao_trans'], true);
          $vitima_eraArray = json_decode($row['vitima_era'], true);        
          $ocorrenciaArray = json_decode($row['ocorrencia'], true);
  
          //Datos Cabecalho
          $data = $cabecalhoArray[0];
          $sexo = $cabecalhoArray[1];
          $hospital = $cabecalhoArray[2];
          $nome = $cabecalhoArray[3];
          $idade = $cabecalhoArray[4];
          $local = $cabecalhoArray[9];
  
          //Dados Pré-hospitalar
  
            if (is_array($pre_hospitalarArray)) {
              // Loop através de todos os elementos do array
              foreach ($pre_hospitalarArray as $index => $causa) {
                // Adicione cada causa ao array de causas
                $causas[] = $causa;
              }
            }

            if(is_array($glasgowArray)) {
              foreach($glasgowArray as $index => $glasgow) {
                $glasgows[] = $glasgow;
              }
            }

            $sinal1 = $sinais_vitaisArray[0];
            $sinal2 = $sinais_vitaisArray[1];
            $sinal3 = $sinais_vitaisArray[2];
            $sinal4 = $sinais_vitaisArray[3];
            $sinal5 = $sinais_vitaisArray[4];
            $sinal6 = $sinais_vitaisArray[5];
            $sinal7 = $sinais_vitaisArray[6];

            $estado_paciente = $decisao_transArray[0];
            $motorista = $decisao_transArray[1];
            $socorrista1 = $decisao_transArray[2];
            $socorrista2 = $decisao_transArray[3];
            $socorrista3 = $decisao_transArray[4];
            $demandante = $decisao_transArray[5];
            $equipe = $decisao_transArray[6];
            
          echo("
            <div class='bloco_ocorrencia' style='margin-top=80px;'>
            <p class='form_tt2'>EDITAR DADOS</p>
            <div class='edit_dados'>
                <p class='text_content'>Data: $data</p>
                <a href='editardata.php?id_ocorrencia=$id_ocorrencia' class='caneta_azul_sq center'><img src='../../img/pencil.png' onclick='abrirPagina()' style='width: 30px;'></a>
            </div>
            <div class='edit_dados'>
                <p class='text_content'>Nome: $nome</p>
                <a href='editarnome.php?id_ocorrencia=$id_ocorrencia' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
            <div class='edit_dados'>
                <p class='text_content'>Idade: $idade</p>
                <a href='editarIdade.php?id_ocorrencia=$id_ocorrencia' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
            <div class='edit_dados'>
                <p class='text_content'>Local: $local</p>
                <a href='editarlocal.php?id_ocorrencia=$id_ocorrencia' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
            <div class='edit_dados'>
                <p class='text_content'>HOSPITAL: $hospital</p>
                <a href='editarHospital.php?id_ocorrencia=$id_ocorrencia' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
            <div class='edit_dados'>
                <p class='text_content'>Pré Hospitalar:</p>
            </div>
            ");
          
            foreach ($causas as $index => $causa) {
              echo ("
                <div class='edit_dados'>
                  <ul class='text_content'> $causa</ul>
                  <a href='editarCausa.php?id_ocorrencia=$id_ocorrencia&dado_antigo=$causa' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
                </div>
              ");
            }
            echo("
            <div class='edit_dados'>
                <p class='text_content'>Glasgow: </p>
            </div>
            <div class='edit_dados'>
              <p class='text_content'>Escala de glasgow: $glasgow</p>
              <a href='editarGlasgow.php?id_ocorrencia=$id_ocorrencia' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
          ");
          echo ("
            <div class='edit_dados'>
              <p class='text_content'>-Decisão de transporte: </p>
            </div>
            <div class='edit_dados'>
              <p class='text_content'>Estado paciente: $estado_paciente</p>
              <a href='editarEstadoPaciente.php?id_ocorrencia=$id_ocorrencia' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
            <div class='edit_dados'>
              <p class='text_content'>Motorista: $motorista</p>
              <a href='editarMotorista.php?id_ocorrencia=$id_ocorrencia' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
            <div class='edit_dados'>
              <p class='text_content'>Socorrista 1: $socorrista1</p>
              <a href='editardado.html' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
            <div class='edit_dados'>
              <p class='text_content'>Socorrista 2: $socorrista2</p>
              <a href='editardado.html' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
            <div class='edit_dados'>
              <p class='text_content'>Socorrista 3: $socorrista3</p>
              <a href='editardado.html' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
            <div class='edit_dados'>
              <p class='text_content'>Demandante: $demandante</p>
              <a href='editardado.html' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
            <div class='edit_dados'>
              <p class='text_content'>Equipe: $equipe</p>
              <a href='editardado.html' class='caneta_azul_sq center'><img src='../../img/pencil.png' style='width: 30px;'></a>
            </div>
          ");
            
            // foreach ($causas as $index => $causa) {
            //   echo ("
            //   <ul class='text_content'> $causa</ul>
            //   ");
            // }
  
          // ["2023-11-24","feminino","Sirio Libanes","Angela","25","93589824034","3835012144","Marcos","34","Itapoa"]
        }
      }
    ?>
    </div>
    <div class="container center">
        <a href="historico.php" class="botao_cinza center">VOLTAR</a>
    </div>

</div>

</body>
<script>
function abrirPágina(){
    window.open('editardado.html', '_blank');
}
</script>
<script src="../script/imagemInput.js"></script>
<script src="../../script/form.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</html>