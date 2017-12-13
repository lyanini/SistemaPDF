<?php session_start();

if (isset($_SESSION['rut'])) {
	header('Location: index.php');
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	/*$password = hash('sha512', $password)*/

	//comprobar 
	//echo "$usuario"."-"." $password"";

	$errores = '';

	require_once 'conexion.php';

	$statement = $conexion->prepare('SELECT * FROM super_usario WHERE rut = :usuario AND clave = :password');
	$statement->execute(array(':usuario' => $usuario, ':password' => $password));
	$resultado = $statement->fetch();
	//comprobar consulta e ingresos
	/*var_dump($resultado);*/

	if ($resultado !== FALSE) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
		
	}
	else
	{
		$errores .= '<li>Datos incorrectos</li>';
	}
}


require 'views/login.view.php';

?>