<?php
//inicia a seção
session_start();
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
<link rel="stylesheet" href="../../css/central/searchUsuario.css">
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
    <div>
        <div class="title_sq center">
        <p class="title">HISTÓRICO DE OCORRÊNCIAS</p>
        </div class="divao">

        <div class="forms-center">
        <div class="searchbar">
            <button type="button" id="searchButton" style="display: none;">Q</button>
            <input type="text" class="searchbar_input" placeholder="PESQUISAR..." id="searchInput" onfocus="searchButtonAppear()"></input>
            <hr style="border: 1px solid gray;">
            <select class="searchbar_select" id="pesquisar">
                <option value="0">
                    Selecione
                </option>
                <option value="1">
                    Nome do Paciente
                </option>
                <option value="2">
                    Hospital
                </option>
                <option value="3">
                    Opção 4
                </option>
            </select>
            <button onclick="Pesquisar();">Pesquiar</button>
        </div>
        <?php
            include("../../php/conecta.php");
            if(isset($_GET['op'])){
              if($_GET['op'] != 0){
                $op = $_GET['op'];
                $txt = $_GET['txt'];

                if($op == 1) {
                  $comando = $pdo->prepare("SELECT * FROM info_ocorrencia WHERE JSON_UNQUOTE(JSON_EXTRACT(cabecalho, '$[3]'))
                  like '%$txt%';");  
                } 
                if($op == 2) {
                  $comando = $pdo->prepare("SELECT * FROM info_ocorrencia WHERE JSON_UNQUOTE(JSON_EXTRACT(cabecalho, '$[2]')) 
                  like '%$txt%';");
                }
                if($op == 3) {
                  $comando = $pdo->prepare("SELECT * FROM info_ocorrencia");  
                }
              } else {
                $comando = $pdo->prepare("SELECT * FROM info_ocorrencia");  
              }

            

            } else {
              $comando = $pdo->prepare("SELECT * FROM info_ocorrencia");
            }

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

                echo("
                <br>
                <br>
                <br>
                <div class='container'>
                <div class='bloco_ocorrencia'>
                <p class='form_tt'>$nome</p>
                <p class='text_content'>$data</p>
                <p class='text_content'>$local</p>
                <p class='text_content'>Pré-hospitalar: </p>
                ");
                foreach ($causas as $index => $causa) {
                echo ("
                <ul class='text_content'> $causa</ul>
                
                ");
                }
                echo("
                    <a class='ver_mais_a' href='?'>VER MAIS ></a>
                    <a href='edicaohistorico.php?id_ocorrencia=$id_ocorrencia' class='editar_historico_button center'>EDITAR HISTÓRICO DA OCORRÊNCIA</a>
                </div>
                </div>
                ");

                // ["2023-11-24","feminino","Sirio Libanes","Angela","25","93589824034","3835012144","Marcos","34","Itapoa"]
            }
            }
        ?>
        </div>
    </div>
</main>
</body>
<script src="../script/historico.js"></script>
<script src="../script/imagemInput.js"></script>
<script src="../../script/form.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script>
  function Pesquisar(){
    var txt = searchInput.value;
    var op = pesquisar.value;

    window.open("historico_ocorrencias.php?txt="+ txt +"&op="+ op,"_self")
  }

</script>
</html>