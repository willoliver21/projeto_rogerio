<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
?>
<h1>Cadastro de Estados</h1> <!-- //cria formulario -->
<form action="adiciona-produto.php" method="post"> <!-- // chama pagina adiciona-produto-->
    <table class="table"> <!-- //cria tabela -->
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>Sigla</td>
            <td><input class="form-control" type="text" name="sigla" /></td>
        </tr>
    </table>
    <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
</form>

<?php include("rodape.php"); ?>
