<!DOCTYPE html>
<html>
<head>
	<title>Buscar número en la base de datos</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#numero").on("input", function(){
				var numero = $("#numero").val();
				if(numero != ""){
					$.post("buscar_numero.php", {numero: numero}, function(data){
						if(data == "existe"){
							$("#botonEnviar").prop("disabled", false);
							$("#resultado").text("El número existe en la base de datos.");
						}else{
							$("#botonEnviar").prop("disabled", true);
							$("#resultado").text("El número no existe en la base de datos.");
						}
					});
				}else{
					$("#botonEnviar").prop("disabled", true);
					$("#resultado").text("");
				}
			});
		});
	</script>
</head>
<body>
	<form method="post">
		<label for="numero">Número:</label>
		<input type="text" id="numero" name="numero">
		<br>
		<input type="submit" id="botonEnviar" value="Buscar" disabled>
	</form>
	<div id="resultado"></div>
</body>
</html>
