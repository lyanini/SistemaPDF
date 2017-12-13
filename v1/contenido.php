<?php session_start();

if (isset($_SESSION['usuario'])) {
	require_once ('conexion.php');
	

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$postPorpagina = 5;

	$inicio = ($pagina > 1) ? ($pagina * $postPorpagina - $postPorpagina) : 0;

	$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM employee LIMIT $inicio, $postPorpagina");

	$articulos->execute();
	$articulos = $articulos->fetchAll();

	//ver array
	//print_r($articulos);

	if (!$articulos) {
			header('Location: contenido.php');
		}

	$totalArticulos = $conexion->query('SELECT FOUND_ROWS() AS total');
	$totalArticulos = $totalArticulos->fetch()['total'];

	//total articulos
	//echo $totalArticulos;	

	//ceil redonde hacia arriba
	$numeroPaginas = ceil($totalArticulos / $postPorpagina);

	//echo $numeroPaginas;
	
	require 'views/contenido.view.php';
}
else{
	header('Location: login.php');
}


?>