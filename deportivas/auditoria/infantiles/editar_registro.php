<?php
// Verificar si se recibió un ID válido como parámetro
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Conexión a la base de datos
    $servername = "148.72.8.182";
    $username = "academias";
    $password = "Abrelata$7";
    $dbname = "academias";

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error al conectar con la base de datos: " . $conn->connect_error);
    }

    // Verificar si se envió el formulario de edición
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los datos del formulario de edición
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
        $concepto = $_POST['concepto'];
        $fecha_registro = $_POST['fecha_registro'];
        $reglamento = $_POST['reglamento'];
        $firma = $_POST['firma'];
       

        // Actualizar los campos correspondientes en la base de datos
        $sql = "UPDATE registrosInfantiles SET academia='$academia', profesor='$profesor', dias='$dias', horario='$horario', apartado='$apartado', nombre='$nombre', apellido='$apellido', numero_usuario='$numero_usuario', email='$email', paquete='$paquete', precio='$precio', folio='$folio', concepto='$concepto', fecha_registro='$fecha_registro', reglamento='$reglamento', firma='$firma' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            // Redireccionar al listado de registros después de la edición exitosa
            header("Location: badminton.php");
        
            // Almacenar el mensaje de confirmación en la variable de sesión
            session_start();
            $_SESSION['mensaje'] = "La edición se realizó correctamente.";
            exit();
        } else {
            // Mostrar un mensaje de error si ocurrió un problema al actualizar el registro
            echo "Error al actualizar el registro: " . $conn->error;
        }
    }

    // Obtener los datos del registro actual
    $sql = "SELECT * FROM registrosInfantiles WHERE id=$id";
    $result = $conn->query($sql);

    // Verificar si se encontró el registro
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $academia = $row['academia'];
        $profesor = $row['profesor'];
        $dias = $row['dias'];
        $horario = $row['horario'];
        $apartado = $row['apartado'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $numero_usuario = $row['numero_usuario'];
        $email = $row['email'];
        $paquete = $row['paquete'];
        $precio = $row['precio'];
        $folio = $row['folio'];
        $concepto = $row['concepto'];
        $fecha_registro = $row['fecha_registro'];
        $reglamento = $row['reglamento'];
        $firma = $row['firma'];
      
    } else {
        // Mostrar un mensaje de error si no se encontró el registro
        echo "Registro no encontrado";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
} else {
    // Mostrar un mensaje de error si no se recibió un ID válido
    echo "ID inválido";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .form-control {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Editar Registro</h2>
        <!-- Agregar la banda de mensajes -->
        <?php
        // Verificar si se ha almacenado un mensaje en la variable de sesión
        if (isset($_SESSION['mensaje'])) {
            // Mostrar el mensaje de confirmación en la banda
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['mensaje'] . '</div>';

            // Eliminar el mensaje de la variable de sesión
            unset($_SESSION['mensaje']);
        }
        ?>
        <!-- Fin de la banda de mensajes -->
        <form method="POST">
            <div class="row">
                <div class="col-md-6">
                    <label for="academia" class="form-label">Academia:</label>
                    <input type="text" name="academia" id="academia" class="form-control" value="<?php echo $academia; ?>">
                </div>
                <div class="col-md-6">
                    <label for="profesor" class="form-label">Profesor:</label>
                    <input type="text" name="profesor" id="profesor" class="form-control" value="<?php echo $profesor; ?>">
                </div>
                <div class="col-md-6">
                    <label for="dias" class="form-label">Días:</label>
                    <input type="text" name="dias" id="dias" class="form-control" value="<?php echo $dias; ?>">
                </div>
                <div class="col-md-6">
                    <label for="horario" class="form-label">Horario:</label>
                    <input type="text" name="horario" id="horario" class="form-control" value="<?php echo $horario; ?>">
                </div>
                <div class="col-md-6">
                    <label for="apartado" class="form-label">Apartado:</label>
                    <input type="text" name="apartado" id="apartado" class="form-control" value="<?php echo $apartado; ?>">
                </div>
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre; ?>">
                </div>
                <div class="col-md-6">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $apellido; ?>">
                </div>
                <div class="col-md-6">
                    <label for="numero_usuario" class="form-label">Número de Usuario:</label>
                    <input type="text" name="numero_usuario" id="numero_usuario" class="form-control" value="<?php echo $numero_usuario; ?>">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                </div>
                <div class="col-md-6">
                    <label for="paquete" class="form-label">Paquete:</label>
                    <input type="text" name="paquete" id="paquete" class="form-control" value="<?php echo $paquete; ?>">
                </div>
                <div class="col-md-6">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="text" name="precio" id="precio" class="form-control" value="<?php echo $precio; ?>">
                </div>
                <div class="col-md-6">
                    <label for="folio" class="form-label">Folio:</label>
                    <input type="text" name="folio" id="folio" class="form-control" value="<?php echo $folio; ?>">
                </div>
                <div class="col-md-6">
                    <label for="concepto" class="form-label">Concepto:</label>
                    <input type="text" name="concepto" id="concepto" class="form-control" value="<?php echo $concepto; ?>">
                </div>
                <div class="col-md-6">
                    <label for="fecha_registro" class="form-label">Fecha de Registro:</label>
                    <input type="text" name="fecha_registro" id="fecha_registro" class="form-control" value="<?php echo $fecha_registro; ?>">
                </div>
                <div class="col-md-6">
                    <label for="reglamento" class="form-label">Reglamento:</label>
                    <input type="text" name="reglamento" id="reglamento" class="form-control" value="<?php echo $reglamento; ?>">
                </div>
                <div class="col-md-6">
                    <label for="firma" class="form-label">Firma:</label>
                    <input type="text" name="firma" id="firma" class="form-control" value="<?php echo $firma; ?>">
                </div>
                <br><br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <a href="badminton.php" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </form>
        <br>
    </div>
</body>
</html>
