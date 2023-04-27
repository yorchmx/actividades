Formulario de creacion de empleados

<form action="{{ url('/deportes') }}" method="post" encrypte="multipart/form-data" >
    @csrf

    <label for="nombre_actividad">Nombre Actividad</label>
    <input type="text" name="nombre_actividad" id="nombre_actividad">
    <br>

    <label for="edad">Edades</label>
    <input type="text" name="edad" id="edad">
    <br>

    <label for="edad">Lugar</label>
    <input type="text" name="lugar" id="lugar">
    <br>

    <label for="edad">Dias</label>
    <input type="text" name="dias" id="dias">
    <br>

    <label for="edad">Grupo 1</label>
    <input type="text" name="grupo1" id="grupo1">
    <br>

    <label for="edad">Grupo 2</label>
    <input type="text" name="grupo2" id="grupo2">
    <br>

    <label for="edad">Grupo 3</label>
    <input type="text" name="grupo3" id="grupo3">
    <br>

    <label for="edad">Grupo 4</label>
    <input type="text" name="grupo4" id="grupo4">
    <br>

    <label for="edad">Grupo 5</label>
    <input type="text" name="grupo5" id="grupo5">
    <br>

    <label for="edad">Horario Grupo 1</label>
    <input type="text" name="horario_grupo1" id="horario_grupo1">
    <br>

    <label for="edad">Horario Grupo 2</label>
    <input type="text" name="horario_grupo2" id="horario_grupo2">
    <br>

    <label for="edad">Horario Grupo 3</label>
    <input type="text" name="horario_grupo3" id="horario_grupo3">
    <br>

    <label for="edad">Horario Grupo 4</label>
    <input type="text" name="horario_grupo4" id="horario_grupo4">
    <br>

    <label for="edad">Horario Grupo 5</label>
    <input type="text" name="horario_grupo5" id="horario_grupo5">
    <br>

    <label for="edad">Profesor</label>
    <input type="text" name="nombre_profesor" id="nombre_profesor">
    <br>

    <label for="edad">Costo por clase</label>
    <input type="text" name="costo_clase" id="costo_clase">
    <br>

    <label for="edad">Costo mensual paquete 1</label>
    <input type="text" name="costo_mensual_paquete1" id="costo_mensual_paquete1">
    <br>

    <label for="edad">Costo mensual paquete 2</label>
    <input type="text" name="costo_mensual_paquete2" id="costo_mensual_paquete3">
    <br>

    <label for="edad">Costo mensual paquete 3</label>
    <input type="text" name="costo_mensual_paquete3" id="costo_mensual_paquete4">
    <br>

    <label for="edad">Costo mensual paquete 4</label>
    <input type="text" name="costo_mensual_paquete4" id="costo_mensual_paquete4">
    <br>

    <label for="edad">Costo mensual paquete 5</label>
    <input type="text" name="costo_mensual_paquete5" id="costo_mensual_paquete5">
    <br>

    <label for="edad">Costo mensual paquete 6</label>
    <input type="text" name="costo_mensual_paquete6" id="costo_mensual_paquete6">
    <br>

    <label for="edad">Costo mensual paquete 7</label>
    <input type="text" name="costo_mensual_paquete7" id="costo_mensual_paquete7">
    <br>

    <label for="edad">Costo mensual paquete 8</label>
    <input type="text" name="costo_mensual_paquete8" id="costo_mensual_paquete8">
    <br>

    <input type="submit" name="Enviar" id="Enviar">
    <br>

</form>
