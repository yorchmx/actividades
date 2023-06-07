<?php
// Obtener el mes seleccionado del formulario
$selectedMonth = $_POST['month'];

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

// Consulta SQL para obtener los registros correspondientes al mes seleccionado
$sql = "SELECT * FROM registrosInfantiles WHERE mes = $selectedMonth";

$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    // Recorrer los resultados y almacenarlos en el arreglo $data
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Cerrar la conexión
$conn->close();

// Devolver los resultados en formato JSON
echo json_encode($data);
?>
