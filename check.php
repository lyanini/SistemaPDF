<?php session_start();

if (isset($_SESSION['usuario'])) {
	require 'views/check.view.php';

}
else{
	header('Location: login.php');
	
}


?>