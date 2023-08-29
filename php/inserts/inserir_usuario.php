<?php
    session_start();
    include("..conecta.php");
    
    $matricula = ["matricula"];
    $nome = ["nome"];
    $senha = ["senha"];
    $cep = ["cep"];
    $email = ["email"];
    $telefone = ["telefone"];
    $cargo = ["cargo"];
    $admin = ["admin"];

    $sql = $pdo->prepare("INSERT INTO usuarios_cadastrados 
    (matricula, nome, senha, cargo) VALUES (?,?,?,?);");

    $sql->bindParam(1, $matricula);
    $sql->bindParam(2, $nome);
    $sql->bindParam(3, $senha);
    $sql->bindParam(4, $admin);

    $executar = $sql->execute();

    $sql = $pdo->prepare("INSERT INTO info_usuario (?,?,?,?,?,?)");

    $sql->bindParam(1, $matricula);
    $sql->bindParam(2, $nome);
    $sql->bindParam(3, $email);
    $sql->bindParam(4, $telefone);
    $sql->bindParam(5, $cep);
    $sql->bindParam(6, $cargo);    

    $executar = $sql->execute();

    header('Location: ../../pages/central/inserir_usuario.html');
?>