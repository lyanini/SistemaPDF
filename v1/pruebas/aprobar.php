<?php session_start();

if (isset($_SESSION['usuario'])) {
	require 'views/aprobar.view.php';
}
else{
	header('Location: login.php');
}

?>