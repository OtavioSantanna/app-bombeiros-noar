<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/cadastro.css">
  <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
  <title>Inserir usuário</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<body>
    <div class="header">
            <div class="logo">
                <img src="../public/logo.png" width="100px" height="100px">
                <div class="column">
                    <div class="noar">Núcleo de Operações Aéreas e Resgate</div>
                    <div class="noar2">Assoc. de Serviços Sociais</div>
                    <div class="noar2">Voluntários</div>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="titulo">CADASTRAR USUÁRIO</div>
        <script>
            function Cadastrar(){
            //A variável "dados" conterá todos os campos do <form id="form1">
            var dados = $('#form1').serialize(); // TODOS os campos do form devem ter name

            $.ajax({
                type: "POST",
                url: "../../php/inserts/inserir_usuario.php",
                data: dados,
                dataType: 'json',

                success: function(meu_json)
                {
                var nome = meu_json;
                console.log(nome);
                }
            })
            }
        </script>
        <form method="post" action="../../php/inserts/inserir_usuario.php" id="form1">
            <div class="opcao">
                <div class="meio">
                    Matrícula: 
                    <div class="caixa"><input type="number" id="matricula" name="matricula"></div>
                    Nome:
                    <div class="caixa"><input type="text" id="nome" name="nome"></div>
                    Senha:
                    <div class="caixa"><input type="text" id="senha" name="senha"></div>
                    CPF:
                    <div class="caixa"><input type="number" id="cpf" name="cpf"></div>
                    CEP:
                    <div class="caixa"><input type="number" id="cep" name="cep"></div>
                </div>
                <div class="meio">
                    Número da Casa:
                    <div class="caixa"><input type="number" id="num_casa" name="num_casa"></div>
                    E-mail:
                    <div class="caixa"><input type="text" id="email" name="email"></div>
                    Idade:
                    <div class="caixa"><input type="number" id="idade" name="idade"></div>
                    Telefone:
                    <div class="caixa"><input type="number" id="telefone" name="telefone"></div>
                    Cargo:
                    <select name="cargo" id="cargo">
                    <?php
                    include("../../php/conecta.php");
                    $comando = $pdo->prepare("SELECT * from cargo");
                    $resultado = $comando->execute();

                    while($linhas = $comando->fetch()) {
                    $id_cargo = $linhas["id_cargo"];
                    $cargo = $linhas["cargo"];

                    echo("
                    <option value='$id_cargo'>$cargo</option>
                    ");
                    }
                    ?>
                    </select>
                </div>
            </div>
            <br>
            <input type="button" name="enviar" value="Enviar" onclick="Cadastrar();" />
        </form>
    </div>
</body>
</html>