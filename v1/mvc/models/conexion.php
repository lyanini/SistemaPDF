<?php  

class Conexion{
	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=dbgenerica","root","");
		return $link;
		/*var_dump($link);*/
	}
}


/*probando conexion
$a = new Conexion();
$a ->conectar();*/

?>