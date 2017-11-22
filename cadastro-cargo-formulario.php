<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
?>
<h1>Cadastro de Cargo</h1> <!-- //cria formulario -->
<form action="add-cargos.php" method="post"> <!-- // chama pagina adiciona-produto-->
    <table class="table"> <!-- //cria tabela -->
        <tr>
            <td>Descrição</td>
            <td><input class="form-control" type="text" name="descricao" /></td>
        </tr>
   </table>
   <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
</form>

<?php include("rodape.php"); ?>
