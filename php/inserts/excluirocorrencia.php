<?php
    include("../conecta.php");

    $id_ocorrencia = $_GET['id_ocorrencia'];


    $comando = $pdo->prepare("DELETE from info_ocorrencia where id_ocorrencia = $id_ocorrencia");
    $comando->execute();

    header("Location: ../../pages/medico/main.php");
?>