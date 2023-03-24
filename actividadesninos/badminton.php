<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bádminton Infantil</title>
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="left-column background1-left-column">
				<img src="../img/LogoCF.png" width="80" height="80">
                <h6>Actividades Infantiles</h6>
			</div>
			<div class="right-column">
            <h2>Bádminton</h2><br>
				<div>
					<h4>Profesor:</h4>
					<h6>Andres López</h6>
                    <h4>Horario:</h4>
					<h6>Martes a Viernes</h6>
				</div><br>
				
				<form action="" method="POST">
  					<label for="nombre_nino">Nombre del niño:</label><br>
  					<input type="text" name="nombre_nino" required><br>

  					<label for="num_usuario">Número de usuario del niño:</label><br>
  					<input type="number" name="num_usuario" required><br>

  					<label for="paquete">Paquetes mensuales:</label><br>
  					<select name="paquete" id="paquete" onchange="actualizarPrecio()" required><br>
                        <option value="clase">Selecciona un paquete</option>
    					<option value="clase">Una Clase</option>
    					<option value="paquete1">Paquete 1 (Una hora a la semana)</option>
    					<option value="paquete2">Paquete 2 (Dos horas a la semana)</option>
    					<option value="paquete3">Paquete 3 (Tres horas a la semana)</option>
    					<option value="paquete4">Paquete 4 (Cuatro horas a la semana)</option>
    					<option value="paquete5">Paquete 5 (Cinco horas a la semana)</option>
  					</select><br><br>

  					<label for="precio">Precio:</label>
  					<input type="text" name="precio" id="precio" value="" readonly><br>

  					<?php
    					$numero_aleatorio = rand(10000, 99999);
    					echo '<input type="hidden" name="num_aleatorio" value="'. $numero_aleatorio . '">';
  					?><br>

					<button type="submit" class="button background1-left-column">Pagar</button>
				</form>

				<script>
				function actualizarPrecio() {
  					const paqueteSelect = document.getElementById("paquete");
  					const precioInput = document.getElementById("precio");

  					switch (paqueteSelect.value) {
    					case "clase":
      						precioInput.value = "$190.00";
      						break;
    					case "paquete1":
      						precioInput.value = "$690.00";
      						break;
    					case "paquete2":
      						precioInput.value = "$1,250.00";
      						break;
    					case "paquete3":
      						precioInput.value = "$1,700.00";
                        break;
                        case "paquete4":
                        precioInput.value = "$1,950.00";
                        break;
                        case "paquete5":
                        precioInput.value = "$2,280.00";
                        break;
                        default:
                        precioInput.value = "";
    }
}
                </script>


			</div>

		</div>

		
	</div>
</body>

</html>