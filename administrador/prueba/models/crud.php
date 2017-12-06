<?php

#EXTENSIÓN DE CLASES: Los objetos pueden ser extendidos, y pueden heredar propiedades y métodos. Para definir una clase como extensión, debo definir una clase padre, y se utiliza dentro de una clase hija.

require_once "conexion.php";

class Datos extends Conexion{

	
	public function registroUsuarioModel($datosModel, $tabla){

		

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (apellido_parterno, apellido_materno, facultad, carrera, nume_matricula, promocion, nombre,telefono, domicilio) VALUES (:apellidoparterno,:apellidomaterno,:facultad,:carrera,:numematricula,:promocion,:nombres,:telefono,:domicilio");

		$stmt->bindparam(":apellido_parterno", $datosModel["apellidopaterno"] ,PDO::PARAM_STR);
		$stmt->bindparam(":apellido_materno", $datosModel["apellidomaterno"] ,PDO::PARAM_STR);
		$stmt->bindparam(":facultad", $datosModel["facultad"] ,PDO::PARAM_STR);
		$stmt->bindparam(":carrera", $datosModel["carrera"] ,PDO::PARAM_STR);
		$stmt->bindparam(":nume_matricula", $datosModel["numerodematricula"] ,PDO::PARAM_STR);
		$stmt->bindparam(":promocion", $datosModel["promocion"] ,PDO::PARAM_STR);
		$stmt->bindparam(":nombre", $datosModel["nombres"] ,PDO::PARAM_STR);
		$stmt->bindparam(":telefono", $datosModel["telefono"] ,PDO::PARAM_STR);
		$stmt->bindparam(":domicilio", $datosModel["domicilio"] ,PDO::PARAM_STR);	

		

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}

	
	public function ingresoUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT usuario, password FROM $tabla WHERE usuario = :usuario");	
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->execute();

		#fetch(): Obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement. 
		return $stmt->fetch();

		$stmt->close();

	}

	

	

}

?>