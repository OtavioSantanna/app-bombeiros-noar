<?php
include("../../php/conecta.php");


// Recupere os dados serializados da coluna "informacao"
$comando = $pdo->prepare("SELECT * FROM info_usuario");
$comando->execute();
$resultado = $comando->fetch(PDO::FETCH_ASSOC);

// Desserialize os dados em um array
$dadosPaciente = json_decode($resultado['informacao'], true);

// Crie variáveis para acessar os valores individualmente
$id_ocorrencia = $dadosPaciente[0]; // Primeiro valor
$data = $dadosPaciente[1]; // Segundo valor
$sexo = $dadosPaciente[2];
$hospital = $dadosPaciente[3];
$nome_paciente = $dadosPaciente[4];
$idade = $dadosPaciente[5];
$cpf = $dadosPaciente[6];
$telefone = $dadosPaciente[7];
$acompanhate = $dadosPaciente[8];
$idade_acompanhante = $dadosPaciente[9];
$local_ocorrencia = $dadosPaciente[10];

// Agora você pode usar $nome e $idade em seu card ou em qualquer outro lugar
echo "Nome: $nome_paciente<br>";
echo "Idade: $idade<br>";
?>
