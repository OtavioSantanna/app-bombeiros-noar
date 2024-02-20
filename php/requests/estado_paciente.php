<?php
    include("../conecta.php");

    $novo_estado = $_POST['novo_estado'];
    $id_ocorrencia = $_POST['id_ocorrencia'];
    $comando = $pdo->prepare("UPDATE info_ocorrencia SET decisao_trans = JSON_SET(decisao_trans, '$[0]', '$novo_estado') 
    WHERE id_ocorrencia = $id_ocorrencia;");
    $comando->execute();

    header("Location: ../../pages/medico/main.php");
?>