<?php

$codigo = $_POST['codigo'];
$mensaje = $_POST['mensaje'];
$autorizacion = $_POST['autorizacion'];
$referencia = $_POST['referencia'];
$importe = $_POST['importe'];
$mediopago = $_POST['mediopago'];
$financiado = $_POST['financiado'];
$plazos = $_POST['plazos'];
$s_transm = $_POST['s_transm'];
$signature = $_POST['signature'];
$tarjetahabiente = $_POST['tarjetahabiente'];
$cveTipoPago = $_POST['cveTipoPago'];
$fechaPago = $_POST['fechaPago'];
$tarjeta = $_POST['tarjeta'];
$banco = $_POST['banco'];
$secretKey = "WCCBa2c8HdanSiRP=2mV";

echo "codigo: [" . $codigo . "] <br> mensaje: [" . $mensaje . "] <br> autorizacion: [" . $autorizacion . "]\nreferencia: [" . $referencia . "] <br> importe: [" . $importe . "] <br> mediopago: [" . $mediopago . "]\nfinanciado: [" . $financiado . "] <br> plazos: [" . $plazos . "] <br> s_transm: [" . $s_transm . "] <br> \nsignature: [" . $signature . "] <br> \ntarjetahabiente: [" . $tarjetahabiente . "] <br> cveTipoPago: [" . $cveTipoPago . "] <br> \nfechapago: [" . $fechaPago . "] <br> \ntarjeta: [" . $tarjeta . "] <br> banco: [" . $banco . "]";

$chainSignature = $referencia . $importe . $idExpress;
$mySignature = hash_hmac('sha256', $chainSignature, $secretKey);

if ($codigo == "1") {
  $result = "Su pago fue rechazado";
} else if ($codigo == "4") {
  $result = "Se detectó un problema con su pago, verifique con su administrador.";
} else if ($codigo == "5") {
  $result = "Ya se encuentra un pago con la referencia: " . $referencia;
} else if ($codigo == "0" || $codigo == "3") {
  if ($signature != $mySignature) {
    $result = "Error en los datos del pago. No se ha podido concluir la transacción.";
  } else {
    if ($codigo == "3") {
      $result = "El pago se realizó por CLABE, el cobro se realizará dentro de 1 o 2 días hábiles, ";
    } else {
      $result = "El pago se realizó correctamente, número de autorización: " . $autorizacion;
    }
    $request->setAttribute("autorizacion", $autorizacion);
  }
} else {
  $result = "Tuvimos un problema con su pago, favor de comunicarse a los siguientes números (52) 5585-689-231 y (01 800) 5589-982-123.";
}

echo $result;

?> 