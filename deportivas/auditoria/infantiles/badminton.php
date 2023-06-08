<!-- Agregar los enlaces a los estilos de Bootstrap en el head de tu documento HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">

<!-- Agregar los enlaces a los scripts de Bootstrap justo antes de cerrar el body de tu documento HTML -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Resto del código -->
<?php
// Conexión a la base de datos
$servername = "148.72.8.182";
$username = "academias";
$password = "Abrelata$7";
$dbname = "academias";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Consulta SQL para obtener los meses disponibles en los registros
$sqlMonths = "SELECT DISTINCT MONTH(fecha_registro) AS month FROM registrosInfantiles";
$resultMonths = $conn->query($sqlMonths);

// Consulta SQL para obtener los años disponibles en los registros
$sqlYears = "SELECT DISTINCT YEAR(fecha_registro) AS year FROM registrosInfantiles";
$resultYears = $conn->query($sqlYears);

// Consulta SQL para obtener los registros correspondientes a la academia "Bádminton" y al mes y año seleccionados
$selectedMonth = isset($_GET['month']) ? $_GET['month'] : '';
$selectedYear = isset($_GET['year']) ? $_GET['year'] : '';
$sql = "SELECT * FROM registrosInfantiles WHERE academia = 'Badminton'";

if ($selectedMonth != '') {
    $sql .= " AND MONTH(fecha_registro) = $selectedMonth";
}

if ($selectedYear != '') {
    $sql .= " AND YEAR(fecha_registro) = $selectedYear";
}

// Agregar paginación a la consulta
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$recordsPerPage = 10;
$offset = ($currentPage - 1) * $recordsPerPage;
$sql .= " LIMIT $offset, $recordsPerPage";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Agregar el meta tag viewport para asegurarse de que el sitio se vea correctamente en dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Enlaces a los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">

    <style>
        /* Estilos personalizados */
        .container {
            margin-top: 50px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registros de la Academía Bádminton</h2>
        <form action="" method="GET" class="mb-3">
            <div class="row">
                <div class="col-md-3">
                    <label for="month" class="form-label">Filtrar por mes:</label>
                    <select name="month" id="month" class="form-select">
                        <option value="">Todos los meses</option>
                        <?php
                        $meses = array(
                            1 => 'enero',
                            2 => 'febrero',
                            3 => 'marzo',
                            4 => 'abril',
                            5 => 'mayo',
                            6 => 'junio',
                            7 => 'julio',
                            8 => 'agosto',
                            9 => 'septiembre',
                            10 => 'octubre',
                            11 => 'noviembre',
                            12 => 'diciembre'
                        );

                        if ($resultMonths->num_rows > 0) {
                            while ($rowMonth = $resultMonths->fetch_assoc()) {
                                $monthValue = $rowMonth['month'];
                                $monthName = $meses[$monthValue];
                                echo "<option value='$monthValue' " . ($selectedMonth == $monthValue ? 'selected' : '') . ">$monthName</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="year" class="form-label">Filtrar por año:</label>
                    <select name="year" id="year" class="form-select">
                        <option value="">Todos los años</option>
                        <?php
                        if ($resultYears->num_rows > 0) {
                            while ($rowYear = $resultYears->fetch_assoc()) {
                                $yearValue = $rowYear['year'];
                                echo "<option value='$yearValue' " . ($selectedYear == $yearValue ? 'selected' : '') . ">$yearValue</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-3 align-self-end">
                    <label for="submit" class="form-label">&nbsp;</label> <br>
                    <input type="submit" value="Filtrar" id="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
        <table class="table">
    <thead>
        <tr class="text-center">
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Paquete</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["apellido"] . "</td>";
                echo "<td>" . $row["paquete"] . "</td>";
                echo "<td><a href='editar_registro.php?id=" . $row["id"] . "' class='btn btn-primary'>Editar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No se encontraron registros</td></tr>";
        }
        ?>
    </tbody>
</table>
                <?php
    // Calcular el número total de páginas para la paginación
    $sqlTotal = "SELECT COUNT(*) AS total FROM registrosInfantiles WHERE academia = 'Badminton'";
    $resultTotal = $conn->query($sqlTotal);
    $rowTotal = $resultTotal->fetch_assoc();
    $totalRecords = $rowTotal['total'];
    $totalPages = ceil($totalRecords / $recordsPerPage);

    // Mostrar la paginación solo si hay más de una página
    if ($totalPages > 1) {
        echo "<ul class='pagination'>";
        if ($currentPage > 1) {
            echo "<li class='page-item'><a class='page-link' href='?page=" . ($currentPage - 1) . "&month=$selectedMonth&year=$selectedYear'>Anterior</a></li>";
        }
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li class='page-item" . ($currentPage == $i ? ' active' : '') . "'><a class='page-link' href='?page=$i&month=$selectedMonth&year=$selectedYear'>$i</a></li>";
        }
        if ($currentPage < $totalPages) {
            echo "<li class='page-item'><a class='page-link' href='?page=" . ($currentPage + 1) . "&month=$selectedMonth&year=$selectedYear'>Siguiente</a></li>";
        }
        echo "</ul>";
    }
    ?>
</div>

<footer class="text-center">
    <p>&copy; <?php echo date('Y'); ?> Club France</p>
</footer>

</body>
</html>
<?php
