<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
?>
<h1>Formulário de cadastro</h1> <!-- //cria formulario -->
<form action="adiciona-produto.php" method="post"> <!-- // chama pagina adiciona-produto-->
    <table class="table"> <!-- //cria tabela -->
        <tr>
            <td>Descrição</td>
            <td><input class="form-control" type="text" name="desc" /></td>
        </tr>
        <tr>
            <td>Data de Fim(mudar)</td>
            <td><input class="form-control" type="date" name="data" /></td>
        </tr>
        <tr>
            <td>Usuário exclusão(não sei que **** é essa)</td>
            <td><input class="form-control" type="text" name="*****" /></td>
        </tr>
   </table>
   <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
</form>

<?php include("rodape.php"); ?>
