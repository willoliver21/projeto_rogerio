<?php
include("cabecalho.php");
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.10.5/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.10.5/jquery.dataTables.js"></script>
</head>
<body>

<div class="container">
  <h2></h2>
  <table id="example">
    <thead>
      <tr>
           <th>Nome</th>
          <th>RG</th>
          <th>CPF</th>
         <th>Data Cadastro</th>
         <th>Telefone</th>
         <th>Renda</th>
         <th>Data Nascimento</th>
         <th>Rua</th>
         <th>Numero</th>
         <th>Bairro</th>
         <th>CEP</th>

      </tr>
    </thead>
  </table>
</div>

</body>


<script type="text/javascript">
  $(document).ready(function() {
      $('#example').dataTable({
        //"sDom": '<"top"i>rt<"bottom"flp><"clear">',
        "bProcessing": true,
        "sAjaxSource": "busca-clientes-lista.php",
        "aoColumns": [
               { mData: 'nome' },
               { mData: 'rg_ie' },
               { mData: 'cpf_cnpj' },
               { mData: 'data_cadastro' },
               { mData: 'telefone' },
               { mData: 'renda' },
               { mData: 'data_nascimento' },
               { mData: 'rua' },
               { mData: 'numero' },
               { mData: 'bairro' },
              { mData: 'cep' }
            ]
      });
  });
</script>

</html>
<?php include("rodape.php"); ?>
