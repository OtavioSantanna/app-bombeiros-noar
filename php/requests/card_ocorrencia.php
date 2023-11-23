<?php
include('../conecta.php');

$comando = $pdo->prepare("SELECT cabecalho from info_ocorrencia where id_ocorrencia = 22");
$resultado = $comando->execute();

// Verificar se a execução foi bem-sucedida
if ($resultado) {
    // Recuperar o resultado como um array associativo
    $array = $comando->fetch(PDO::FETCH_ASSOC);

    // Atribuir os valores do array a variáveis
    $data = $array[0];
    $sexo = $array[1];
    $nome = $array[2];
    $idade = $array[3];
    $cpf = $array[4];
    $telefone = $array[5];
    $acompanhante = $array[6];
    $idadeAcompanhante = $array[7];
    $localOcorrencia = $array[8];// Substitua 'local_ocorrencia' pelo nome correto da coluna no seu banco de dados

    // Fazer o echo na ordem desejada
    echo "Data: $data<br>";
    echo "Sexo: $sexo<br>";
    echo "Nome: $nome<br>";
    echo "Idade: $idade<br>";
    echo "CPF: $cpf<br>";
    echo "Telefone: $telefone<br>";
    echo "Acompanhante: $acompanhante<br>";
    echo "Idade Acompanhante: $idadeAcompanhante<br>";
    echo "Local da Ocorrência: $localOcorrencia<br>";
} else {
    echo "Erro ao executar a consulta.";
}
?>
