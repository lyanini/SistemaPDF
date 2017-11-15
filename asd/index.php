<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	}else {
		$errores .='Por favor ingrese nombre </br>';
	}

	if (!empty($correo)) {
		$correo  = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if (!empty(var)) {
			# code...
		}
	}
}


require 'index.view.php';

?>