<?php
    include("../conecta.php");

    $matricula = $_POST['matricula'];
    $novo_nome = $_POST['novo_nome'];

    $comando = $pdo->prepare("UPDATE usuario SET nome = '$novo_nome' where matricula = $matricula");
    $comando->execute();

    $comando = $pdo->prepare("UPDATE info_usuario set nome = '$novo_nome' where matricula = $matricula");
    $comando->execute();

    header("Location: ../../pages/central/searchUsuario.php");
?>