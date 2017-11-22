<?php
  include("conecta.php");
//require('conecta.php');

$sql = "select h.id_historico, h.data_historico, h.descricao, o.descricao from historico h
join operacao o on o.id_operacao = h.operacao_id_operacao
where h.descricao is not null";

$result = $conexao->query($sql);

while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $data[] = $row;
}


$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data];


echo json_encode($results);


?>
