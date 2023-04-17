<?php
if (!empty($_POST["btnregistrar"])) {



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

    if (empty($academia) || empty($profesor) || empty($dias) || empty($horario) || empty($nombre_completo) || empty($numero_usuario) || empty($firma)) {
        echo '<div class="alert alert-warning">Por favor, complete todos los campos requeridos</div>';
    } else {
        $mysqli = new mysqli("148.72.8.182", "academias", "Abrelata$7", "academias");
        $mysqli->set_charset("utf8");
        if ($mysqli->connect_error) {
            die("Falló la conexión: " . $mysqli->connect_error);
        }
        $stmt = $mysqli->prepare("INSERT INTO `adultos` (`academia`, `profesor`, `dias`, `horario`, `apartado`, `nombre_completo`, `numero_usuario`, `email`, `paquete`, `precio`, `folio`,  `fecha_hora`, `reglamento`, `firma`) 
                                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssss", $academia, $profesor, $dias, $horario, $apartado, $nombre_completo, $numero_usuario, $email, $paquete, $precio, $folio, $fecha_hora, $reglamento, $firma);
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
