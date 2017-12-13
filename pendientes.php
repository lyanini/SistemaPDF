<?php session_start();

if (isset($_SESSION['usuario'])) {
	require 'views/pendientes.view.php';

}
else{
	header('Location: login.php');
	
}


?>