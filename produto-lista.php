<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php"); ?>

<!-- se tiver a chave removido mostra a messagem-->
<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>

<table class="table table-striped table-bordered">

    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto) :
    ?>
    <tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= $produto['categoria_nome'] ?></td>
        <!-- cria um botao e passa o prametro de qual quer editar -->
        <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a></td>
        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>" />
                <button class="btn btn-danger">remover</button>
            </form>
        </td>


    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("rodape.php"); ?>
