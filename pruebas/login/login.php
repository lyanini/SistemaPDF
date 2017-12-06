<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	//comprobar recepcion del fromulario 
	//echo "$usuario"."-"." $password"."-"."$password2";

	$errores = '';

	try {
		$conexion= new PDO('mysql:host=localhost;dbname=logingenerico','root','');
	} catch (PDOException $y) {
		echo "Error: ". $y->getMessage();
	}

	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password');
	$statement->execute(array(':usuario' => $usuario, ':password' => $password));
	$resultado = $statement->fetch();
	//comprobar consulta e ingresos
	//var_dump($resultado);

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