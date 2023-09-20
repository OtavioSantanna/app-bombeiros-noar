<?php
    include("../conecta.php");
    
    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $cep = $_POST["cep"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cargo = $_POST["cargo"];
    $idade = $_POST["idade"];
    $num_casa = $_POST["num_casa"];

    $sql = $pdo->prepare("INSERT into usuarios (matricula, nome, senha) VALUES (?, ?, ?);");

    $sql->bindParam(1, $matricula);
    $sql->bindParam(2, $nome);
    $sql->bindParam(3, $senha);
    
    $executar = $sql->execute();

    $sql = $pdo->prepare("INSERT INTO info_usuarios (matricula, nome, idade, cargo, email, cep, num_casa, telefone) values (?,?,?,?,?,?,?,?)");

    $sql->bindParam(1, $matricula);
    $sql->bindParam(2, $nome);
    $sql->bindParam(3, $idade);
    $sql->bindParam(4, $cargo);
    $sql->bindParam(5, $email);
    $sql->bindParam(6, $cep);
    $sql->bindParam(7, $num_casa);
    $sql->bindParam(8, $telefone);    

    $executar = $sql->execute();

    /*header('Location: ../../pages/central/inserir_usuario.html');
    ob_end_flush(); // Encerra o buffer de saída e envia a saída para o navegador*/

?>