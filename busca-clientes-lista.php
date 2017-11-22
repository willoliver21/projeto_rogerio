<?php
  include("conecta.php");
//require('conecta.php');

$sql = "select * from cliente";
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
