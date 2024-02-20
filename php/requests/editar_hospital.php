<?php
    include("../conecta.php");

    $novo_hospital = $_POST['novo_hospital'];
    $id_ocorrencia = $_POST['id_ocorrencia'];
    $comando = $pdo->prepare("UPDATE info_ocorrencia SET cabecalho = JSON_SET(cabecalho, '$[2]', '$novo_hospital') WHERE id_ocorrencia = $id_ocorrencia;");
    $comando->execute();

    header("Location: ../../pages/medico/main.php");
?>