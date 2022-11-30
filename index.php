<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Revisando PHP</title>
</head>
<body>
  <div class="container mt-3">
    <form action="" method="POST">
      <div class="row">
        <div class="col-lg-7">
          <input type="text" name="nome" id="nome" required class="form-control" />
        </div>
        <div class="col-lg-2">
          <input type="number" name="idade" id="idade" required class="form-control" />
        </div>
        <div class="col-lg-3 d-grid">
          <input type="submit" value="Enviar" name="enviar" class="btn btn-primary d-block" />
        </div>
      </div>
    </form>
    <?php
          if (isset($_POST['enviar'])) {
            $idade = $_POST['idade'];
            $nome = $_POST['nome'];
            if ($idade >= 18 && $idade <= 100) {
              print "Olá <strong>$nome</strong>, você tem $idade anos e você já é maior de idade.";
              return;
            }
            if($idade <=0 OR $idade > 100){
              print "Olá <strong>$nome</strong>, informe uma idade válida.";
              return;
            } 
              print "Olá <strong>$nome</strong>, você tem $idade anos e você ainda não é maior de idade.";
          }
    ?>
  </div>
</body>
</html>