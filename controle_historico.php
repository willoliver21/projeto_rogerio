<?php

// $id_op =  id da operacao que sera  deletado, inserido ou atualziado
// $id_funcionario = id de quem esta logado
// $data_historcio = data em que houve a alteracao
// $descricao_historico =  nome das tabelas afetadas  se tiver mais de uma passar concatendao  EX:  Pessoa_Clientes_endereco

function insereHistorico($conexao, $id_op, $id_funcionario, $data_historcio, $descricao_historico) {
	$queryInsereHistorico = "insert into historico (operacao_id_operacao,funcionario_id_funcionario, data_historico, descricao)
  values ({$id_op}, {$id_funcionario}, {$data_historcio}, '{$descricao_historico}')";
	mysqli_query($conexao, $queryInsereHistorico);
}



function listaHistorico($conexao) {
	$arrayHistorico = array();
	$resultado = mysqli_query($conexao, "select * from historico join operacao on operacao.id_operacao = historico.operacao_id_operacao where id > 0");
	while($historico = mysqli_fetch_assoc($resultado)) {
		array_push($arrayHistorico, $historico);
	}
	return $arrayHistorico;
}
?>
