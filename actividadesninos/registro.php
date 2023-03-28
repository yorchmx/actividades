<?php

if (!empty($_POST["btnregistrar"])) {
    if ( !empty($_POST["academia"]) and !empty($_POST["profesor"]) and !empty($_POST["dias"]) and !empty($_POST["horario"]) and !empty($_POST["nombre_completo"]) and !empty($_POST["numero_usuario"]) and !empty($_POST["firma"])) {

    include 'conexion.php';

    $academia = $_POST['academia'];
    $profesor = $_POST['profesor'];
    $dias = $_POST['dias'];
    $horario = $_POST['horario'];
    $nombre_completo = $_POST['nombre_completo'];
    $numero_usuario = $_POST['numero_usuario'];
    $email = $_POST['email'];
    $paquete = $_POST['paquete'];
    $precio = $_POST['precio'];
    $folio = $_POST['folio'];
    $fecha_hora = $_POST['fecha_hora'];
    $reglamento = $_POST['reglamento'];
    $firma = $_POST['firma'];


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

$sql = $conexion->query( "INSERT INTO `infantiles` (`academia`, `profesor`, `dias`, `horario`, `nombre_completo`, `numero_usuario`, `email`, `paquete`, `precio`, `folio`,  `fecha_hora`, `reglamento`, `firma`) 
                                            VALUES ('$academia', '$profesor', '$dias', '$horario', '$nombre_completo', '$numero_usuario', '$email', '$paquete', '$precio', '$folio', '$fecha_hora', '$reglamento', '$firma')");
                           
                 
$sql_query = mysqli_query($conexion,$sql);


if ($sql==1) {
    echo '<div class="alert alert-success">El registro ha sido realizado exitosamente. A continuación sera redirigido para realizar el pago.</div>';
   } else {
    echo '<div class="alert alert-danger">Error al registrar los datos, intenta de nuevo.</div>';
   }
   

}else{
    echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
}
}

?>

   