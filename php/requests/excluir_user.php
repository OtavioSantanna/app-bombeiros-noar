<?php
    include('../conecta.php');

    $matricula = $_GET['id_usuario'];

    $comando = $pdo->prepare("UPDATE info_ocorrencia SET id_usuario = '1' WHERE id_usuario = $matricula");
    $comando->execute();

    $comando = $pdo->prepare("UPDATE termo_recusa SET id_socorrista = '1' WHERE id_socorrista = $matricula");
    $comando->execute();

    $comando = $pdo->prepare("DELETE from info_usuario where matricula = $matricula");
    $comando->execute();

    $comando = $pdo->prepare("DELETE from usuario where matricula = $matricula");
    $comando->execute();
?>