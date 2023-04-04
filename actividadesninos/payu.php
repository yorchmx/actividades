<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS y Bootstrap -->

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
    crossorigin="anonymous">

    <title>Pagos Mini Camp</title>
</head>
<body>
<br>
<div class="container px-1">
<center><img src="../img/Logo.png"  width="40%" height="40%"></center>
</div><br>

<div class="container px-4">
<center><h1>Mini Camp Semana Santa y Semana de Pascua 2023</h1></center>
<center><h3>Actividades de esparcimiento y recreación del 3 al 14 de abril</h3></center>
<center><h4>Lunes a viernes de 8:30 a 14:00 h</h4></center><br>
</div>
<center><h1>Pago para Usuarios</h1></center> <br>

<div class="container px-4"> 
  <div class="row gx-5"> 
    <div class="col"> 
     <div class="p-3 border bg-light"> 


<?php

$concepto = "MCSS-1U-2023-";
$id = uniqid('', true);
$numero = substr($id, 0, 8);

// Incrementar el número y crea la dadena con el formato deseado
$referencia = $concepto . "" . $numero;


$importe = '1990.00';

$idexpress = '3082';

$key = 'WCCBa2c8HdanSiRP=2mV';

$message = $referencia . $importe . $idexpress;

// Firma
$signature = hash_hmac('sha256', $message, $key);



// Crear el botón de pago una semana usuarios
$button = '<form action="https://www.adquiramexico.com.mx:443/mExpress/pago/avanzado" method="post"/>
  <input type="hidden" name="importe" value="' . $importe . '"/>
  <input type="hidden" name="referencia" value="'. $referencia .'"/>
  <input type="hidden" name="urlretorno" value="https://clubfrance.org.mx/minicamp-semanasanta-2023/"/>
  <input type="hidden" name="idexpress" value="'.$idexpress.'"/>
  <input type="hidden" name="financiamiento" value="0"/>
  <input type="hidden" name="plazos" value=""/>
  <input type="hidden" name="mediospago" value="100000"/>
  <input type="hidden" name="signature" value="'. $signature .'"/>
  <center><button type="submit" class="btn btn-primary btn-lg">Una Semana Usuarios</button></center>
</form>';

echo $button;

?>
</div>
</div>
</div>
</div>
<br>

<div class="container px-4"> 
  <div class="row gx-5"> 
    <div class="col"> 
     <div class="p-3 border bg-light"> 


<?php

$concepto = "MCSS-2U-2023-";
$id = uniqid('', true);
$numero = substr($id, 0, 8);

// Incrementar el número y crea la dadena con el formato deseado
$referencia = $concepto . "" . $numero;


$importe = '3980.00';

$idexpress = '3082';

$key = 'WCCBa2c8HdanSiRP=2mV';

$message = $referencia . $importe . $idexpress;

// Firma
$signature = hash_hmac('sha256', $message, $key);



// Crear el botón de pago dos semanas usuarios
$button = '<form action="https://www.adquiramexico.com.mx:443/mExpress/pago/avanzado" method="post"/>
  <input type="hidden" name="importe" value="' . $importe . '"/>
  <input type="hidden" name="referencia" value="'. $referencia .'"/>
  <input type="hidden" name="urlretorno" value="https://clubfrance.org.mx/minicamp-semanasanta-2023/"/>
  <input type="hidden" name="idexpress" value="'.$idexpress.'"/>
  <input type="hidden" name="financiamiento" value="0"/>
  <input type="hidden" name="plazos" value=""/>
  <input type="hidden" name="mediospago" value="100000"/>
  <input type="hidden" name="signature" value="'. $signature .'"/>
  <center><button type="submit" class="btn btn-primary btn-lg" hidden>Dos Semanas Usuarios</button></center>
</form>';

echo $button;

?>


</div>
</div>
</div>
</div>
<br>

<center><h1>Pago para Externos</h1></center> <br>

<div class="container px-4"> 
  <div class="row gx-5"> 
    <div class="col"> 
     <div class="p-3 border bg-light"> 


<?php

$concepto = "MCSS-1E-2023-";
$id = uniqid('', true);
$numero = substr($id, 0, 8);

// Incrementar el número y crea la dadena con el formato deseado
$referencia = $concepto . "" . $numero;


$importe = '2500.00';

$idexpress = '3082';

$key = 'WCCBa2c8HdanSiRP=2mV';

$message = $referencia . $importe . $idexpress;

// Firma
$signature = hash_hmac('sha256', $message, $key);



// Crear el botón de pago una semana externos
$button = '<form action="https://www.adquiramexico.com.mx:443/mExpress/pago/avanzado" method="post"/>
  <input type="hidden" name="importe" value="' . $importe . '"/>
  <input type="hidden" name="referencia" value="'. $referencia .'"/>
  <input type="hidden" name="urlretorno" value="https://clubfrance.org.mx/minicamp-semanasanta-2023/"/>
  <input type="hidden" name="idexpress" value="'.$idexpress.'"/>
  <input type="hidden" name="financiamiento" value="0"/>
  <input type="hidden" name="plazos" value=""/>
  <input type="hidden" name="mediospago" value="100000"/>
  <input type="hidden" name="signature" value="'. $signature .'"/>
  <center><button type="submit" class="btn btn-primary btn-lg">Una Semana Externos</button></center>
</form>';

echo $button;

?>

</div>
</div>
</div>
</div>
<br>

<div class="container px-4"> 
  <div class="row gx-5"> 
    <div class="col"> 
     <div class="p-3 border bg-light"> 


<?php

$concepto = "MCSS-2E-2023-";
$id = uniqid('', true);
$numero = substr($id, 0, 8);

// Incrementar el número y crea la dadena con el formato deseado
$referencia = $concepto . "" . $numero;


$importe = '5000.00';

$idexpress = '3082';

$key = 'WCCBa2c8HdanSiRP=2mV';

$message = $referencia . $importe . $idexpress;

// Firma
$signature = hash_hmac('sha256', $message, $key);



// Crear el botón de pago dos semanas usuarios
$button = '<form action="https://www.adquiramexico.com.mx:443/mExpress/pago/avanzado" method="post"/>
  <input type="hidden" name="importe" value="' . $importe . '"/>
  <input type="hidden" name="referencia" value="'. $referencia .'"/>
  <input type="hidden" name="urlretorno" value="https://clubfrance.org.mx/minicamp-semanasanta-2023/"/>
  <input type="hidden" name="idexpress" value="'.$idexpress.'"/>
  <input type="hidden" name="financiamiento" value="0"/>
  <input type="hidden" name="plazos" value=""/>
  <input type="hidden" name="mediospago" value="100000"/>
  <input type="hidden" name="signature" value="'. $signature .'"/>
  <center><button type="submit" class="btn btn-primary btn-lg" hidden>Dos Semanas Externos</button></center>
</form>';

echo $button;

?>

</div>
</div>
</div>
</div>