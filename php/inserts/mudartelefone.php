<?php
    include("../conecta.php");

    $matricula = $_POST['matricula'];
    $novo_telefone = $_POST['novo_telefone'];

    $comando = $pdo->prepare("UPDATE info_usuario set telefone = '$novo_telefone' where matricula = $matricula");
    $comando->execute();

    header("Location: ../../pages/central/searchUsuario.php");
?>