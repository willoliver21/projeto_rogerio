<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
?>
<h1>Formulário de cadastro</h1> <!-- //cria formulario -->
<form action="adiciona-produto.php" method="post"> <!-- // chama pagina adiciona-produto-->
    <table class="table"> <!-- //cria tabela -->
        <tr>
            <td>Salário</td>
            <td><input class="form-control" type="number" name="salario" /></td>
        </tr>
        <tr>
            <td>Faixa de Comissão</td>
            <td><input class="form-control" type="number" name="comissao" /></td>
        </tr>
        <tr>
            <td>Data de Nascimento</td>
            <td><input class="form-control" type="date" name="nascimento" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
