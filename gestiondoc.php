<?php session_start();

if (isset($_SESSION['usuario'])) {
	require 'views/gestiondoc.view.php';
}
else{
	header('Location: login.php');
}

?>