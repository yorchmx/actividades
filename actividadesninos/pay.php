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
    $lugar = $_POST['lugar'];


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

$sql = $conexion->query( "INSERT INTO `infantiles` (`academia`, `profesor`, `dias`, `horario`, `apartado`, `nombre_completo`, `numero_usuario`, `email`, `paquete`, `precio`, `folio`,  `fecha_hora`, `reglamento`, `firma`) 
                                            VALUES ('$academia', '$profesor', '$dias', '$horario', '$apartado', '$nombre_completo', '$numero_usuario', '$email', '$paquete', '$precio', '$folio', '$fecha_hora', '$reglamento', '$firma')");
                           
                 
$sql_query = mysqli_query($conexion,$sql);


if ($sql==1) {
    echo '<div class="alert alert-success">El registro ha sido realizado exitosamente. A continuación verifica que los datos sean correctos.</div>';
   } else {
    echo '<div class="alert alert-danger">Error al registrar los datos, intenta de nuevo.</div>';
   }
   

}else{
    echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
}
}
echo '<p>Los datos ingresados son:</p>';
echo '<ul>';
echo '<li>Academia: '.$_POST['academia'].'</li>';
echo '<li>Profesor: '.$_POST['profesor'].'</li>';
echo '<li>Días: '.$_POST['dias'].'</li>';
echo '<li>Horario: '.$_POST['horario'].'</li>';
echo '<li>Ya apartaste lugar con el profesor: '.$_POST['apartado'].'</li>';
echo '<li>Nombre completo: '.$_POST['nombre_completo'].'</li>';
echo '<li>Número de usuario: '.$_POST['numero_usuario'].'</li>';
echo '<li>Email: '.$_POST['email'].'</li>';
echo '<li>Paquete: '.$_POST['paquete'].'</li>';
echo '<li>Precio: '.$_POST['precio'].'</li>';
echo '<li>Lugar: '.$_POST['lugar'].'</li>';

?>

<?php

include 'conexion.php';

$precio = $_POST['precio'];

$concepto = "BADMINTON-";
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

