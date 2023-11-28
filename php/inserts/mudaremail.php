<?php
    include("../conecta.php");

    $matricula = $_POST['matricula'];
    $novo_email = $_POST['novo_email'];

    $comando = $pdo->prepare("UPDATE info_usuario set email = '$novo_email' where matricula = $matricula");
    $comando->execute();

    header("Location: ../../pages/central/searchUsuario.php");
?>