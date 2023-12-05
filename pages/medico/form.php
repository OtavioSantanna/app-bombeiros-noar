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
<title>Folha de Atendimento</title>
<link rel="stylesheet" href="../../css/socorrista/form.css">
</head>
<body>
<div class="header">
<div class="envio_div" id="envioDiv">
            <div class="envio center">
                <p class="envio_p">OCORRÊNCIA ENVIADA COM SUCESSO!</p>
                <p class="envio_p2">CLIQUE EM "OK" PARA VOLTAR PARA A PÁGINA INICIAL.</p>
                <a href="main.php" class="envio_ok_button center">OK</a>
            </div>
        </div>
        
        <div class="envio_div" id="menuFotoDiv">
            <div class="envio center">
                <a href="sair.php" class="sair_href center">SAIR  <ion-icon name="exit" style="margin-left: 5px;"></ion-icon></a>
                <button type="button" class="cancelar_button" onclick="abrirMenuFoto()">CANCELAR</button>
            </div>
        </div>
  <div class="pic_menu_sq">
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
<div class="title_sq center">
    <p class="title">FOLHA DE ATENDIMENTO</p>
</div>
  <form id="form1" method="post" action="../../php/inserts/enviarInfoPaciente.php">
    <input type="hidden" name="matricula" value="<?php echo $matricula?>">
    <div class="form center" onclick="abrirBloco(1)">
      <button type="button" class="tt_row center">
        <div></div>
        <p class="form_tt">CABEÇALHO</p>
        <div>
          <div class="check center" id="jabuti_form1">✔</div>
        </div>
      </button>
      <div class="bloco" id="1" onclick="blocoClicado(event)">
        <!-- <input type="hidden" value="cabecalho" name="coluna"> -->
        <div class="input_data_div">
            DATA:<input type="date" id="input_data" class="input_data" onchange="verificarPreenchimento('form1')" name="brands[]">
        </div>
        <div class="checkbox_div">
              SEXO: <input type="radio" id="radio_m" name="brands[]" value="masculino">M 
              <input type="radio" id="radio_f" name="brands[]" value="feminino">F
        </div>
        <div class="input_div">
              NOME DO HOSPITAL:<input type="text" class="input_text" onchange="verificarPreenchimento('form1')" name="brands[]">
        </div>
        <div class="input_div">
              NOME:<input type="text" class="input_text" onchange="verificarPreenchimento('form1')" name="brands[]">
        </div>
          <div class="input_div">
              IDADE:<input type="number" class="input_number" onchange="verificarPreenchimento('form1')" name="brands[]">
        </div>
        <div class="input_div">
              RG/CPF PACIENTE:<input type="text" class="input_text" onchange="verificarPreenchimento('form1')" name="brands[]">
        </div>
        <div class="input_div">
              FONE:<input type="number" class="input_number" onchange="verificarPreenchimento('form1')" name="brands[]">
        </div>
        <div class="input_div">
              ACOMPANHANTE:<input type="text" class="input_text" onchange="verificarPreenchimento('form1')" name="brands[]">
        </div>
        <div class="input_div">
              IDADE (ACOMPANHANTE):<input type="number" class="input_number" onchange="verificarPreenchimento('form1')" name="brands[]">
        </div>
        <div class="input_div">
              LOCAL DA OCORRÊNCIA:<input type="text" class="input_text" onchange="verificarPreenchimento('form1')" name="brands[]">
        </div>
    </div> 
    </div>
    <div class="form center" onclick="abrirBloco(2)">
    <button type="button" class="tt_row center">
      <div></div>
      <p class="form_tt">TIPO DE OCORRÊNCIA (PRÉ HOSPITALAR)</p>
      <div>
          <div class="check center" id="jabuti_form2">✔</div>
      </div>
      </button>
      <div class="bloco" id="2" onclick="blocoClicado(event)">
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="Causado por animais" name="pre_hospitalar[]">CAUSADO POR ANIMAIS</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="com meio de transporte" name="pre_hospitalar[]">COM MEIO DE TRANSPORTE</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="desmoronamento" name="pre_hospitalar[]" >DESMORONAMENTO / DESLIZAMENTO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="emergencia medica" name="pre_hospitalar[]">EMERGÊNCIA MÉDICA</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="Queda de altura ate 2M" name="pre_hospitalar[]">QUEDA DE ALTURA 2M</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="Queda propria altura" name="pre_hospitalar[]">QUEDA PRÓPRIA ALTURA</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="Queda bicicleta" name="pre_hospitalar[]">QUEDA BICICLETA</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="Queda moto" name="pre_hospitalar[]">QUEDA MOTO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="queda < 2m" name="pre_hospitalar[]">QUEDA NÍVEL &lt;2M</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="Tentativa de suicidio" name="pre_hospitalar[]">TENTATIVA DE SUICÍDIO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="afogamento" name="pre_hospitalar[]">AFOGAMENTO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="agressao" name="pre_hospitalar[]">AGRESSÃO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="atropelamento" name="pre_hospitalar[]">ATROPELAMENTO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="choque eletrico" name="pre_hospitalar[]">CHOQUE ELÉTRICO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="desabamento" name="pre_hospitalar[]">DESABAMENTO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="domestico" name="pre_hospitalar[]">DOMÉSTICO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="esportivo" name="pre_hospitalar[]">ESPORTIVO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="Intoxicacao" name="pre_hospitalar[]">INTOXICAÇÃO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="trabalho" name="pre_hospitalar[]">TRABALHO</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox" onchange="verificarPreenchimento('form2')" value="TRANSFERÊNCIA" name="pre_hospitalar[]">TRANSFERÊNCIA</input>
      </div>
      <div class="checkbox_div">
          <input type="checkbox"></input><input type="text" class="input_text" name="pre_hospitalar[]"></input>
      </div>
    </div>
    </div>
    <!-- <button type="submit" name="salvar">Salvar</button>
    </form> -->
    <div class="form center" onclick="abrirBloco(3)">
      <button type="button" class="tt_row center">
          <div></div>
          <p class="form_tt">AVALIAÇÃO DO PACIENTE (GLASGOW)</p>
          <div>
              <div class="check center" id="jabuti_form3">✔</div>
          </div>
      </button>
      <div class="bloco" id="3" onclick="blocoClicado(event)">
          <p class="gg_tt center" id="ndc">NÍVEL DE CONSCIÊNCIA</p>
          <p class="selec_idade center" id="avisoIdade">INFORME A IDADE APROXIMADA DA VÍTIMA</p>
          <div class="md5a menores" id="menoresd5a">
            <p class="md5a_tt center">MENORES OU IGUAIS 5 ANOS</p>
            <div class="ao">
              <p class="md5a_2_tt center">ABERTURA OCULAR</p>
                <div class="md5a_tp_div">
                  ESPONTÂNEA <div class="c"><input name="glasgow[]" value="Abertura ocular espontanea" type="checkbox" onchange="verificarPreenchimento('form3')"> 4</div>
                </div>
                <div class="md5a_tp_div">
                    COMANDO VERBAL 
                <div class="c"><input type="checkbox" name="glasgow[]" value="Abertura ocular comando verbal" onchange="verificarPreenchimento('form3')"> 3</div>
                </div>
                <div class="md5a_tp_div">
                  ESTÍMULO DOLOROSO <div class="c"><input type="checkbox" name="glasgow[]" value="Abertura ocular estimulo nervoso"
                  onchange="verificarPreenchimento('form3')"> 2</div>
                </div>
                <div class="md5a_tp_div">
                    NENHUMA <div class="c"><input type="checkbox" name="glasgow[]" value="Abertura ocular NENHUMA"
                    onchange="verificarPreenchimento('form3')"> 1</div>
                </div>
                </div>
                <div class="rv">
                    <p class="md5a_2_tt center">RESPOSTA VERBAL</p>
                    <div class="md5a_tp_div">
                        PALAVRAS E FRASES APROPRIADAS <div class="c"><input type="checkbox" name="glasgow[]" value="Palavras apropriadas"
                                onchange="verificarPreenchimento('form3')"> 5</div>
                    </div>
                    <div class="md5a_tp_div">
                        PALAVRAS INAPROPRIADAS <div class="c"><input type="checkbox" name="glasgow[]" value="palavras INAPROPRIADAS"
                                onchange="verificarPreenchimento('form3')"> 4</div>
                    </div>
                    <div class="md5a_tp_div">
                        CHORO PERSISTENTE OU GRITOS <div class="c"><input type="checkbox" name="glasgow[]" value="Choro persistente ou gritos"
                                onchange="verificarPreenchimento('form3')"> 3</div>
                    </div>
                    <div class="md5a_tp_div">
                        SONS INCOMPREENSÍVEIS <div class="c"><input type="checkbox" name="glasgow[]" value="Sons incompreensiveis"
                                onchange="verificarPreenchimento('form3')"> 2</div>
                    </div>
                    <div class="md5a_tp_div">
                        NENHUMA RESPOSTA VERBAL <div class="c"><input type="checkbox" name="glasgow[]" value="nenhuma resposta verbal"
                                onchange="verificarPreenchimento('form3')"> 1</div>
                    </div>
                </div>
                <div class="rm">
                    <p class="md5a_2_tt center">RESPOSTA MOTORA</p>
                    <div class="md5a_tp_div">
                        OBEDECE PRONTAMENTE <div class="c"><input type="checkbox" name="glasgow[]" value="Obedece prontamente"
                                onchange="verificarPreenchimento('form3')"> 5</div>
                    </div>
                    <div class="md5a_tp_div">
                        LOCALIZA DOR OU ESTÍMULO TÁTIL <div class="c"><input type="checkbox" name="glasgow[]" value="Localiza dor ou estimulo tatil"
                                onchange="verificarPreenchimento('form3')"> 5</div>
                    </div>
                    <div class="md5a_tp_div">
                        RETIRADA DO SEGMENTO ESTIMULADO <div class="c"><input type="checkbox" name="glasgow[]" value="Retirada do segmento estimulo"
                                onchange="verificarPreenchimento('form3')"> 4</div>
                    </div>
                    <div class="md5a_tp_div">
                        FLEXÃO ANORMAL (DECORTICAÇÃO) <div class="c"><input type="checkbox" name="glasgow[]" value="Flexxo anormal"
                                onchange="verificarPreenchimento('form3')"> 3</div>
                    </div>
                    <div class="md5a_tp_div">
                        EXTENSÃO ANORMAL (DECEREBRAÇÃO) <div class="c"><input type="checkbox" name="glasgow[]" value="Extensxo anormal"
                                onchange="verificarPreenchimento('form3')"> 2</div>
                    </div>
                    <div class="md5a_tp_div">
                        AUSÊNCIA (PARALISIA FLÁCIDA HIPOTÔNIA)<div class="c"><input type="checkbox" name="glasgow[]" value="Ausencia"
                        onchange="verificarPreenchimento('form3')"> 3</div>
                    </div>
                </div>
              </div>
              <div class="md5a maiores" id="maioresd5a">
                  <p class="md5a_tt center">MAIORES DE 5 ANOS</p>
                  <div class="ao">
                      <p class="md5a_2_tt center">ABERTURA OCULAR</p>
                      <div class="md5a_tp_div">
                          ESPONTÂNEA <div class="c"><input type="checkbox" name="glasgow[]" value="ESPONTANEA"
                                  onchange="verificarPreenchimento('form3')"> 4</div>
                      </div>
                      <div class="md5a_tp_div">
                          COMANDO VERBAL <div class="c"><input type="checkbox" name="glasgow[]" value="Comando verbal"
                                  onchange="verificarPreenchimento('form3')"> 3</div>
                      </div>
                      <div class="md5a_tp_div">
                          ESTÍMULO DOLOROSO <div class="c"><input type="checkbox" name="glasgow[]" value="Estimulo doloroso"
                                  onchange="verificarPreenchimento('form3')"> 2</div>
                      </div>
                      <div class="md5a_tp_div">
                          NENHUMA <div class="c"><input type="checkbox" name="glasgow[]" value="Nenhuma"
                                  onchange="verificarPreenchimento('form3')"> 1</div>
                      </div>

                  </div>
                  <div class="rv">
                      <p class="md5a_2_tt center">RESPOSTA VERBAL</p>
                      <div class="md5a_tp_div">
                          ORIENTADO <div class="c"><input type="checkbox" name="glasgow[]" value="Orientado"
                                  onchange="verificarPreenchimento('form3')"> 5</div>
                      </div>
                      <div class="md5a_tp_div">
                          CONFUSO <div class="c"><input type="checkbox" name="glasgow[]" value="Confuso"
                                  onchange="verificarPreenchimento('form3')"> 4</div>
                      </div>
                      <div class="md5a_tp_div">
                          PALAVRAS INAPROPRIADAS <div class="c"><input type="checkbox" name="glasgow[]" value="Palavras inapropriadas"
                                  onchange="verificarPreenchimento('form3')"> 3</div>
                      </div>
                      <div class="md5a_tp_div">
                          PALAVRAS INCOMPREENSÍVEIS <div class="c"><input type="checkbox" name="glasgow[]" value="Palavras incompreensiveis"
                                  onchange="verificarPreenchimento('form3')"> 2</div>
                      </div>
                      <div class="md5a_tp_div">
                          NENHUMA <div class="c"><input type="checkbox" name="glasgow[]" value="Nenhuma"
                                  onchange="verificarPreenchimento('form3')"> 1</div>
                      </div>
                  </div>
                  <div class="rm">
                      <p class="md5a_2_tt center">RESPOSTA MOTORA</p>
                      <div class="md5a_tp_div">
                          OBEDECE COMANDOS <div class="c"><input type="checkbox" name="glasgow[]" value="Obedece os comandos"
                                  onchange="verificarPreenchimento('form3')"> 5</div>
                      </div>
                      <div class="md5a_tp_div">
                          LOCALIZA DOR <div class="c"><input type="checkbox" name="glasgow[]" value="Localiza dor"
                                  onchange="verificarPreenchimento('form3')"> 5</div>
                      </div>
                      <div class="md5a_tp_div">
                          MOVIMENTO DE RETIRADA <div class="c"><input type="checkbox" name="glasgow[]" value="Movimento de retirada"
                                  onchange="verificarPreenchimento('form3')"> 4</div>
                      </div>
                      <div class="md5a_tp_div">
                          FLEXÃO ANORMAL <div class="c"><input type="checkbox" name="glasgow[]" value="flexao normal"
                                  onchange="verificarPreenchimento('form3')"> 3</div>
                      </div>
                      <div class="md5a_tp_div">
                          EXTENSÃO ANORMAL <div class="c"><input type="checkbox" name="glasgow[]" value="Extensao normal"
                                  onchange="verificarPreenchimento('form3')"> 2</div>
                      </div>
                      <div class="md5a_tp_div">
                          NENHUMA <div class="c"><input type="checkbox" name="glasgow[]" value="Nenhuma"
                                  onchange="verificarPreenchimento('form3')"> 3</div>
                      </div>
                  </div>
              </div>
              <div class="checkbox_div center" id="gcs">
                  <p>TOTAL (GCS)(3-15)</p><input type="number" name="glasgow[]" class="input_number input_total_gcs" 
                      onchange="verificarPreenchimento('form3')">
              </div>

  
        </div>
      </div>
    <!-- <button type="submit" name="salvar">Salvar</button>
    </form> -->
    <div class="form center" onclick="abrirBloco(4)">
      <button type="button" class="tt_row center">
          <div></div>
          <p class="form_tt">SINAIS VITAIS</p>
          <div>
              <div class="check center" id="jabuti_form4">✔</div>
          </div>
      </button>
      <div class="bloco" id="4" onclick="blocoClicado(event)">
        <div class="checkbox_div center">
            <p>PRESSÃO ARTERIAL:</p>
            <input type="number" name="sinais_vitais[]" class="input_press_artereal input_number" 
                onchange="verificarPreenchimento('form4')">X<input type="number"
                class="input_press_artereal input_number" onchange="verificarPreenchimento('form4')">
            <p>mmHg</p>
        </div>
        <div class="checkbox_div center">
            <p>PULSO:</p><input type="number" name="sinais_vitais[]" class="input_press_artereal input_number" 
                onchange="verificarPreenchimento('form4')">B.C.P.M./RESPIRAÇÃO<input type="number"
                class="input_press_artereal input_number" onchange="verificarPreenchimento('form4')">
            <p>M.R.M.</p>
        </div>
        <div class="checkbox_div center">
            <p>SATURAÇÃO:</p><input type="number" name="sinais_vitais[]" class="input_press_artereal input_number" 
                onchange="verificarPreenchimento('form4')">%
        </div>
        <div class="checkbox_div center">
            HGT<input type="number" name="sinais_vitais[]" class="input_press_artereal input_number" onchange="verificarPreenchimento('form4')">
            <input type="checkbox" name="sinais_vitais[]" value="normal"  onchange="verificarPreenchimento('form4')">NORMAL
            <input type="checkbox" name="sinais_vitais[]" value="anormal" onchange="verificarPreenchimento('form4')">ANORMAL
        </div>
        <div class="checkbox_div center">
            <p>TEMPERATURA:</p>
            <input type="number" name="sinais_vitais[]" class="input_press_artereal input_number"
                onchange="verificarPreenchimento('form4')">
            <p>ºC</p>
        </div>
        <div class="checkbox_div center">
            <p>PERFUSÃO:</p> &gt;2 SEG
            <input type="checkbox" name="sinais_vitais[]" value="< 2 Seg" onchange="verificarPreenchimento('form4')">
            &lt;2SEG 
            <input type="checkbox" name="sinais_vitais[]" value="> 2 Seg" onchange="verificarPreenchimento('form4')">
        </div>
      </div>
    </div>
    <!-- <button type="submit" name="salvar">Salvar</button>
    </form> -->
    <div class="form center" onclick="abrirBloco(5)">
      <button type="button" class="tt_row center">
          <div></div>
          <p class="form_tt">PROBLEMAS ENCONTRADOS SUSPEITOS</p>
          <div>
              <div class="check center" id="jabuti_form5">✔</div>
          </div>
      </button>

      <div class="bloco" id="5" onclick="blocoClicado(event)">
              <div class="checkbox_div2 bgcinza">
                  <input type="checkbox" name="problemas_sus[]" value="Psiquiatrico" onchange="verificarPreenchimento('form5')">PSIQUIÁTRICO</input>
              </div>
              <hr style="border: 1px solid darkblue; width: 100%; margin: 0%; padding: 0%;">
              <div class="checkbox_div2">
                  <input type="checkbox" name="problemas_sus[]" value="respiratorios" onclick="abrirPES(subdivPES1)" onchange="verificarPreenchimento('form5')">RESPIRATÓRIO</input>
                  <div class="subcheckbox_div" id="subdivPES1">
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="DPOC" onchange="verificarPreenchimento('form5')">DPOC</input>
                      </div>
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="Inalacao fumaca" onchange="verificarPreenchimento('form5')">INALAÇÃO FUMAÇA</input>
                      </div>
                  </div>
              </div>
              <hr style="border: 1px solid darkblue; width: 100%; margin: 0%; padding: 0%;">
              <div class="checkbox_div2 bgcinza">
                  <input type="checkbox" name="problemas_sus[]" value="Diabetes" onclick="abrirPES(subdivPES2)" onchange="verificarPreenchimento('form5')">DIABETES</input>
                  <div class="subcheckbox_div" id="subdivPES2">
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="hiperglicemia" onchange="verificarPreenchimento('form5')">HIPERGLICEMIA</input>
                      </div>
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="hipoglicemia" onchange="verificarPreenchimento('form5')">HIPOGLICEMIA</input>
                      </div>
                  </div>
              </div>
              <hr style="border: 1px solid darkblue; width: 100%; margin: 0%; padding: 0%;">
              <div class="checkbox_div2">
                  <input type="checkbox" onchange="verificarPreenchimento('form5')">OUTROS: </input></input><input type="text" name="problemas_sus[]" class="input_text" onchange="verificarPreenchimento('form5')"></input>
              </div>
              <hr style="border: 1px solid darkblue; width: 100%; margin: 0%; padding: 0%;">
              <div class="checkbox_div2 bgcinza">
                  <input name="problemas_sus[]" value="Obstetrico" type="checkbox" onclick="abrirPES(subdivPES3)" onchange="verificarPreenchimento('form5')">OBSTÉTRICO</input>
                  <div class="subcheckbox_div" id="subdivPES3">
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="Parto Emergencial" onchange="verificarPreenchimento('form5')">PARTO EMERGENCIAL</input>
                      </div>
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="Gestante" onchange="verificarPreenchimento('form5')">GESTANTE</input>
                      </div>
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="Hermor, excessiva" onchange="verificarPreenchimento('form5')">HEMOR, EXCESSIVA</input>
                      </div>
                  </div>
              </div>
              <hr style="border: 1px solid darkblue; width: 100%; margin: 0%; padding: 0%;">
              <div class="checkbox_div2">
                  <input type="checkbox" onclick="abrirPES(subdivPES4)" onchange="verificarPreenchimento('form5')">TRANSPORTE</input>
                  <div class="subcheckbox_div" id="subdivPES4">
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="Aereo" onchange="verificarPreenchimento('form5')">AÉREO</input>
                      </div>
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="clinico" onchange="verificarPreenchimento('form5')">CLÍNICO</input>
                      </div>
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="Emergencial" onchange="verificarPreenchimento('form5')">EMERGENCIAL</input>
                      </div>
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="Pos-trauma" onchange="verificarPreenchimento('form5')">PÓS-TRAUMA</input>
                      </div>
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="Samu" onchange="verificarPreenchimento('form5')">SAMU</input>
                      </div>
                      <div class="checkbox_div3">
                          <input type="checkbox" onchange="verificarPreenchimento('form5')">OUTROS:</input></input></input><input type="text" name="problemas_sus[]"
                              class="input_text" style="width: 40%;" onchange="verificarPreenchimento('form5')"></input>
                      </div>
                      <div class="checkbox_div3">
                          <input type="checkbox" name="problemas_sus[]" value="Sem remocao" onchange="verificarPreenchimento('form5')">SEM REMOÇÃO</input>
                      </div>
                  </div>
              </div>
      </div>
      </div>
      <div class="form center" onclick="abrirBloco(6)">
        <button type="button" class="tt_row center">
            <div></div>
            <p class="form_tt">LOCALIZAÇÃO DOS TRAUMAS</p>
            <div>
                <div class="check center">✔</div>
            </div>
        </button>

        <div class="bloco" id="6" onclick="blocoClicado(event)">
<!--
                <p class="selec_idade center" id="avisoIdade2">INFORME A IDADE APROXIMADA DA VÍTIMA</p>
                <div id="container" >
                    <img src="../../img/corpo_maior.png" class="presunto" id="locusTrauma" onclick="addSymbol(event)">
                    <img id="symbol" src="../../img/" alt="Seu símbolo" style="width: 50px;">

                    <img id="symbol1" src="../../img/1.png" alt="Seu símbolo" style="width: 50px;" onclick="imgSelect(symbol1)">
                    <img id="symbol2" src="../../img/2.png" alt="Seu símbolo2" style="width: 50px;" onclick="imgSelect(symbol2)"> 
                    <img id="symbol3" src="../../img/3.png" alt="Seu símbolo3" style="width: 50px;" onclick="imgSelect(symbol3)">
                    <img id="symbol4" src="../../img/4.png" alt="Seu símbolo4" style="width: 50px;" onclick="imgSelect(symbol4)">
                    
                </div>
-->

                <div class="checkbox_div loc_img">
                    FRATURAS / LUXAÇÕES/ ENTORSES
                </div>
                <div class="checkbox_div loc_img">
                    FERIMENTOS DIVERSOS
                </div>
                <div class="checkbox_div loc_img">
                    HEMORRAGIA
                </div>
                <div class="checkbox_div loc_img">
                    EVICERAÇÃO
                </div>
                <div class="checkbox_div loc_img">
                    ***ILEGÍVEL***
                </div>
                <div class="checkbox_div loc_img">
                    AMPUTAÇÃO
                </div> 
                <div class="checkbox_div loc_img">
                    QUEIMADURA 1º GRAU
                </div>
                <div class="checkbox_div loc_img">
                    QUEIMADURA 2º GRAU
                </div>
                <div class="checkbox_div loc_img">
                    QUEIMADURA 3º GRAU
                </div>
                    <p class="ffelc_tt center loc_img">FERIMENTOS / FRATURAS / ENTORSES / LUXAÇÃO / CONTUSÃO</p>
                    <div class="add_ferimento" onclick="vaiTerUmaFuncao()">
                        <p class="img_obj_tt" id="tt_add">ADICIONAR FERIMENTO +</p>
                    </div>
                    <p class="ffelc_tt center loc_img">QUEIMADURAS</p>
                    <div class="add_ferimento" onclick="vaiTerUmaFuncao()">
                        <p class="img_obj_tt" id="tt_add">ADICIONAR FERIMENTO +</p>
                    </div>
        </div>
    </div>
    <div class="form center" onclick="abrirBloco(7)">
        <button type="button" class="tt_row center">
            <div></div>
            <p class="form_tt">SINAIS E SINTOMAS</p>
            <div>
                <div class="check center" id="jabuti_form7">✔</div>
            </div>
        </button>
        <div class="bloco" id="7" onclick="blocoClicado(event)">
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="ABDOMEN SENSIVEL ou RIGIDO" onchange="verificarPreenchimento('form7')">ABDOMEN SENSÍVEL OU RÍGIDO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Afundamento de cranio" onchange="verificarPreenchimento('form7')">AFUNDAMENTO DE CRÂNIO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Agitacao" onchange="verificarPreenchimento('form7')">AGITAÇÃO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Amnesia" onchange="verificarPreenchimento('form7')">AMNÉSIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Angina de Peito" onchange="verificarPreenchimento('form7')">ANGINA DE PEITO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Apneia" onchange="verificarPreenchimento('form7')">APNÉIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Bradicardia" onchange="verificarPreenchimento('form7')">BRADICARDIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="BRADIPNEIA" onchange="verificarPreenchimento('form7')">BRADIPNEIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="BRONCOASPIRANDO" onchange="verificarPreenchimento('form7')">BRONCOASPIRANDO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="CEFALEIA" onchange="verificarPreenchimento('form7')">CEFALEIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="CIANOSE" onchange="verificarPreenchimento('form7')">CIANOSE</input>
                    <div class="subcheckbox_div" id="subdivPES2">
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="Labios" onchange="verificarPreenchimento('form7')">LÁBIOS</input>
                        </div>
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="EXTREMIDADE" onchange="verificarPreenchimento('form7')">EXTREMIDADE</input>
                        </div>
                    </div>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Convulsao" onchange="verificarPreenchimento('form7')">CONVULSÃO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Decorticacao" onchange="verificarPreenchimento('form7')">DECORTICAÇÃO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="DEFORMIDADE" onchange="verificarPreenchimento('form7')">DEFORMIDADE</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Descerebracao" onchange="verificarPreenchimento('form7')">DESCEREBRAÇÃO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Desmaio" onchange="verificarPreenchimento('form7')">DESMAIO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Desvio de Traqueia" onchange="verificarPreenchimento('form7')">DESVIO DE TRAQUÉIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Dispneia" onchange="verificarPreenchimento('form7')">DISPNÉIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Dor Local" onchange="verificarPreenchimento('form7')">DOR LOCAL</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Edema" onchange="verificarPreenchimento('form7')">EDEMA</input>
                    <div class="subcheckbox_div" id="subdivPES2">
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="GENERALIZADO" onchange="verificarPreenchimento('form7')">GENERALIZADO</input>
                        </div>
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="LOCALIZADO" onchange="verificarPreenchimento('form7')">LOCALIZADO</input>
                        </div>
                    </div>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Enfisema Subcutaneo" onchange="verificarPreenchimento('form7')">ENFISEMA SUBCUTÂNEO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Estase de jugular" onchange="verificarPreenchimento('form7')">ÊSTASE DE JUGULAR</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="FACE PALIDA" onchange="verificarPreenchimento('form7')">FACE PÁLIDA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="HEMORRAGIA" onchange="verificarPreenchimento('form7')">HEMORRAGIA</input>
                    <div class="subcheckbox_div" id="subdivPES2">
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="INTERNA" onchange="verificarPreenchimento('form7')">INTERNA</input>
                        </div>
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="EXTERNA" onchange="verificarPreenchimento('form7')">EXTERNA</input>
                        </div>
                    </div>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Hipertensao" onchange="verificarPreenchimento('form7')">HIPERTENSÃO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Hipotensao" onchange="verificarPreenchimento('form7')">HIPOTENSÃO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Nauseas e vomito" onchange="verificarPreenchimento('form7')">NÁUSEAS E VÔMITO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="NASORAGIA" onchange="verificarPreenchimento('form7')">NASORAGIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Obito" onchange="verificarPreenchimento('form7')">ÓBITO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Otorreia" onchange="verificarPreenchimento('form7')">OTORRÉIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Otorragia" onchange="verificarPreenchimento('form7')">OTORRAGIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Ovace" onchange="verificarPreenchimento('form7')">OVACE</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Parada" onchange="verificarPreenchimento('form7')">PARADA</input>
                    <div class="subcheckbox_div" id="subdivPES2">
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="Cardiaca" onchange="verificarPreenchimento('form7')">CARDÍACA</input>
                        </div>
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="Respiratoria" onchange="verificarPreenchimento('form7')">RESPIRATÓRIA</input>
                        </div>
                    </div>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Priapismo" onchange="verificarPreenchimento('form7')">PRIAPISMO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Prurido na pele" onchange="verificarPreenchimento('form7')">PRURIDO NA PELE</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="PUPILAS" onchange="verificarPreenchimento('form7')">PUPILAS</input>
                    <div class="subcheckbox_div" id="subdivPES2">
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="Anisocoricas" onchange="verificarPreenchimento('form7')">ANISOCÓRICAS</input>
                        </div>
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="Isoricas" onchange="verificarPreenchimento('form7')">ISOCÓRICAS</input>
                        </div>
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="Midrise" onchange="verificarPreenchimento('form7')">MIDRÍSE</input>
                            <div class="subcheckbox_div">
                                <div class="checkbox_div3">
                                    <input type="checkbox" name="sinais[]" value="Reagente" onchange="verificarPreenchimento('form7')">REAGENTE</input>
                                </div>
                                <div class="checkbox_div3">
                                    <input type="checkbox" name="sinais[]" value="Nao Reagente" onchange="verificarPreenchimento('form7')">NÃO REAGENTE</input>
                                </div>
                            </div>

                        </div>
                        <div class="checkbox_div3">
                            <input type="checkbox" name="sinais[]" value="Miose" onchange="verificarPreenchimento('form7')">MIÓSE</input>

                        </div>
                    </div>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Sede" onchange="verificarPreenchimento('form7')">SEDE</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Sinal de battle" onchange="verificarPreenchimento('form7')">SINAL DE BATTLE</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Sinal de Guaxinim" onchange="verificarPreenchimento('form7')">SINAL DE GUAXINIM</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Sudorese" onchange="verificarPreenchimento('form7')">SUDORESE</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Taquipneia" onchange="verificarPreenchimento('form7')">TAQUIPNÉIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Taquicardias" onchange="verificarPreenchimento('form7')">TAQUICARDIA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="sinais[]" value="Tontura" onchange="verificarPreenchimento('form7')">TONTURA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" onchange="verificarPreenchimento('form7')"></input><input type="text" name="sinais[]" class="input_text" onchange="verificarPreenchimento('form7')"></input>
                </div>

        </div>
    </div>
    <!-- <button type="submit" name="salvar">Salvar</button>
  </form> -->
    <div class="form center" onclick="abrirBloco(8)">
        <button type="button" class="tt_row center">
            <div></div>
            <p class="form_tt">FORMA DE CONDUÇÃO</p>
            <div>
                <div class="check center" id="jabuti_form8">✔</div>
            </div>
        </button>
        <div class="bloco" id="8" onclick="blocoClicado(event)">
          <div class="checkbox_div">
              <input type="checkbox" name="forma_conducao[]" value="deitada" onchange="verificarPreenchimento('form8')">DEITADA</input>
          </div>
          <div class="checkbox_div">
              <input type="checkbox" name="forma_conducao[]" value="SEMI-SENTADA" onchange="verificarPreenchimento('form8')">SEMI-SENTADA</input>
          </div>
          <div class="checkbox_div">
              <input type="checkbox" name="forma_conducao[]" value="sentada" onchange="verificarPreenchimento('form8')">SENTADA</input>
          </div>
        </div>
    </div>
    <!-- <button type="submit" name="salvar">Salvar</button>
  </form> -->
    <div class="form center" onclick="abrirBloco(9)">
        <button type="button" class="tt_row center">
            <div></div>
            <p class="form_tt">DECISÃO TRANSPORTE</p>
            <div>
                <div class="check center" id="jabuti_form9">✔</div>
            </div>
        </button>
        
        <div class="bloco" id="9" onclick="blocoClicado(event)">
                <div class="checkbox_div2">
                    <input type="checkbox" name="descisao_trans[]" onchange="verificarPreenchimento('form9')">CRÍTICO</input><img src="../../img/2.png" class="img_transporte">
                </div>
                <hr style="border: 1px solid darkblue; width: 100%; margin: 0%; padding: 0%;">
                <div class="checkbox_div2">
                    <input type="checkbox" name="descisao_trans[]" value="instavel" onchange="verificarPreenchimento('form9')">INSTÁVEL</input><img src="../../img/4.png" class="img_transporte">
                </div>
                <hr style="border: 1px solid darkblue; width: 100%; margin: 0%; padding: 0%;">
                <div class="checkbox_div2">
                    <input type="checkbox" name="descisao_trans[]" value="Potencialmente instavel" onchange="verificarPreenchimento('form9')">POTENCIALMENTE INSTÁVEL</input><img src="../../img/3.png"
                        class="img_transporte">
                </div>
                <hr style="border: 1px solid darkblue; width: 100%; margin: 0%; padding: 0%;">
                <div class="checkbox_div2">
                    <input type="checkbox" name="descisao_trans[]" value="Estavel" onchange="verificarPreenchimento('form9')">ESTÁVEL</input><img src="../../img/1.png" class="img_transporte">
                </div>
                <hr style="border: 1px solid darkblue; width: 100%; margin: 0%; padding: 0%;">
                <p class="gg_tt center">EQUIPE DE ATENDIMENTO</p>
                <div class="input_div">
                    MOTORISTA:<input type="text" name="descisao_trans[]" class="input_text" onchange="verificarPreenchimento('form9')">
                </div>
                <div class="input_div">
                    SOCORRISTA 1:<input type="text" name="descisao_trans[]" class="input_text" onchange="verificarPreenchimento('form9')">
                </div>
                <div class="input_div">
                    SOCORRISTA 2:<input type="text" name="descisao_trans[]" class="input_text" onchange="verificarPreenchimento('form9')">
                </div>
                <div class="input_div">
                    SOCORRISTA 3:<input type="text" name="descisao_trans[]" class="input_text" onchange="verificarPreenchimento('form9')">
                </div>
                <div class="input_div">
                    DEMANDANTE:<input type="text" name="descisao_trans[]" class="input_text" onchange="verificarPreenchimento('form9')">
                </div>
                <div class="input_div">
                    EQUIPE:<input type="text" name="descisao_trans[]" class="input_text" onchange="verificarPreenchimento('form9')">
                </div>
        </div>
    </div>
    <!-- <button type="submit" name="salvar">Salvar</button>
  </form> -->
    <div class="form center" onclick="abrirBloco(10)">
        <button type="button" class="tt_row center">
            <div></div>
            <p class="form_tt">VÍTIMA ERA</p>
            <div>
                <div class="check center" id="jabuti_form10">✔</div>
            </div>
        </button>
        <div class="bloco" id="10" onclick="blocoClicado(event)">
                <div class="checkbox_div">
                    <input type="checkbox" name="vitima_era[]" value="ciclista" onchange="verificarPreenchimento('form10')">CICLISTA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="vitima_era[]" value="condutor moto" onchange="verificarPreenchimento('form10')">CONDUTOR MOTO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="vitima_era[]" value="Gestante" onchange="verificarPreenchimento('form10')">GESTANTE</input>
                </div>
                <div class="checkbox_div" >
                    <input type="checkbox" name="vitima_era[]" value="Passageiro banco da frente" onchange="verificarPreenchimento('form10')">PASSAGEIRO BANCO DA FRENTE</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="vitima_era[]" value="passageiro moto" onchange="verificarPreenchimento('form10')">PASSAGEIRO MOTO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="vitima_era[]" value="condutor carro" onchange="verificarPreenchimento('form10')" >CONDUTOR CARRO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="vitima_era[]" value="clinico" onchange="verificarPreenchimento('form10')">CLÍNICO</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="vitima_era[]" value="trauma" onchange="verificarPreenchimento('form10')">TRAUMA</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="vitima_era[]" value="Passageiro banco de tras" onchange="verificarPreenchimento('form10')">PASSAGEIRO BANCO DE TRÁS</input>
                </div>
                <div class="checkbox_div">
                    <input type="checkbox" name="vitima_era[]" value="Pedestre" onchange="verificarPreenchimento('form10')">PEDESTRE</input>
                </div>
        </div>
    </div>
    <!-- <button type="submit" name="salvar">Salvar</button>
  </form> -->
    <div class="form center" onclick="abrirBloco(11)">
        <button type="button" class="tt_row center">
            <div></div>
            <p class="form_tt">OBJETOS RECOLHIDOS</p>
            <div>
                <div class="check center" id="jabuti_form11">✔</div>
            </div>
        </button>
        <div class="bloco" id="11" onclick="blocoClicado(event)">
                <!-- <label for="imagemInput" class="input_imagem_obj_label">
                    <p class="img_obj_tt" id="tt_add">ADICIONAR IMAGEM +</p>
                    <div id="imagemDiv" class="img_div_obj center">
                        <img id="imagemExibida" src="" alt="Imagem Exibida" class="imagem_obj">
                    </div>

                </label>
                <input type="file" id="imagemInput" name="imagem" accept="image/*" class="input_obj_none"
                    onchange="verificarPreenchimento('form11')">
                <p class="img_obj_remover center" id="button_remover"
                    onclick="removerImagemObj();  verificarPreenchimento('form11')">REMOVER IMAGEM ✖</p> -->
                <div class="textarea_obj_div">
                    <textarea placeholder="OBJETOS..." class="textarea_obj" name="objeto"
                        onchange="verificarPreenchimento('form11')"></textarea>
                </div>
        </div>
    </div>
    <!-- <button type="submit" name="salvar">Salvar</button>
  </form> -->
    <div class="form center" onclick="abrirBloco(12)">
        <button type="button" class="tt_row center">
            <div></div>
            <p class="form_tt">OCORRÊNCIA</p>
            <div>
                <div class="check center" id="jabuti_form12">✔</div>
            </div>
        </button>
        <div class="bloco" id="12" onclick="blocoClicado(event)">
                <div class="input_div">
                    NÚMERO USB:<input type="number" class="input_number" name="ocorrencia[]"
                        onchange="verificarPreenchimento('form12')">
                </div>
                <div class="input_div">
                    NÚMERO DA OCORRÊNCIA:<input type="number" class="input_number" name="ocorrencia[]"
                        onchange="verificarPreenchimento('form12')">
                </div>
                <div class="input_div">
                    DESPACHANTE:<input type="number" class="input_number" name="ocorrencia[]"
                        onchange="verificarPreenchimento('form12')">
                </div>
                <div class="input_div">
                    H. CH.:<input type="text" class="input_text" name="ocorrencia[]" onchange="verificarPreenchimento('form12')">
                </div>
                <div class="input_div">
                    KM FINAL:<input type="number" class="input_number" name="ocorrencia[]" onchange="verificarPreenchimento('form12')">
                </div>
                <div class="input_div">
                    CÓDIGO SIA/SUS:<input type="number" class="input_number" name="ocorrencia[]"
                        onchange="verificarPreenchimento('form12')">
                </div>
        </div>
    </div>
    <div class="forms_buttons center">
        <button type="submit" name="salvar" class="button center">
            <p class="form_tt">ENVIAR</p>
        </button>
    </div>
    <!-- <button type="submit" name="salvar">Salvar</button> -->
  </form>
</div>

</body>
<script src="../../script/form.js"></script>
<script src="../script/imagemInput.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</html>