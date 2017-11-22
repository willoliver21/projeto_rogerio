<?php
include("conecta.php");

$categoria = $_POST["categoria"];

$query = "INSERT INTO `categoria`(`nome`)
VALUES ('$categoria')";



mysqli_query($conexao, $query);

mysqli_close($conexao);
header("Location: index.php");

?>
