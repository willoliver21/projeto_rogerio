<?php
include("conecta.php");

$nome = $_POST["nome"];
$mail = $_POST["mail"];
$senha = $_POST["senha"];
$rgie = $_POST["rg-ie"];
$cpfcnpj = $_POST["cpf-cnpj"];
$tel = $_POST["tel"];
$cel = $_POST["cel"];
$data = $_POST["data"];
$renda = $_POST["renda"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$complemento = $_POST["complemento"];
$cep = $_POST["cep"];

$query = "INSERT INTO `endereco`(`rua`, `numero`, `bairro`, `complemento`, `cep`, `estado_id_estado`)
VALUES ('$rua', '$numero', '$bairro', '$complemento', '$cep', '1')";



mysqli_query($conexao, $query);

$id = mysqli_insert_id($conexao);

$query = "INSERT INTO `pessoa`(`nome`, `rg_ie`, `cpf_cnpj`, `telefone`, `celular`, `endereco_id_endereco`, `Login_id_login`)
VALUES ('$nome', '$rgie', '$cpfcnpj', '$tel', '$cel', '$id', 'null')";

mysqli_query($conexao, $query);

$id = mysqli_insert_id($conexao);

$query = "INSERT INTO `cliente`(`data_nascimento`, `renda`, `pessoa_id_pessoa`)
VALUES ('$data', '$renda', '$id')";



mysqli_query($conexao, $query);

mysqli_close($conexao);
header("Location: index.php");

?>
