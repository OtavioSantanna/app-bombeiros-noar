<?php
    include("../conecta.php");

    $nova_idade = $_POST['nova_idade'];
    $id_ocorrencia = $_POST['id_ocorrencia'];

    $comando = $pdo->prepare("UPDATE info_ocorrencia SET cabecalho = JSON_SET(cabecalho, '$[4]', '$nova_idade') WHERE id_ocorrencia = $id_ocorrencia;");
    $comando->execute();

    header("Location: ../../pages/medico/main.php");
?>