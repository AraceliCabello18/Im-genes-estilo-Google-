<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</head>
<body>
  <div class="container">
    <h2>Indice de Masa Corporal</h2>
    <div class="row">
      <div class="col-sm-4">
        <form class="" action="obtenerDatos.php" method="POST">
          <label>Peso</label>
          <input type="text" name="peso" placeholder=" ingresa tu peso" class="from-control">
          <br>
          <label>Altura</label>
          <input type="text" name="altura"placeholder=" ingresa tu altura" class="from-control">
          <br>
          <button class="btn btn-danger">Enviar</button>
          <br>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php
$peso=$_POST['peso'];
$altura=$_POST['altura'];
//convertir cm a m
$altu = $altura/100;
//IMC = Peso(kg)/altura*2(m)
$imc = $peso/($altura*$altura);

if ($imc>40) {
  echo "Tu IMC es: ".$imc."Tu Diagnostico es: Problema de Obesidad Tipo III";
 
} else if ($imc>39.99) {
  echo "Tu IMC es: ".$imc."Tu Diagnostico es: Problema de Obesidad Tipo II";
 
}else if ($imc>29.99) {
  echo "Tu IMC es: ".$imc."Tu Diagnostico es: Problema de Obesidad Tipo I";
}else if ($imc>27.00) {
  echo "Tu IMC es: ".$imc."Tu Diagnostico es: Problema de Obesidad";
}else if ($imc>26.99) {
  echo "Tu IMC es: ".$imc."Tu Diagnostico es: Problema de sobre peso";
 
 }else if ($imc>24.99) {
  echo"Tu IMC es: ".$imc."Tu Diagnostico es: Peso Normal";
  
}else if ($imc>18.00) {
  echo"Tu IMC es: ".$imc."Tu Diagnostico es: Problema de Peso Bajo"; 
}else {
  echo"Tu IMC es: ".$imc."Tu Diagnostico es: Algo salio mal";
  }
  ?>
