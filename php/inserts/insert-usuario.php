<?php
  include('../conecta.php');
  
  $matricula = $_POST["matricula"];
  $nome = $_POST["nome"];
  $senha = $_POST["senha"];
  $cpf = $_POST["cpf"];
  $cep = $_POST["cep"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $cargo = $_POST["cargo"];
  $idade = $_POST["idade"];
  $num_casa = $_POST["num_casa"];
  $admin = $_POST["admin"];

  $criptografada = md5($senha);
  $user_info = []; //Variável para guardar os dados acima no form

  // O trecho abaixo pode estar dentro de um WHILE para guardar a resposta de um SELECT por exemplo
  // O trecho abaixo pode estar dentro de um WHILE para guardar a resposta de um SELECT por exemplo
  // $resposta = 
  // [
  //   "matricula" => $matricula,
  //   "nome" => $nome
  // ];
  // array_push($user_info, $resposta);
  // //Até aqui ficaria dentro do WHILE
  
  // try {
  $sql = $pdo->prepare("INSERT into usuario (matricula, nome, senha, adm) VALUES (?, ?, ?, ?);");

  $sql->bindParam(1, $matricula);
  $sql->bindParam(2, $nome);
  $sql->bindParam(3, $criptografada);
  $sql->bindParam(4, $admin);
  
  $executar = $sql->execute();

  $sql = $pdo->prepare("INSERT INTO info_usuario (matricula, nome, cpf, idade, cargo, email, cep, num_casa, telefone) values (?,?,?,?,?,?,?,?,?)");

  $sql->bindParam(1, $matricula);
  $sql->bindParam(2, $nome);
  $sql->bindParam(3, $cpf);
  $sql->bindParam(4, $idade);
  $sql->bindParam(5, $cargo);
  $sql->bindParam(6, $email);
  $sql->bindParam(7, $cep);
  $sql->bindParam(8, $num_casa);
  $sql->bindParam(9, $telefone);    

  $executar = $sql->execute();
  
  // $json_texto = json_encode(["info" => $user_info]);
  // echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html
  // }
  // catch (PDOException $e){
  //   echo "Erro no banco de dados: " . $e->getMessage();
  // }
  header('Location: ../../pages/central/adminPage.php');
?>