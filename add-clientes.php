<?php
include("conecta.php");

//$mysqli = new mysqli("localhost", "root", "", "tads4");

//if ($mysqli->connect_errno) {
//    printf("Connect failed: %s\n", $mysqli->connect_error);
//    exit();
//}

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

$conexao->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);

$conexao->query("INSERT INTO endereco('rua', 'numero', 'bairro', 'complemento', 'cep', 'estado_id_estado')
                  VALUES ('$rua', '$numero', '$bairro', '$complemento', '$cep', '1')");

$id = mysql_insert_id();

$conexao->query("INSERT INTO pessoa('nome', 'rg_ie', 'cpf_cnpj, 'data_cadastro', 'data_fim', 'telefone', 'celular', 'endereco_id_endereco', 'Login_id_login')
                VALUES ('$nome', '$rgie', '$cpfcnpj', 'null', 'null', '$tel', '$cel', '$id', 'null')");

$id = mysql_insert_id();

$conexao->query("INSERT INTO cliente('data_nascimento', 'renda', '$id')
                 VALUES ('null', '$data', ''$renda', '$id')");
// Adicionar outras Querys

$conexao->commit();

$conexao->close();
?>
