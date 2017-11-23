<?php
include("conecta.php");

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$validade = $_POST["validade"];
$data_fabricacao = $_POST["data_fabricacao"];
$data_fim = $_POST["data_fim"];
$codigo_barras = $_POST["codigo_barras"];
$estoque_min = $_POST["estoque_min"];
$lote = $_POST["lote"];
$preco_custo = $_POST["preco_custo"];
$preco_venda = $_POST["preco_venda"];
$unidade_medida_id_unidade_medida = $_POST["unidade_medida_id_unidade_medida"];
$categoria_id_categoria = $_POST["categoria_id_categoria"];

$query = "INSERT INTO `produto`(`nome`, `descricao`, `validade`, `data_fabricacao`, `data_fim`, `codigo_barras`, `estoque_min`,`lote`,`preco_custo`,`preco_venda`,`unidade_medida_id_unidade_medida`,`categoria_id_categoria`)

		  VALUES ('$nome', '$descricao', '$validade', '$data_fabricacao', '$data_fim', '$codigo_barras','$estoque_min','$lote','$preco_custo', '$preco_venda','$unidade_medida_id_unidade_medida', '$categoria_id_categoria')";

mysqli_query($conexao, $query);


mysqli_close($conexao);
header("Location: index.php");

<script Language="JavasCript">
	alert("Salvo!");
</script>

?>
