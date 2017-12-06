<?php

class conexion{
	public function conectar() {
		$link = new pdo("mysql:host=localhost;dbname=proyecto_multimedia","root","");
		var_dump($link);

	}
	
}
   
?>