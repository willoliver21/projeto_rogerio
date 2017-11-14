<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id);

//header("Location: produto-lista.php?removido=true");


//die();
?>
<script language= "JavaScript">
	location.href="produto-lista.php?removido=true"
</script>
<?php
	die();  // diz que a remocao terminou e finaliza o script
?>
