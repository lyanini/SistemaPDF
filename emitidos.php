<?php session_start();

if (isset($_SESSION['usuario'])) {
	require 'views/emitidos.view.php';

}
else{
	header('Location: login.php');
	
}


?>