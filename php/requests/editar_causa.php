<?php
    include("../conecta.php");

    $nova_data = $_POST['nova_data'];
    $id_ocorrencia = $_POST['id_ocorrencia'];
    $comando = $pdo->prepare("UPDATE info_ocorrencia SET pre_hospitalar = JSON_SET( pre_hospitalar, JSON_UNQUOTE(JSON_SEARCH(pre_hospitalar, 'one', '$dado_antigo')), '$dado_novo' ) 
    WHERE JSON_UNQUOTE(JSON_SEARCH(pre_hospitalar, 'one', '$dado_antigo')) IS NOT NULL AND id_ocorrencia = $id_ocorrencia;");
    $comando->execute();

    header("Location: ../../pages/medico/main.php");
?>