<?php
$servername = "148.72.8.182";
$username = "academias";
$password = "Abrelata$7";
$dbname = "academias";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$numero = $_POST["numero"];
$sql = "SELECT * FROM matriculas WHERE numero = $numero";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "existe";
} else {
    echo "no_existe";
}

mysqli_close($conn);
?>