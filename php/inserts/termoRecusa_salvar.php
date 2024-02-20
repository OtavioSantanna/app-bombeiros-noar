<?php
include('../conecta.php');
session_start();

$imagem = file_get_contents($_FILES["imagem"]["tmp_name"]);
$id_socorrista = $_SESSION["matricula"];

$comando = $pdo->prepare("INSERT into termo_recusa (id_socorrista, imagem_termo) VALUES (?,?)");
$comando->bindParam(1, $id_socorrista);
$comando->bindParam(2, $imagem);
$comando->execute();

header("Location: ../../pages/medico/main.php");
?>