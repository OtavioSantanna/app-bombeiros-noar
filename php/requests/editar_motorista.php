<?php
    include("../conecta.php");

    $novo_motorista = $_POST['novo_motorista'];
    $id_ocorrencia = $_POST['id_ocorrencia'];
    $comando = $pdo->prepare("UPDATE info_ocorrencia SET decisao_trans = JSON_SET(decisao_trans, '$[1]', '$novo_motorista') 
    WHERE id_ocorrencia = $id_ocorrencia;");
    $comando->execute();

    header("Location: ../../pages/medico/main.php");
?>