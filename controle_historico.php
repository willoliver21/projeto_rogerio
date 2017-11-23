<?php

include("conecta.php");

function insereHistorico($conexao, $id_op, $id_funcionario, $data_historcio, $descricao_historico) {
	$queryInsereHistorico = "insert into historico (funcionario_id_funcionario, operacao_id_operacao, data_historico, descricao)
  values ({$id_funcionario}, {$id_op}, '{$data_historcio}', '{$descricao_historico}')";
	mysqli_query($conexao, $queryInsereHistorico);
}
?>
