<!-- Variables -->

<?php
$lugar = "Varios";
$academia = "Fitness Club";
$concepto = "FITNESSCLUB";
$profesor = "Varios";
$dias = "Lunes a Domingo";
$horario = "07:00 a 19:00 horas"; 
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Fitness Club</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/504bc46ce6.js" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

   </head>
   
<body>

  <?php
    date_default_timezone_set('America/Mexico_City');
    $currentDateTime = date('Y-m-d H:i:s');
  ?>

<?php
    
    include "conexion.php";
?>
 
  <div class="container">
  <!--<center><img src="img/Logo.png" width="30%" height="30%"></center>-->
  <br>
  
  <div class="content">
       <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Club France</div>
          <div class="text-one">Av. Francia 75, Col. Florida</div>
          <div class="text-two">Álvaro Obregón, CDMX.</div>
        </div>
      <footer>
  <center> <p>© 2023 Club France. Todos los derechos reservados.</p></center> 
  </footer>
      </div>
      <div class="right-side">
       
      <!--<div class="topic-text">Actividades Infantiles</div>-->
      

<center><img src="img/Logo.png" width="50%" height="50%"></center><br>
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
  echo '<h3><center>Actividades Adultos</center></h3>  '. '';
  echo '<div style="text-align:center; font-weight:bold; font-size:27px;">' . $fila['nombre_actividad'] . '<br></div>';
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' . $fila['horario_grupo2'] .' ' . $fila['horario_grupo3'] .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>


<br>

<h5>A continuación captura los siguientes datos, selecciona el paquete y realiza el pago.</h5>

  <form action="pay.php" method="POST" enctype="multipart/form-data">

        <?php 
            include_once "registro.php";
         ?>

    

        <div id="mi-elemento">
            <input type="text" id="academia" name="academia" value="<?=$academia?>" placeholder="" readonly hidden>
        </div>

        <div id="mi-elemento">
            <input type="text" id="profesor" name="profesor" value="<?=$profesor?>" placeholder="" readonly hidden >
        </div>

        <div id="mi-elemento">
            <input type="text" id="dias" name="dias" value="<?=$dias?>" placeholder="" readonly hidden>
        </div>

        <div id="mi-elemento">
            <input type="text" id="horario" name="horario" value="<?=$horario?>" placeholder="" readonly hidden>
        </div>

        <div id="mi-elemento">
        <input type="datetime" id="fecha_registro" name="fecha_registro" value="<?=  $currentDateTime?>" placeholder="" readonly hidden>
        </div>

         <!-- <h5>Folio:</h5> -->
         <div id="mi-elemento">
        <?php
    					$numero_aleatorio = rand(10000, 99999);
    					echo '<input type="text" id="folio" name="folio" value="'. $numero_aleatorio . '" placeholder="" readonly hidden>';
  					?><br>
        </div>

        <div id="mi-elemento">
        <input type="text" id="concepto" name="concepto" value="<?=$concepto?>" placeholder="" readonly hidden>
        </div>
 
        <h5>Primer nombre y primer apellido:</h5>
        <div class="input-box">
        
        <input id="nombre_completo" name="nombre_completo" type="text" placeholder="Primer nombre y primer apellido" required>
        </div>

        <h5>Número de usuario:</h5>
        <div class="input-box">
        
        <input id="numero_usuario" name="numero_usuario" type="text" placeholder="Poner correctamente el número de usuario" >
        </div>

        <h5>Paquetes Mensuales:</h5>
        
        <div class="input-field">
        <select name="paquete" id="paquete" onchange="actualizarPrecio()" required><br>
              <option disabled selected>Selecciona un paquete mensual</option>
    					<option value="Una Clase">Una Clase</option>
    					<option value="Paquete 1 (Una clase a la semana)">Paquete 1 (Una clase a la semana)</option>
    					<option value="Paquete 2 (Dos clases a la semana)">Paquete 2 (Dos clases a la semana)</option>
    					<option value="Paquete 3 (Sin límite de clases)">Paquete 3 (Sin límite de clases)</option>
  					</select>
      </div><br>

      <h5>Precio:</h5>
          <div class="input-box">
          <input type="text" id="precio" name="precio" value="" placeholder="" readonly>
          </div>
  
      
          
      <!--  <h5>Fecha y hora:</h5> -->
      
        
      <br>
    
      <div class="d-grid gap-2">
       <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok" >Pagar</button>
      </div>
      
     <br>
     
     <script>
        
     </script>
  </form>


  

<script>
  
  function actualizarPrecio() {
  const paqueteSelect = document.getElementById("paquete");
  const precioInput = document.getElementById("precio");

  // Obtener la fecha actual
  const hoy = new Date();
  const diaDelMes = hoy.getDate();

  switch (paqueteSelect.value) {
    case "Una Clase":
      precioInput.value = "170.00";
      break;
    case "Paquete 1 (Una clase a la semana)":
      if (diaDelMes >= 11) {
        precioInput.value = "540.00"; // 8% más que $500.00
      } else {
        precioInput.value = "500.00";
      }
      break;
    case "Paquete 2 (Dos clases a la semana)":
      if (diaDelMes >= 11) {
        precioInput.value = "864.00"; // 8% más que $800.00
      } else {
        precioInput.value = "800.00";
      }
      break;
    case "Paquete 3 (Sin límite de clases)":
      if (diaDelMes >= 11) {
        precioInput.value = "1188.00"; // 8% más que $1,100.00
      } else {
        precioInput.value = "1100.00";
      }
      break;
    default:
      precioInput.value = "";
  }
}


</script>

<script> // Right click disbled
		function disableIE() {
		if (document.all) {
			return false;
		}}
		function disableNS(e) {
			if (document.layers || (document.getElementById && !document.all)) {
				if (e.which==2 || e.which==3) {
					return false;
				}
			}
		}
		if (document.layers) {
			document.captureEvents(Event.MOUSEDOWN);
			document.onmousedown = disableNS;
		} 
		else {
			document.onmouseup = disableNS;
			document.oncontextmenu = disableIE;
		}
		document.oncontextmenu=new Function("return false");
	</script>

</body>
</html>