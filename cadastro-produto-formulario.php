<?php include("cabecalho.php");
      include("conecta.php");
?>
<h1>Cadastro de Produto</h1> <!-- //cria formulario -->
<form action="add-produto.php" method="post"> <!-- // chama pagina adiciona-produto-->
    <table class="table"> <!-- //cria tabela -->
      <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><input class="form-control" type="E-mail" name="descricao" /></td>
        </tr>
        <tr>
            <td>Validade</td>
            <td><input class="form-control" type="date" name="validade" /></td>
        </tr>
        <tr>
            <td>Data Fabricação</td>
            <td><input class="form-control" type="date" name="data_fabricacao" /></td>
        </tr>
        <tr>
            <td>Codigo de Barras</td>
            <td><input class="form-control" type="text" name="codigo_barras" /></td>
        </tr>
        <tr>
            <td>Estoque Minimo</td>
            <td><input class="form-control" type="text" name="estoque_min" /></td>
        </tr>
        <tr>
            <td>Lote</td>
            <td><input class="form-control" type="text" name="lote" /></td>
        </tr>
        <tr>
            <td>Valor Compra</td>
            <td><input class="form-control" type="number" name="preco_custo" /></td>
        </tr>
        <tr>
            <td>Valor Venda</td>
            <td><input class="form-control" type="number" name="preco_venda" /></td>
        </tr>
        <tr>
            <td>Unidade de Medida</td>
            <td><input class="form-control" type="number" name="unidade_medida_id_unidade_medida" /></td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td><input class="form-control" type="text" name="categoria_id_categoria" /></td>
        </tr>
    </table>
      <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
</form>

<?php include("rodape.php"); ?>
