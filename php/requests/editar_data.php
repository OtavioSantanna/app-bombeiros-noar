<?php
    include("../conecta.php");

    $nova_data = $_POST['nova_data'];
    $id_ocorrencia = $_POST['id_ocorrencia'];
    $comando = $pdo->prepare("UPDATE info_ocorrencia SET cabecalho = JSON_SET(cabecalho, '$[0]', '$nova_data') WHERE id_ocorrencia = $id_ocorrencia;");
    $comando->execute();

    header("Location: ../../pages/medico/main.php");
?>