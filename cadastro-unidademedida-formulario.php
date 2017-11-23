<?php include("cabecalho.php");
      include("conecta.php");
?>
<h1>Cadastro de Unidade de Medida</h1> <!-- //cria formulario -->
<form action="add-unidademedida.php" method="post"> <!-- // chama pagina adiciona-produto-->
    <table class="table"> <!-- //cria tabela -->
        <tr>
            <td>Unidade</td>
            <td><input class="form-control" type="text" name="unidade" /></td>
        </tr>
    </table>
    <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
</form>

<?php include("rodape.php"); ?>
