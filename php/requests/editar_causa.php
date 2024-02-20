<?php
    include("../conecta.php");

    $nova_causa = $_POST['nova_causa'];
    $dado_antigo = $_POST['dado_antigo'];
    $id_ocorrencia = $_POST['id_ocorrencia'];

    $comando = $pdo->prepare("UPDATE info_ocorrencia SET pre_hospitalar = JSON_SET( pre_hospitalar, JSON_UNQUOTE(JSON_SEARCH(pre_hospitalar, 'one', '$dado_antigo')), '$nova_causa' )
     WHERE JSON_UNQUOTE(JSON_SEARCH(pre_hospitalar, 'one', '$dado_antigo')) IS NOT NULL AND id_ocorrencia = $id_ocorrencia;
    ");
    $comando->execute();

    header("Location: ../../pages/medico/main.php");
?>