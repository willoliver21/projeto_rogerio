<?php

function listaCategorias($conexao) {
    $categorias = array();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao, $query);//variavel resultado recebe o resultado da query
    while($categoria = mysqli_fetch_assoc($resultado)) { //passa o resultado para o array categoria passando por todos os itens igual foreach
        array_push($categorias, $categoria);//pega os itens e joga no array de categoria //percorre a colecao
    }
    return $categorias;
}
