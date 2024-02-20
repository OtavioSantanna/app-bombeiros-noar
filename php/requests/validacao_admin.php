<?php
    //Inicia a seção
    session_start();
    include("../conecta.php");

    $matricula = $_POST["matricula"];
    $senha = md5($_POST["senha"]);

    $comando = $pdo->prepare("SELECT * FROM usuario WHERE matricula = ? AND senha = ? AND adm = 'sim';");
    $comando->bindParam(1, $matricula);
    $comando->bindParam(2, $senha);
    $comando->execute();
    

    $usuario_info = $comando->fetch(PDO::FETCH_ASSOC);
    $_SESSION["usuario"] = $usuario_info["nome"];


    if($comando->rowCount() == 0)
    {
        echo
        ("
            <script type=text/javascript>
                alert('matricula ou senha incorretos')
                window.location = '../../pages/central/login.html'     
            </script>
        ");
    }
    else
    {
        $_SESSION["usuario"] = $usuario_info["usuario"];
        $_SESSION["matricula"] = $matricula;
        $_SESSION["id_socorrista"] = $id_socorrista;
        header('Location: ../../pages/central/adminPage.php');
    }
?>