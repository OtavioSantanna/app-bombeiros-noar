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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/central/central.css">
    <title>Central</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  </head>

<body>
   
    <header>
      <div class="logo">
          <img src="../public/logo_pequena.png" alt="Logo">
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
                <a href="#">Lista de Usuário</a>
            </li>
            <li class="item-menu">
                <a href="#">Histórico de Ocorrências</a>
            </li>
        </ul>
    </nav>
    <div class="fundo">
        <div class="fora">
            <div class="title">CENTRAL DE OCORRÊNCIAS</div>
        </div>
        <div class="container">
        <div class="pendentes">Pendentes:</div>
        <div class="frame">
            <div class="card">
                <div class="text">
                    <div class="nivel">Nível: 1</div>
                    <br>
                    <div class="resto">
                        <div class="sangue">Tipo Sanguíneo: O-</div>
                        <br>
                        <div class="status">Status: Urgente</div>
                        <br>
                        <div class="tipo-acidente">Tipo do acidente: Acidente de trânsito</div>
                        <br>
                        <div class="atendimento">Atendimento no local: RCP</div>
                        <br>
                    </div>
                </div>
                <img src="../public/menos-linha-reta-horizontal.png" alt="Linha" width="300px" height="15px">
                <div class="ver">Ver ficha completa</div>
            </div>

            <div class="card">
                <div class="text">
                    <div class="nivel">Nível: 2</div>
                    <br>
                    <div class="resto">
                        <div class="sangue">Tipo Sanguíneo: AB+</div>
                        <br>
                        <div class="status">Status: Estável</div>
                        <br>
                        <div class="tipo-acidente">Tipo do acidente: Domiciliar</div>
                        <br>
                        <div class="atendimento">Atendimento no local: Suporte à via aérea</div>
                        <br>
                    </div>
                </div>
                <img src="../public/menos-linha-reta-horizontal.png" alt="Linha" width="300px" height="15px">
                <div class="ver">Ver ficha completa</div>
            </div>

            <div class="card">
                <div class="text">
                    <div class="nivel">Nível: 3</div>
                    <br>
                    <div class="resto">
                        <div class="sangue">Tipo Sanguíneo: B+</div>
                        <br>
                        <div class="status">Status: Estável</div>
                        <br>
                        <div class="tipo-acidente">Tipo do acidente: Acidente de trabalho</div>
                        <br>
                        <div class="atendimento">Atendimento no local: Controle de hemorragia</div>
                    </div>
                </div>
                <img src="../public/menos-linha-reta-horizontal.png" alt="Linha" width="300px" height="15px">
                <div class="ver">Ver ficha completa</div>
            </div>

            <div class="card">
                <div class="text">
                    <div class="nivel">Nível: 3</div>
                    <br>
                    <div class="resto">
                        <div class="sangue">Tipo Sanguíneo: B-</div>
                        <br>
                        <div class="status">Status: Urgente</div>
                        <br>
                        <div class="tipo-acidente">Tipo do acidente: Acidente aéreo</div>
                        <br>
                        <div class="atendimento">Atendimento no local: RCP</div>
                        <br>
                    </div>
                </div>
                <img src="../public/menos-linha-reta-horizontal.png" alt="Linha" width="300px" height="15px">
                <div class="ver">Ver ficha completa</div>
            </div>
            </div>
        </div>
        
    </div>
        
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
