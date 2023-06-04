<!-- Variables -->

<?php
$lugar = "Canchas de Tenis";
$academia = "Tenis";
$concepto = "TENIS";
$profesor = "Fernando Corona";
$dias = "Martes a Viernes";
$horario = "16:00 a 18:00 hrs."; 
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Tenis</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/504bc46ce6.js" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
$sql = "SELECT * FROM deportes WHERE id = 17";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);


// Mostrar los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo '<h3><center>Actividades Infantiles</center></h3>  '. '';
  echo '<div style="text-align:center; font-weight:bold; font-size:27px;">' . $fila['nombre_actividad'] . '<br></div>';
  echo '<span class="subtitulo">Profesor:</span> ' . $fila['nombre_profesor'] . '<br>';
  echo '<span class="subtitulo">Las clases se imparten de:</span> ' . $fila['dias'] . '<br>';
  echo '<span class="subtitulo">Horario:</span> ' . $fila['horario_grupo1'] . ' ' .'<br>';
  echo '<span class="subtitulo">Lugar:</span> ' . $fila['lugar'] . '<br>';
  echo '<span class="subtitulo">Edades:</span> ' . $fila['edad'] . '<br>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>


<br>

  <form action="pay.php" method="POST" enctype="multipart/form-data">

        <?php 
            include_once "registro.php";
         ?>

    <h5>¿Has apartado tu lugar en la clase? Antes de realizar el pago, asegúrate de apartar tu lugar con el profesor:  <p style="color:#3e2093";><?php echo $profesor; ?></p></h5>
    
        <div class="input-field">
        <select name="apartado" id="apartado" required><br>
              <option disabled selected>Selecciona un opción</option>
    					<option value="Sí">Sí</option>
    					<option value="No">No</option>
  					</select>
      </div>

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
 
        <h5>Primer nombre del niño o niña:</h5>
        <div class="input-box">
        
        <input id="nombre" name="nombre" type="text" placeholder="Primer nombre" required>
        </div>

        <h5>Primer apellido del niño o niña:</h5>
        <div class="input-box">
        
        <input id="apellido" name="apellido" type="text" placeholder="Primer apellido" required>
        </div>

        <h5>Número de usuario del niño o niña:</h5>
        <div class="input-box">
        
        <input id="numero_usuario" name="numero_usuario" type="text" placeholder="Número de usuario del niño o niña" required>
        </div>

        <!-- ELMINAR ESPACIOS EN BLANCO EN ESTOS TRES CAMPOS -->

        <script>
        // Obtener referencias a los campos de entrada
        var nombreInput = document.getElementById('nombre');
        var apellidoInput = document.getElementById('apellido');
        var numeroUsuarioInput = document.getElementById('numero_usuario');

        // Agregar un evento al enviar el formulario para eliminar los espacios en blanco
        document.querySelector('form').addEventListener('submit', function(event) {
          // Eliminar los espacios en blanco utilizando la función trim()
          nombreInput.value = nombreInput.value.trim();
          apellidoInput.value = apellidoInput.value.trim();
          numeroUsuarioInput.value = numeroUsuarioInput.value.trim();
        });
       </script>

       <!-- ELIMINAR ACENTOS Y Ñ -->

       <script>
        // Obtener referencias a los campos de entrada
        var nombreInput = document.getElementById('nombre');
        var apellidoInput = document.getElementById('apellido');
        var numeroUsuarioInput = document.getElementById('numero_usuario');

        // Agregar un evento al enviar el formulario para eliminar los acentos y las "ñ"
        document.querySelector('form').addEventListener('submit', function(event) {
          // Remover los acentos y las "ñ" utilizando la función normalize() y expresiones regulares
          nombreInput.value = removeAccentsAndN(nombreInput.value);
          apellidoInput.value = removeAccentsAndN(apellidoInput.value);
          numeroUsuarioInput.value = removeAccentsAndN(numeroUsuarioInput.value);
        });

        // Función para remover los acentos y las "ñ"
        function removeAccentsAndN(text) {
          return text.normalize("NFD").replace(/[\u0300-\u036f]|[\u00f1\u00d1]/g, "");
        }
       </script>
        

        <h5>Correo electrónico:</h5>
        <div class="input-box">
        
        <input id="email" name="email" type="email" placeholder="Correo electrónico" required>
        </div>

        <h5>Paquetes:</h5>
        
        <div class="input-field">
        <select name="paquete" id="paquete" onchange="actualizarPrecio()" required><br>
              <option disabled selected>Selecciona un paquete</option>
    					<option value="Una Clase">Una Clase</option>
    					<option value="Paquete 1 (Una hora a la semana)">Paquete 1 (Una hora a la semana)</option>
    					<option value="Paquete 2 (Dos horas a la semana)">Paquete 2 (Dos horas a la semana)</option>
    					<option value="Paquete 3 (Tres horas a la semana)">Paquete 3 (Tres horas a la semana)</option>
    					<option value="Paquete 4 (Cuatro horas a la semana)">Paquete 4 (Cuatro horas a la semana)</option>
    					<option value="Paquete 5 (Cinco horas a la semana)">Paquete 5 (Cinco horas a la semana)</option>
              <option value="Paquete 6 (Seis horas a la semana)">Paquete 6 (Seis horas a la semana)</option>
              <option value="Paquete 7 (Ocho horas a la semana)">Paquete 7 (Ocho horas a la semana)</option>
              <option value="Paquete 8 (Doce horas a la semana)">Paquete 8 (Doce horas a la semana)</option>
              <option value="Paquete 9 (Alto rendimiento)">Paquete 9 (Alto rendimiento)</option>
  					</select>
      </div><br>

      <h5>Precio:</h5>
          <div class="input-box">
          <input type="text" id="precio" name="precio" value="" placeholder="" readonly>
          </div>
  
      
          
      <!--  <h5>Fecha y hora:</h5> -->
      
        <div class="col-md-12">
          <div class="form-group">
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="reglamento" name="reglamento" value="Sí" required >
              <label class="custom-control-label" for="aviso">He Leído y Acepto el <a href="" target="_blank" class="text-danger">Reglamento</a></label>
              <div class="valid-feedback" >Campo Ok!</div>
              <div class="invalid-feedback" >Debes aceptar los términos</div>
          </div>
          
      </div>
      </div>
      <div class="col-md-12">
      <span style="font-size: 10px;">
      Los datos personales recopilados serán protegidos, almacenados y procesados con fines estadísticos, promocionales y de mejora. La información obtenida es confidencial y es propiedad de Club France, invitamos a consultar nuestro <a href="https://clubfrance.org.mx/aviso_privacidad/Aviso_de_Privacidad.pdf" target="_blank">Aviso de privacidad</a>.                                            </span>
     </div>
     <br>
     

      <h5>Firma:</h5>
          <div class="input-box">
          <input type="text" id="firma" name="firma" value="" placeholder="Nombre completo del tutor">
      </div>

      <br>
    
      <div class="d-grid gap-2">
       <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Pagar</button>
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
      precioInput.value = "220.00";
      break;
    case "Paquete 1 (Una hora a la semana)":
      if (diaDelMes >= 11) {
        precioInput.value = "815.40"; // 8% más que $755.00
      } else {
        precioInput.value = "755.00";
      }
      break;
    case "Paquete 2 (Dos horas a la semana)":
      if (diaDelMes >= 11) {
        precioInput.value = "1533.60"; // 8% más que $1420.00
      } else {
        precioInput.value = "1420.00";
      }
      break;
    case "Paquete 3 (Tres horas a la semana)":
      if (diaDelMes >= 11) {
        precioInput.value = "2106.00"; // 8% más que $1950.00
      } else {
        precioInput.value = "1950.00";
      }
      break;
    case "Paquete 4 (Cuatro horas a la semana)":
      if (diaDelMes >= 11) {
        precioInput.value = "2430.00"; // 8% más que $2250.00
      } else {
        precioInput.value = "2250.00";
      }
      break;
    case "Paquete 5 (Cinco horas a la semana)":
      if (diaDelMes >= 11) {
        precioInput.value = "2916.00"; // 8% más que $2700.00
      } else {
        precioInput.value = "2700.00";
      }
      break;
      case "Paquete 6 (Seis horas a la semana)":
      if (diaDelMes >= 11) {
        precioInput.value = "3358.80"; // 8% más que $3110.00
      } else {
        precioInput.value = "3110.00";
      }
      break;
      case "Paquete 7 (Ocho horas a la semana)":
      if (diaDelMes >= 11) {
        precioInput.value = "3996.00"; // 8% más que $3700.00
      } else {
        precioInput.value = "3700.00";
      }
      break;
      case "Paquete 8 (Doce horas a la semana)":
      if (diaDelMes >= 11) {
        precioInput.value = "5832.00"; // 8% más que $5400.00
      } else {
        precioInput.value = "5400.00";
      }
      break;
      case "Paquete 9 (Alto rendimiento)":
      if (diaDelMes >= 11) {
        precioInput.value = "6766.20"; // 8% más que $6265.00
      } else {
        precioInput.value = "6265.00";
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