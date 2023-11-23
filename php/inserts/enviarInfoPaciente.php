<?php
include("../conecta.php");
session_start();


if(isset($_POST['salvar']))
{
    $brands = $_POST['brands'];
    $serializedBrands = json_encode($brands);

    $pre_hospitalar = $_POST['pre_hospitalar'];
    $serializedPre_hospitalar = json_encode($pre_hospitalar);

    $glasgow = $_POST['glasgow'];
    $serializedGlasgow = json_encode($glasgow);

    $sinais_vitais = $_POST['sinais_vitais'];
    $serializedSinais_vitais = json_encode($sinais_vitais);

    $problemas_sus = $_POST['problemas_sus'];
    $serialized_probSus = json_encode($problemas_sus);

    $sinais_sintomas = $_POST['sinais'];
    $serialized_sinais = json_encode($sinais_sintomas);

    $conducao = $_POST['forma_conducao'];
    $serialized_conducao = json_encode($conducao);

    $descisao_trans = $_POST['descisao_trans'];
    $serilized_decisaoTrans = json_encode($descisao_trans);

    $vitima_era = $_POST['vitima_era'];
    $serialized_vitima_era = json_encode($vitima_era);

    $objeto = $_POST['objeto'];

    $ocorrencia = $_POST['ocorrencia'];
    $serialized_ocorrencia = json_encode($ocorrencia);

    $comando = $pdo->prepare("INSERT INTO info_ocorrencia (cabecalho, pre_hospitalar, glasgow, sinais_vitais, problemas_suspeitos, sinais_sintomas, conducao, decisao_trans, vitima_era,objeto,ocorrencia) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $comando->bindParam(1, $serializedBrands);
    $comando->bindParam(2, $serializedPre_hospitalar);
    $comando->bindParam(3, $serializedGlasgow);
    $comando->bindParam(4, $serializedSinais_vitais);
    $comando->bindParam(5, $serialized_probSus);
    $comando->bindParam(6, $serialized_sinais);
    $comando->bindParam(7, $serialized_conducao);
    $comando->bindParam(8, $serilized_decisaoTrans);
    $comando->bindParam(9, $serialized_vitima_era);
    $comando->bindParam(10, $objeto);
    $comando->bindParam(11, $serialized_ocorrencia);

    $resultado = $comando->execute();
}
?>
