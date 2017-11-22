<?php
include ("conecta.php");

$descricao = $_POST["descricao"];

$query = "INSERT INTO `cargo`(`descricao`, `data_fim`)
VALUES ('$descricao', 'null')";

mysqli_query($conexao, $query);

mysqli_close($conexao);
header("Location: index.php");

?>