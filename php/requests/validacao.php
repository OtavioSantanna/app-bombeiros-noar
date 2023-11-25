<?php
    //Inicia a seção
    session_start();
    include("../conecta.php");

    $matricula = $_POST["matricula"];
    $senha = md5($_POST["senha"]);

    $validar = $pdo->prepare("SELECT * FROM usuario WHERE matricula = :matricula AND senha = :senha");
    $validar->bindParam(':matricula', $matricula);
    $validar->bindParam(':senha', $senha);
    $validar->execute();

    $pegar_id = $validar->fetch(PDO::FETCH_ASSOC);
    $id_socorrista = $pegar_id['id_socorrista'];

    if($validar->rowCount() == 0)
    {
        echo
        ("
            <script type=text/javascript>
                alert('matricula ou senha incorretos')
                window.location = '../../pages/login.html'     
            </script>
        ");
    }
    else
    {
        $_SESSION["usuario"] = $usuario_info["usuario"];
        $_SESSION["matricula"] = $matricula;
        $_SESSION["id_socorrista"] = $id_socorrista;
        header('Location: ../../pages/medico/main.php');
    }
?>