<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
?>
<h1>Formulário de cadastro</h1> <!-- //cria formulario -->
<form action="adiciona-produto.php" method="post"> <!-- // chama pagina adiciona-produto-->
    <table class="table"> <!-- //cria tabela -->
      <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input class="form-control" type="E-mail" name="mail" /></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input class="form-control" type="text" name="senha" /></td>
        </tr>
        <tr>
            <td>Nível</td>
            <td><input class="form-control" type="text" name="nivel" /></td>
        </tr>
        <tr>
            <td>RG - Inscrição Estadual</td>
            <td><input class="form-control" type="text" name="rg-ie" /></td>
        </tr>
        <tr>
            <td>CPF - CNPJ</td>
            <td><input class="form-control" type="text" name="cpf-cnpj" /></td>
        </tr>        
        <tr>
            <td>Telefone</td>
            <td><input class="form-control" type="text" name="data" /></td>
        </tr>
        <tr>
            <td>Celular</td>
            <td><input class="form-control" type="text" name="data" /></td>
        </tr>
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
    </table>
      <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
</form>

<?php include("rodape.php"); ?>
