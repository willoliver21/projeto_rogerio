<?php
include("conecta.php");

$unidade = $_POST["unidade"];

$query = "INSERT INTO `funcionario`(`nome`)
VALUES ('$unidade')";



mysqli_query($conexao, $query);

mysqli_close($conexao);
header("Location: index.php");

?>
