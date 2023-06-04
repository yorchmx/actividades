<?php
if (!empty($_POST["btnregistrar"])) {



    $academia = $_POST['academia'];
    $profesor = $_POST['profesor'];
    $dias = $_POST['dias'];
    $horario = $_POST['horario'];
    $apartado = $_POST['apartado'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numero_usuario = $_POST['numero_usuario'];
    $email = $_POST['email'];
    $paquete = $_POST['paquete'];
    $precio = $_POST['precio'];
    $folio = $_POST['folio'];
    $fecha_registro = $_POST['fecha_registro'];
    $reglamento = $_POST['reglamento'];
    $firma = $_POST['firma'];  

    if (empty($academia) || empty($profesor) || empty($dias) || empty($horario) || empty($nombre) ||  empty($apellido) || empty($numero_usuario) || empty($firma)) {
        echo '<div class="alert alert-warning">Por favor, complete todos los campos requeridos</div>';
    } else {
        $mysqli = new mysqli("148.72.8.182", "academias", "Abrelata$7", "academias");
        $mysqli->set_charset("utf8");
        if ($mysqli->connect_error) {
            die("Falló la conexión: " . $mysqli->connect_error);
        }
        $stmt = $mysqli->prepare("INSERT INTO `registrosAdultos` (`academia`, `profesor`, `dias`, `horario`, `apartado`, `nombre`, `apellido`, `numero_usuario`, `email`, `paquete`, `precio`, `folio`,  `fecha_registro`, `reglamento`, `firma`) 
                                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssss", $academia, $profesor, $dias, $horario, $apartado, $nombre, $apellido, $numero_usuario, $email, $paquete, $precio, $folio, $fecha_registro, $reglamento, $firma);
        if ($stmt->execute()) {
            echo '<div class="alert alert-success">Confirma tus datos.</div>';
            // Redireccionar a la página deseada
            header("Location: pay.php");
            exit();
        } else {
            echo '<div class="alert alert-danger">Error al procesar la solicitud</div>';
        }
    }
}
?>
