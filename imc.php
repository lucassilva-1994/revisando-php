<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Calculo IMC</title>
</head>
<body>
  <div class="container mt-3">
    <form action="" method="POST">
      <div class="row">
        <div class="col-lg-2">
          <input type="text" name="altura" id="altura" required class="form-control" 
            placeholder="Altura"/>
        </div>
        <div class="col-lg-2">
          <input type="text" name="peso" id="peso" required class="form-control" 
          placeholder="Peso"/>
        </div>
        <div class="col-lg-2 d-grid">
          <input type="submit" value="Calcular" name="calculo" class="btn btn-primary d-block" />
        </div>
      </div>
    </form>
    <?php
        if(isset($_POST['calculo'])){
            $altura = $_POST['altura'];
            $peso = $_POST['peso'];
            $imc = number_format($peso/($altura*$altura),2);
            print "<strong>Altura:</strong> $altura<br/>  <strong>Peso:</strong> $peso<br/>  <strong>IMC:</strong> $imc <br/>";
            if($imc < 18.5){
                print "<strong>Você está abaixo do peso.</strong>";
            }
            else if($imc > 18.5 && $imc < 24.9){
                print "<strong>Você está com peso normal.</strong>";
            }
            else{
                print "<strong>Você está acima do peso.</strong>";
            }
        }
    ?>
  </div>
</body>
</html>