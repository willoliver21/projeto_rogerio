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
          <th>id_cliente</th>
          <th>data_nascimento</th>
          <th>renda</th>
          <th>pessoa_id_pessoa</th>
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
              { mData: 'id_cliente' },
              { mData: 'data_nascimento' },
              { mData: 'renda' },
              { mData: 'pessoa_id_pessoa' }
            ]
      });
  });
</script>

</html>
<?php include("rodape.php"); ?>
