<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">STOCK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cadastro-cliente-formulario.php">Cliente</a></li>
          <li><a href="cadastro-fornecedor-formulario.php">Fornecedor</a></li>
          <li><a href="cadastro-funcionario-formulario.php">Funcionário</a></li>
		  		<li><a href="produto-formulario.php">Produto</a></li>
		  		<li><a href="cadastro-cargo-formulario.php">Cargo</a></li>
					<li><a href="cadastro-ramoatividade-formulario.php">Ramo Atividade</a></li>
					<li><a href="cadastro-unidademedida-formulario.php">Unidade Medida</a></li>
					<li><a href="cadastro-cargo-formulario.php">Categoria</a></li>

        </ul>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Consultar <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="listar-clientes.php">Clientes</a></li>
          <li><a href="#">Fornecedores</a></li>
          <li><a href="#">Funcionários</a></li>
	  <li><a href="#">Produtos</a></li>
		<li><a href="listar-historico.php">Log de Auditoria</a></li>

        </ul>
      </li>
      <li><a href="#">Ajuda</a></li>

    </ul>
  </div>
</nav>


<div class="container">

<div class="principal">
