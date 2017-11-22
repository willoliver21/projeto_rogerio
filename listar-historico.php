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
  <table id="example2">
    <thead>
      <tr>
           <th>Id</th>
          <th>Data Alteração</th>
          <th>Descrição</th>
         <th>Operação</th>

      </tr>
    </thead>
  </table>
</div>

</body>


<script type="text/javascript">
  $(document).ready(function() {
      $('#example2').dataTable({
        //"sDom": '<"top"i>rt<"bottom"flp><"clear">',
        "bProcessing": true,
        "sAjaxSource": "busca-historico-lista.php",
        "aoColumns": [
               { mData: 'id_historico' },
               { mData: 'data_historico' },
               { mData: 'descricao' },
              { mData: 'descricao' }
            ]
      });
  });
</script>

</html>
<?php include("rodape.php"); ?>
