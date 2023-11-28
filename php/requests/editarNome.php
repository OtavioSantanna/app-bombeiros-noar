<?php
    include("../conecta.php");

    $novo_nome = $_POST['novo_nome'];
    $id_ocorrencia = $_POST['id_ocorrencia'];
    $comando = $pdo->prepare("UPDATE info_ocorrencia SET cabecalho = JSON_SET(cabecalho, '$[3]', '$novo_nome') WHERE id_ocorrencia = $id_ocorrencia;");
    $comando->execute();

    header("Location: ../../pages/medico/main.php");
?>