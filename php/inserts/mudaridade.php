<?php
    include("../conecta.php");

    $matricula = $_POST['matricula'];
    $nova_idade = $_POST['nova_idade'];

    $comando = $pdo->prepare("UPDATE info_usuario set idade = '$nova_idade' where matricula = $matricula");
    $comando->execute();

    header("Location: ../../pages/central/searchUsuario.php");
?>