<style>
    .alert {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }

    .alert-warning {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }
</style>

<?php

if (!empty($_POST["btnregistrar"])) {
    if ( !empty($_POST["academia"]) and !empty($_POST["profesor"]) and !empty($_POST["dias"]) and !empty($_POST["horario"]) and !empty($_POST["nombre_completo"]) and !empty($_POST["numero_usuario"]) and !empty($_POST["firma"])) {

    include 'conexion.php';

    $academia = $_POST['academia'];
    $profesor = $_POST['profesor'];
    $dias = $_POST['dias'];
    $horario = $_POST['horario'];
    $apartado = $_POST['apartado'];
    $nombre_completo = $_POST['nombre_completo'];
    $numero_usuario = $_POST['numero_usuario'];
    $email = $_POST['email'];
    $paquete = $_POST['paquete'];
    $precio = $_POST['precio'];
    $folio = $_POST['folio'];
    $fecha_hora = $_POST['fecha_hora'];
    $reglamento = $_POST['reglamento'];
    $firma = $_POST['firma'];
    $concepto = $_POST['concepto'];



   /*
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_name=$nombre_completo.'-pago';
    $route = "pagos/".$file_name;

    move_uploaded_file($file_tmp,$route);

    $file_name2 = $_FILES['file2']['name'];
    $file_tmp = $_FILES['file2']['tmp_name'];
    $file_name2=$nombre_completo.'-constancia';
    $route = "constancias/".$file_name2;

    move_uploaded_file($file_tmp,$route);*/
    



    /* Registro Niños */

$sql = $conexion->query( "INSERT INTO `infantiles` (`academia`, `profesor`, `dias`, `horario`, `apartado`, `nombre_completo`, `numero_usuario`, `email`, `paquete`, `precio`, `folio`, `concepto`, `fecha_hora`, `reglamento`, `firma`) 
                                            VALUES ('$academia', '$profesor', '$dias', '$horario', '$apartado', '$nombre_completo', '$numero_usuario', '$email', '$paquete', '$precio', '$folio', '$concepto', '$fecha_hora', '$reglamento', '$firma')");
                           
                 
$sql_query = mysqli_query($conexion,$sql);


if ($sql==1) {
    echo '<div class="alert alert-success"><center>A continuación verifica que los datos sean correctos.</center></div>';
   } else {
    echo '<div class="alert alert-danger">Error al registrar los datos, intenta de nuevo.</div>';
   }
   

}else{
    echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
}

}

echo '<p><center>Los datos ingresados son:</center></p>';
echo '<ul>';
echo '<li><center><strong>Academia:</strong> '.$_POST['academia'].'</center></li>';
echo '<li><center><strong>Ya apartaste lugar con el profesor:</strong> '.$_POST['apartado'].'</center></li>';
echo '<li><center><strong>Profesor:</strong> '.$_POST['profesor'].'</center></li>';
echo '<li><center><strong>Días:</strong> '.$_POST['dias'].'</center></li>';
echo '<li><center><strong>Horarios:</strong> '.$_POST['horario'].'</center></li>';
echo '<li><center><strong>Nombre completo:</strong> '.$_POST['nombre_completo'].'</center></li>';
echo '<li><center><strong>Número de usuario del niño o niña:</strong> '.$_POST['numero_usuario'].'</center></li>';
echo '<li><center><strong>Email:</strong> '.$_POST['email'].'</center></li>';
echo '<li><center><strong>Paquete:</strong> '.$_POST['paquete'].'</center></li>';
echo '<li><center><strong>Precio:</strong> '.$_POST['precio'].'</center></li>';

?>
<br>
<?php

include 'conexion.php';

$precio = $_POST['precio'];

$concepto = $_POST['concepto'];

//$concepto = "BADMINTON-";
$id = uniqid('', true);
$numero = substr($id, 0, 8);

// Incrementar el número y crea la dadena con el formato deseado
$referencia = $concepto . "" . $numero;

$importe = $_POST['precio'];

$idexpress = '3103';

$key = 'WCCBa2c8HdanSiRP=2mV';

$message = $referencia . $importe . $idexpress;

// Firma
$signature = hash_hmac('sha256', $message, $key);

// Crear el botón de pago
$button = '<form action="https://www.adquiramexico.com.mx:443/mExpress/pago/avanzado" method="post"/>
  <input type="hidden" name="importe" value="' . $importe . '"/>
  <input type="hidden" name="referencia" value="'. $referencia .'"/>
  <input type="hidden" name="urlretorno" value="https://clubfrance.org.mx/academias/pago/respuesta.php"/>
  <input type="hidden" name="idexpress" value="'.$idexpress.'"/>
  <input type="hidden" name="financiamiento" value="0"/>
  <input type="hidden" name="plazos" value=""/>
  <input type="hidden" name="mediospago" value="100000"/>
  <input type="hidden" name="signature" value="'. $signature .'"/>
  <center><button type="submit" class="btn btn-primary btn-lg">Pagar ahora</button></center>
  </form>';

echo $button;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <title>Confirmación de datos</title>
</head>
<body>

</body>
</html>