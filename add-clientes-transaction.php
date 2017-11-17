<?php
$dbh = new mysqli('localhost', 'root', '', 'tads4');
$dbh->autocommit(false);

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


  //$dbh->beginTransaction();
  $dbh->query("INSERT INTO endereco('rua', 'numero', 'bairro', 'complemento', 'cep', 'estado_id_estado')
                    VALUES ('$rua', '$numero', '$bairro', '$complemento', '$cep', '1')");

  $id = 0;
  //Pegar ID


  $dbh->query("INSERT INTO pessoa('nome', 'rg_ie', 'cpf_cnpj, 'data_cadastro', 'data_fim', 'telefone', 'celular', 'endereco_id_endereco', 'Login_id_login')
                  VALUES ('$nome', '$rgie', '$cpfcnpj', 'null', 'null', '$tel', '$cel', '$id', 'null')");

  $id = 0;

  $dbh->query("INSERT INTO cliente('data_nascimento', 'renda', '$id')
                   VALUES ('null', '$data', ''$renda', '$id')");



  $dbh->commit();

  $dbh->close();
?>
