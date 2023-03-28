<?php
/*
$allowed_referer = "https://clubfrance.org.mx/academias/"; // URL permitida

if(isset($_SERVER["HTTP_REFERER"]) && $_SERVER["HTTP_REFERER"] === $allowed_referer) {
  // El referer es la URL permitida, se muestra el contenido de la página 
  */
?> 

<!-- Variables -->

<?php 
$academia = "Bádminton";
$profesor = "Andrez López";
$dias = "Martes a Viernes";
$horario = "16:00 a 17:00 hrs."; 
?>


<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Bádminton</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/504bc46ce6.js" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Script para pop up -->

    <!--<script type="text/javascript">
      function showImage() {
        var img = document.createElement("img");
        img.src = "../minicamp-febrero-2023/img/Autorizacion.jpg";
        img.style.width = "100%";
        img.style.height = "auto";

        var closeBtn = document.createElement("span");
        closeBtn.innerHTML = "&times;";
        closeBtn.style.position = "absolute";
        closeBtn.style.top = "10px";
        closeBtn.style.right = "20px";
        closeBtn.style.fontSize = "40px";
        closeBtn.style.cursor = "pointer";
        closeBtn.onclick = function() {
          document.body.removeChild(modal);
        };

        var modal = document.createElement("div");
        modal.style.position = "fixed";
        modal.style.top = "0";
        modal.style.left = "0";
        modal.style.width = "35%";
        modal.style.height = "35%";
        modal.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
        modal.style.display = "flex";
        modal.style.justifyContent = "center";
        modal.style.alignItems = "center";
        modal.style.zIndex = "1";
        modal.appendChild(img);
        modal.appendChild(closeBtn);

        document.body.appendChild(modal);
      }
    </script> -->


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
       <!-- <div class="phone details">
          <i class="fa-brands fa-whatsapp"></i>
          <div class="topic">WhatsApp</div>
          <div><a href="https://wa.me/5215532812300?text=¡Hola!+Quiero+informes+de+las+actividades+del+MiniCamp" target="_blank" >55 3281 2300</a></div>
          </div>
          <div class="phone details">
          <i class="fa-solid fa-envelope"></i>
          <div class="topic">Correo electrónico</div>
          <a href=»mailto:deportes@clubfrance.org.mx»>ana.garcia@clubfrance.org.mx</a>
        </div> -->
      </div>
      <div class="right-side">
       
      <!--<div class="topic-text">Actividades Infantiles</div>-->
      

<center><img src="img/Logo.png" width="50%" height="50%"></center><br>
<h2>Actividades Infantiles</h2>
<h3><?php echo $academia; ?></h3>

      <!-- Botón para pop up -->
    <!-- <button onclick="showImage()">Mostrar imagen de ejemplo</button> -->
<div>
      <h5>Profesor:</h5>
      <h6><?php echo $profesor; ?></h6>
      <h5>Días:</h5>
      <h6><?php echo $dias; ?></h6>
      <h5>Las clases se imparte de:</h5>
      <h6><?php echo $horario; ?></h6>

</div>

<br>

  <form action="" method="POST" enctype="multipart/form-data">

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
        <input type="datetime" id="fecha_hora" name="fecha_hora" value="<?=  $currentDateTime?>" placeholder="" readonly hidden>
        </div>

         <!-- <h5>Folio:</h5> -->
         <div id="mi-elemento">
        <?php
    					$numero_aleatorio = rand(10000, 99999);
    					echo '<input type="text" id="folio" name="folio" value="'. $numero_aleatorio . '" placeholder="" readonly hidden>';
  					?><br>
        </div>
 
        <h5>Nombre del niño o niña:</h5>
        <div class="input-box">
        
        <input id="nombre_completo" name="nombre_completo" type="text" placeholder="Nombre completo" required>
        </div>

        <h5>Número de usuario del niño o niña:</h5>
        <div class="input-box">
        
        <input id="numero_usuario" name="numero_usuario" type="text" placeholder="Número de usuario del niño o niña" required>
        </div>
        

        <h5>Correo eléctronico:</h5>
        <div class="input-box">
        
        <input id="email" name="email" type="email" placeholder="Correo eléctronico" required>
        </div>

        <h5>Paquetes:</h5>
        
        <div class="input-field">
        <select name="paquete" id="paquete" onchange="actualizarPrecio()" required><br>
              <option disabled selected>Selecciona un paquete</option>
    					<option value="Una Clase">Una Clase</option>
    					<option value="Paquete 1">Paquete 1 (Una hora a la semana)</option>
    					<option value="Paquete 2">Paquete 2 (Dos horas a la semana)</option>
    					<option value="Paquete 3">Paquete 3 (Tres horas a la semana)</option>
    					<option value="Paquete 4">Paquete 4 (Cuatro horas a la semana)</option>
    					<option value="Paquete 5">Paquete 5 (Cinco horas a la semana)</option>
  					</select>
      </div>

      <h5>Precio:</h5>
          <div class="input-box">
          <input type="text" id="precio" name="precio" value="" placeholder="" readonly>
      </div>
  
      
          
      <!--  <h5>Fecha y hora:</h5> -->
       

        <div class="col-md-12">
          <div class="form-group">
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="reglamento" name="reglamento" value="Sí" required >
              <label class="custom-control-label" for="aviso">He Leido y Acepto el <a href="" target="_blank" class="text-danger">Reglamento</a></label>
              <div class="valid-feedback" >Campo Ok!</div>
              <div class="invalid-feedback" >Debes aceptar los terminos</div>
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

  					switch (paqueteSelect.value) {
    					case "Una Clase":
      						precioInput.value = "$190.00";
      						break;
    					case "Paquete 1":
      						precioInput.value = "$690.00";
      						break;
    					case "Paquete 2":
      						precioInput.value = "$1,250.00";
      						break;
    					case "Paquete 3":
      						precioInput.value = "$1,700.00";
                        break;
                        case "Paquete 4":
                        precioInput.value = "$1,950.00";
                        break;
                        case "Paquete 5":
                        precioInput.value = "$2,280.00";
                        break;
                        default:
                        precioInput.value = "";
    }
}
                </script>

</body>
</html>

<?php
/*
} else {
  // El referer no es la URL permitida, se redirecciona a otra página
  header("Location: https://clubfrance.org.mx/academias/");
  exit;
}
*/
?>