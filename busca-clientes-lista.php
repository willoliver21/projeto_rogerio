<?php
  include("conecta.php");
//require('conecta.php');

$sql = "select p.nome, p.rg_ie, p.cpf_cnpj, p.data_cadastro, p.telefone, c.renda, c.data_nascimento, e.rua, e.numero, e.bairro, e.cep  from cliente c
join pessoa p on p.id_pessoa = c.pessoa_id_pessoa
join endereco e on e.id_endereco = p.endereco_id_endereco
where c.data_nascimento is not null";

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
