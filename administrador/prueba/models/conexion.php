<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=proyecto_multimedia","root","");
		return $link;

	}

}

?>