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

// Consulta SQL para obtener los registros correspondientes a la academia "Bádminton" y al mes seleccionado
$selectedMonth = isset($_GET['month']) ? $_GET['month'] : '';
$sql = "SELECT * FROM registrosInfantiles WHERE academia = 'Badminton'";

if ($selectedMonth != '') {
    $sql .= " AND MONTH(fecha_registro) = $selectedMonth";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
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
    <h2>Registros de la academia Bádminton</h2>
    <form action="" method="GET">
        <label for="month">Filtrar por mes:</label>
        <select name="month" id="month">
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
                    $monthName = strftime("%B", mktime(0, 0, 0, $monthValue, 1));
                    echo "<option value='$monthValue' " . ($selectedMonth == $monthValue ? 'selected' : '') . ">$monthName</option>";
                }
            }
            ?>
        </select>
        <input type="submit" value="Filtrar">
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Mes</th>
            <th>Fecha de Registro</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Recorrer los resultados y mostrar los datos en la tabla
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["apellido"] . "</td>";
                echo "<td>" . $meses[$row["mes"]] . "</td>";
                echo "<td>" . $row["fecha_registro"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron registros</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
