<?php
include("../../php/conecta.php");

// Recupere os dados serializados da coluna "informacao"
$comando = $pdo->prepare("SELECT * FROM info_ocorrencia");
$comando->execute();

// Verifique se a consulta retornou algum resultado
if ($comando->rowCount() > 0) {
    $resultado = $comando->fetch(PDO::FETCH_ASSOC);
    
    // Desserialize os dados em um array
    $dadosPaciente = json_decode($resultado['cabecalho'], true);

    // Verifique se a desserialização foi bem-sucedida
    if ($dadosPaciente !== null) {
        // Acessar os valores individualmente
        $data = $dadosPaciente[0];
        $sexo = $dadosPaciente[1];
        $hospital = $dadosPaciente[2];
        $nome_paciente = $dadosPaciente[3];
        $idade = $dadosPaciente[4];
        $cpf = $dadosPaciente[5];
        $telefone = $dadosPaciente[6];
        $acompanhante = $dadosPaciente[7];
        $idade_acompanhante = $dadosPaciente[8];
        $local_ocorrencia = $dadosPaciente[9];

        // Agora você pode usar as variáveis em seu código
        echo "Nome do Paciente: $nome_paciente<br>";
        echo "Idade do Paciente: $idade<br>";
        echo "Local ocorrencia: $local_ocorrencia<br>";
    } else {
        echo "Erro ao desserializar os dados.";
    }
} else {
    echo "Nenhum resultado encontrado.";
}
?>
