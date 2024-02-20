<?php
    include("../conecta.php");

    $novo_local = $_POST['novo_local'];
    $id_ocorrencia = $_POST['id_ocorrencia'];

    $comando = $pdo->prepare("UPDATE info_ocorrencia SET cabecalho = JSON_SET(cabecalho, '$[9]', '$novo_local') WHERE id_ocorrencia = $id_ocorrencia;");
    $comando->execute();

    header("Location: ../../pages/medico/main.php");
?>