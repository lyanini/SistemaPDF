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
		$errores .= 'Por favor ingrese un nombre </br>';
	}

	if (!empty($correo)) {
		$correo  = filter_var($correo, FILTER_SANITIZE_EMAIL);	
	}else {
		$errores .= 'Por favor ingrese un correo </br>';
	}

	if (!empty($mensaje)) {
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje); 

		//$mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
		
	}else {
		$errores .= 'Por favor ingrese un mensaje </bra>';
	}

	if (!$errores) {
		$enviar_a = 'yan25.1996@gmail.com';
		$asunto = 'Correo desde formulario';
		$mensaje = 'De:'. $nombre. '\n';
		$mensaje .= 'Correo:'. $correo .'\n';
		$mensaje .= "Mensaje:" . $mensaje;
		
		//$mail($enviar_a, $asunto, $mensaje_perparado);
		$enviado = 'TRUE';
	}
}


require 'index.view.php';

?>