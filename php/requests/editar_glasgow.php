<?php
    include("../conecta.php");

    $novo_dado = $_POST['novo_dado'];
    $id_ocorrencia = $_POST['id_ocorrencia'];
    $comando = $pdo->prepare("UPDATE info_ocorrencia SET glasgow = JSON_SET(glasgow, '$[3]', '$novo_dado') WHERE id_ocorrencia = $id_ocorrencia;");
    $comando->execute();

    header("Location: ../../pages/medico/main.php");
?>