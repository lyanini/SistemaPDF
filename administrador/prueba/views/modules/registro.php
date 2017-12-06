<h1>REGISTRO DE ALUMNOS</h1>

<form method="post">
	
	<input type="text" placeholder="nombre" name="nombres" required>

	<input type="text" placeholder="apellido paterno" name="apellidopaterno" required>

	<input type="text" placeholder="apellido materno" name="pellidomaterno" required>

	<input type="number" placeholder="numero de matricula" name="numerodematricula" required>

	<input type="number" placeholder="telefono" name="telefono" required>

    <input type="text" placeholder="facultad" name="facultad" required>

    <input type="text" placeholder="carrera" name="carrera" required>

    <input type="text" placeholder="promocion" name="promocion" required>

    <input type="text" placeholder="domicilio" name="domicilio" required>

	<input type="submit" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro -> registroUsuarioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>
