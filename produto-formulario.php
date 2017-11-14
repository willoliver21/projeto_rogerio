<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php"); //drop dow das categorias

$categorias = listaCategorias($conexao); //funcao do banco-categoria
?>

<h1>Formulário de cadastro</h1> <!-- //cria formulario -->
<form action="adiciona-produto.php" method="post"> <!-- // chama pagina adiciona-produto-->
    <table class="table"> <!-- //cria tabela -->
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" /></td>
        </tr>

        <tr>
            <td>Categoria</td>
            <td>
                <select name="categoria_id">
                <?php foreach($categorias as $categoria) : ?><!-- //percorre as categorias e coloca no option o id de forma oculta e o nome da categoria visivel para o usuario -->
                <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option> <!--  //O '=' É O MESMO QUE ECHO no inicio -->
                <?php endforeach ?>
                </select>
            </td>
    </table>
    <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
</form>

<?php include("rodape.php"); ?>
