<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
?>
<h1>Formulário de cadastro</h1> <!-- //cria formulario -->
<form action="adiciona-produto.php" method="post"> <!-- // chama pagina adiciona-produto-->
    <table class="table"> <!-- //cria tabela -->
        <tr>
            <td>Rua</td>
            <td><input class="form-control" type="text" name="rua" /></td>
        </tr>
        <tr>
            <td>Número</td>
            <td><input class="form-control" type="text" name="numero" /></td>
        </tr>
        <tr>
            <td>Bairro</td>
            <td><input class="form-control" type="text" name="bairro" /></td>
        </tr>
        <tr>
            <td>Complemento</td>
            <td><input class="form-control" type="text" name="complemento" /></td>
        </tr>
        <tr>
            <td>CEP</td>
            <td><input class="form-control" type="text" name="cep" /></td>
        </tr>
    </table>
    <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
</form>

<?php include("rodape.php"); ?>
