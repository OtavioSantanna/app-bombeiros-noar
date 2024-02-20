<?php
    include("../conecta.php");

    $matricula = $_POST['matricula'];
    $novo_cpf = $_POST['novo_cpf'];

    $comando = $pdo->prepare("UPDATE info_usuario set cpf = '$novo_cpf' where matricula = $matricula");
    $comando->execute();

    header("Location: ../../pages/central/searchUsuario.php");
?>