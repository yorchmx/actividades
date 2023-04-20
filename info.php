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
    </div>
    
    <div class="container principal">
    <div class="row">
        <div class="col-lg-12" text-center>
            <div class="row">

                <!-- Tarjeta 1 -->
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
                            <a href="https://clubfrance.org.mx/academias/actividadesninos/badminton.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
                <!-- Tarjeta 2 -->
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
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/academias/actividadesninos/ballet.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
                <br>

                <!-- Tarjeta 3 -->
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
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/academias/actividadesninos/basquetbolinfantil.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                <!-- Tarjeta 4 -->
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
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/academias/actividadesninos/boxinfantil.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                <!-- Tarjeta 5 -->
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
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/academias/actividadesninos/danzaaerea.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                 <!-- Tarjeta 6 -->
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
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/academias/actividadesninos/escalada.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
                <!-- Tarjeta 7 -->
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
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/academias/actividadesninos/gimnasia.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
                <br>

                <!-- Tarjeta 8 -->
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
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>
</p>
                            <br>
                            <a href="https://clubfrance.org.mx/academias/actividadesninos/natacion.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                <!-- Tarjeta 9 -->
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
                            <a href="https://clubfrance.org.mx/academias/actividadesadultos/fitnessclub.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
                
                <!-- Tarjeta 10 -->
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
                            <a href="https://clubfrance.org.mx/academias/actividadesadultos/fitnessclubsenior.php">
                            <button class="btn btn-primary">Comprar</button>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>

                </div>
            </div>
        </div>
    </div>
 </body>
</html>
