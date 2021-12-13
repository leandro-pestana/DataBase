<?php include('databaseconnect.php') ?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"/>  
  <title>Bbanco de Dados</title>
</head>
<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">

<div class="container-fluid">
  <div class="row">
    <div class="col-10 offset-1">
    <table class="table table-condensed">
      <thead>
        <tr>
          <th>ID</th>
          <th>Sobrenome</th>
          <th>Sobrenome</th>
          <th>Idade</th>
          <th>Cidade</th>
          <th>Estado</th>
          <th>País</th>
        </tr>
      </thead>
      <tbody>

        <?php while($aux = mysqli_fetch_assoc($sql)) { ?>
        <tr>
          <td> <?php echo $aux["id"]; ?> </td>
          <td> <?php echo $aux["nome"]; ?> </td>
          <td> <?php echo $aux["sobrenome"];  ?> </td>
          <td> <?php echo $aux["idade"]; ?> </td>
          <td> <?php echo $aux["cidade"]; ?> </td>
          <td> <?php echo $aux["estado"]; ?> </td>
          <td> <?php echo $aux["pais"]; ?> </td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
    </div>
  </div>
</div>




<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>