<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php"); ?>

<?php
//recebe os dados do formulario-produto via post
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$categoria_id = $_POST['categoria_id'];


//se for verdadeiro insere no banco se nao da mensagem de erro
if(insereProduto($conexao, $nome, $preco, $categoria_id)) { ?>
    <p class="text-success">O produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
