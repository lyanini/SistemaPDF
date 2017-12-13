<?php session_start();

if (isset($_SESSION['usuario'])) {
	require 'views/descripcion.view.php';
}
else{
	header('Location: login.php');
}


?>