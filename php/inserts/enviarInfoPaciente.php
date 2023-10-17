<?php
include("../conecta.php");
session_start();

$coluna = $_POST['coluna'];

if(isset($_POST['salvar']))
{
    $brands = $_POST['brands'];
    $serializedBrands = json_encode($brands);

    $comando = $pdo->prepare("INSERT INTO info_ocorrencia ($coluna) VALUES (?)");
    $comando->bindParam(1, $serializedBrands);
    $resultado = $comando->execute();
}
?>
