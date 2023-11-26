<?php
    include("../conecta.php");
    session_start();
    
    $matricula = $_SESSION['matricula'];

    $comando = $pdo->prepare("SELECT * FROM info_ocorrencia where id_socorrista = ?");
    $comando->bindParam(1, $matricula);
    $resutado = $comando->execute();

    while ($linhas = $comando->fetch()) {
        $id = $linhas["id_ocorrencia"];
        $cabecalho = $linhas["cabecalho"];
        $pre_hospitalar = $linhas['pre_hospitalar'];
        $glasgow = $linhas['glasgow'];
        $sinais_vitais = $linhas['sinais_vitais'];
        $problemas_suspeitos = $linhas['problemas_suspeitos'];
        $conducao = $linhas['conducao'];
        $decisao_trans = $linhas['decisao_trans'];
        $vitima_era = $linhas['vitima_era'];
        $objeto = $linhas['objeto'];
        $ocorrencia = $linhas['ocorrencia'];
        $volta[] = array('id' => $id, 'cabecalho' => $cabecalho, 'pre_hospitalar' => $pre_hospitalar,
        'glasgow' => $glasgow, 'sinais_vitais' => $sinais_vitais, 'problemas_suspeitos' => $problemas_suspeitos,
        'conducao' => $conducao, 'decisao_trans' => $decisao_trans, 'vitima_era' => $vitima_era, 'objeto' => $objeto,
        'ocorrencia' => $ocorrencia);
        $response['result'] = $volta;
    }
    echo json_encode($response);
    exit();
?>