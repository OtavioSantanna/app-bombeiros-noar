<?php
include('../conecta.php');

$info_valor = $_POST['info_valor'];
$filtro = $_POST['filtro'];

switch($filtro) {
  case "semFiltro":
    $comando = $pdo->prepare("SELECT * FROM info_ocorrencia WHERE JSON_SEARCH(cabecalho, 'one', '$info_valor') IS NOT NULL;");
    $resultado = $comando->execute();
    $cabecalhos = array();
    while ($linhas = $comando->fetch()) {
      $id = $linhas["id_ocorrencia"];
      $cabecalho = $linhas["cabecalho"];
      $cabecalhos[] = array('id' => $id, 'cabecalho' => $cabecalho);
    }
    $response['result'] = $cabecalhos;
    break;
  case "CodOcorrencia":
    $comando = $pdo->prepare("SELECT * FROM info_ocorrencia WHERE JSON_UNQUOTE(JSON_EXTRACT(cabecalho, '$[9]'))
    LIKE '%$info_valor%';");
    $resultado = $comando->execute();
    while ($linhas = $comando->fetch()) {
      $id = $linhas["id_ocorrencia"];
      $cabecalho = $linhas["cabecalho"];
      $cabecalhos[] = array('id' => $id, 'cabecalho' => $cabecalho);
    }
    $response['result'] = $cabecalhos;
  break;
  case "nomePaciente":
    $comando = $pdo->prepare("SELECT * FROM info_ocorrencia WHERE JSON_UNQUOTE(JSON_EXTRACT(cabecalho, '$[3]'))
    = '$info_valor';");
    $resultado = $comando->execute();
    while ($linhas = $comando->fetch()) {
      $id = $linhas["id_ocorrencia"];
      $cabecalho = $linhas["cabecalho"];
      $cabecalhos[] = array('id' => $id, 'cabecalho' => $cabecalho);
    }
    $response['result'] = $cabecalhos;
  break;
  case "hospital":
    $comando = $pdo->prepare("SELECT * FROM info_ocorrencia WHERE JSON_UNQUOTE(JSON_EXTRACT(cabecalho, '$[2]')) 
    LIKE '%$info_valor%';");
    $resultado = $comando->execute();
    while ($linhas = $comando->fetch()) {
      $id = $linhas["id_ocorrencia"];
      $cabecalho = $linhas["cabecalho"];
      $cabecalhos[] = array('id' => $id, 'cabecalho' => $cabecalho);
    }
    $response['result'] = $cabecalhos;
  break;
}
echo json_encode($response);
exit(); // Pare a execução adicional
?>