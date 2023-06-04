<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Info</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200&family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <br>
    <div class="container">   
    <h1 class="titulo text-center">Actividades Deportivas</h1>
    <h2 class="titulo text-center">Infantiles</h2>
    </div>
    
    <div class="container principal">
    <div class="row">
        <div class="col-lg-12" text-center>
            <div class="row">

                <!-- Tarjeta 1  BÁDMINTON -->
                
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 1";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 1";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/actividades/deportivas/ninos/badminton.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                <!-- Tarjeta 2 BALLET -->

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 2";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 2";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' y ' . $fila['horario_grupo2'] .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/actividades/deportivas/ninos/ballet.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
                <br>

                <!-- Tarjeta 3  BÀSQUETBOL INFANTIL-->

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 3";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 3";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' . $fila['grupo1'] . ' ' . $fila['horario_grupo1'] .'<br>';
  echo '<span class="subtitulo"></span> ' . $fila['grupo2'] . ' ' . $fila['horario_grupo2'] .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/actividades/deportivas/ninos/basquetbolinfantil.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                <!-- Tarjeta 4 BOX INFANTIL -->

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 4";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 4";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' .'<br>'. $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo"></span> '. $fila['horario_grupo2'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/actividades/deportivas/ninos/boxinfantil.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                <!-- Tarjeta 5 DANZA AÉREA-->

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 5";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 5";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' .'<br>'. $fila['horario_grupo1'] . '<br>' . $fila['horario_grupo2'] . '<br>' . $fila['horario_grupo3'] .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/actividades/deportivas/ninos/danzaaerea.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                 <!-- Tarjeta 6 ESCALADA -->

                 <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 6";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 6";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' .'<br>'. $fila['horario_grupo1'] . '<br>' . $fila['horario_grupo2'] . '<br>' . $fila['horario_grupo3'] .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/actividades/deportivas/ninos/escalada.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                <!-- Tarjeta 7 GIMNASIA-->

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 7";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 7";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span><br>';
  echo '<span class="subtitulo">Lunes y Miércoles</span> ' .'<br>'. $fila['grupo1'] . '<br>' . $fila['horario_grupo1'] . '<br>';
  echo '<span class="subtitulo"></span> ' . $fila['grupo2'] . '<br>' . $fila['horario_grupo2'] . '<br>';
  echo '<span class="subtitulo">Martes y Jueves</span> ' .'<br>'. $fila['grupo3'] . '<br>' . $fila['horario_grupo3'] . '<br>';
  echo '<span class="subtitulo"></span> ' . $fila['grupo4'] . '<br>' . $fila['horario_grupo4'] . '<br>';
  echo '<span class="subtitulo"></span> ' . $fila['grupo5'] . '<br>' . $fila['horario_grupo5'] . '<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/actividades/deportivas/ninos/gimnasia.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
                <br>

                <!-- Tarjeta 8 NATACIÓN -->

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 8";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 8";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' .'<br>'. $fila['grupo1'] . ' ' . $fila['horario_grupo1'] .'<br>';
  echo '<span class="subtitulo"></span> ' . $fila['grupo2'] . ' ' . $fila['horario_grupo2'] .'<br>';
  echo '<span class="subtitulo"></span> ' . $fila['grupo3'] . ' ' . $fila['horario_grupo3'] .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/actividades/deportivas/ninos/natacion.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                <!-- Tarjeta 9 TENIS -->
                
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 17";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 17";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' .'<br>'. $fila['grupo1'] . ' ' . $fila['horario_grupo1'] .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/actividades/deportivas/ninos/tenis.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="container">   
                <h1 class="titulo text-center">Actividades Deportivas</h1>
                <h2 class="titulo text-center">Adultos</h2>
                </div>

                <div class="container principal">
    <div class="row">
        <div class="col-lg-12" text-center>
            <div class="row">
               
                <!-- Tarjeta 9 FITNESS CLUB -->
                
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 9";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 9";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/actividades/deportivas/adultos/fitnessclub.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
                
                <!-- Tarjeta 10 FITNESS CLUB SENIOR -->

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 10";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 10";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/actividades/deportivas/adultos/fitnessclubsenior.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="container">   
                <h1 class="titulo text-center">Actividades Fitness Club</h1>
                </div>
    
    
    <div class="container principal">
    <div class="row">
        <div class="col-lg-12" text-center>
            <div class="row">

                <!-- Tarjeta 11 AQUA FITNESS -->

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 11";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 11";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                           <!-- <a href="">
                            <button class="btn btn-primary">Comprar</button>
                            </a> -->
                        </div>
                    </div>
                    <br>
                </div>

                <!-- Tarjeta 12 BODYPUMP -->

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 12";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 12";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' <br> ' . $fila['horario_grupo2'] .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                           
                        </div>
                    </div>
                    <br>
                </div>
                <br>

                <!-- Tarjeta 13 -->

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 13";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 13";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' . $fila['grupo1'] . ': ' . $fila['horario_grupo1'] . ' y ' . $fila['horario_grupo2'] .'<br>';
  echo '<span class="subtitulo"></span> ' . $fila['grupo2'] . ': ' . $fila['horario_grupo3'] . ' y ' . $fila['horario_grupo4'] .'<br>';
  
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <!-- <a href="">
                            <button class="btn btn-primary">Comprar</button>
                            </a> -->
                        </div>
                    </div>
                    <br>
                </div>

                <!-- Tarjeta 14 -->
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 14";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 14";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' <br> ' . $fila['horario_grupo2'] . ' <br> ' . $fila['horario_grupo3'] . '<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <!-- <a href="">
                            <button class="btn btn-primary">Comprar</button>
                            </a> -->
                        </div>
                    </div>
                    <br>
                </div>

                <!-- Tarjeta 15 -->
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 15";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 15";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' .'<br>'. $fila['grupo1'] . ' ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo"></span> '. $fila['grupo1'] . ' ' . $fila['horario_grupo2'] . ' ' .'<br>';
  echo '<span class="subtitulo"></span> ' . $fila['grupo2'] . ' ' . $fila['horario_grupo3'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <!-- <a href="">
                            <button class="btn btn-primary">Comprar</button>
                            </a> -->
                        </div>
                    </div>
                    <br>
                </div>

                 <!-- Tarjeta 16 -->
                 <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-section border rounded p-3">
                        <div class="card-header-first rounded pb-5">
                        <h2 class="card-header-title text-white pt-3"><?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 16";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo"> </span> ' . $fila['nombre_actividad'] . '<br>';
  
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?></h2>
                        </div>
                        <br>
                    <div class="card-body text-center">
                        <p class="card-text">
<?php
// Conectar a la base de datos
$conn = mysqli_connect('148.72.8.182', 'academias', 'Abrelata$7', 'academias');
$conn->set_charset("utf8");


// Preparar la consulta SQL
$sql = "SELECT * FROM deportes WHERE id = 16";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' .'<br>'. $fila['grupo1'] . ' <br> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo"></span> '. $fila['grupo2'] . ' <br>' . $fila['horario_grupo2'] . ' ' .'<br>';
  echo '<span class="subtitulo">Horario:</span> ' .'<br>'. $fila['grupo3'] . '<br>' . $fila['horario_grupo3'] . '<br>' . $fila['horario_grupo4'] .'<br>';
  echo '<span class="subtitulo"></span> ' . $fila['grupo5'] . '<br>' . $fila['horario_grupo5'] . '<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <!-- <a href="">
                            <button class="btn btn-primary">Comprar</button>
                            </a> -->
                        </div>
                    </div>
                    <br>
                </div>

                </div>
            </div>
        </div>
    </div>

            <br>

                    <footer>
                    <center> <p>© 2023 Club France. Todos los derechos reservados.</p></center> 
                    </footer>

            <br>
 </body>
</html>
