<?php
    include('../conecta.php');

    $matricula = $_GET['id_usuario'];

    $comando = $pdo->prepare("SELECT * FROM usuario, info_usuario WHERE usuario.matricula = $matricula and info_usuario.matricula = $matricula;");
    $comando->execute([$matricula]);

    if ($comando->execute()) {
        echo("Usuário Atualizado")
    } else {
        echo("Erro ao atualizar usuário")
    }
    
?>