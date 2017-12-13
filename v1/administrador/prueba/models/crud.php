<?php

#EXTENSIÓN DE CLASES: Los objetos pueden ser extendidos, y pueden heredar propiedades y métodos. Para definir una clase como extensión, debo definir una clase padre, y se utiliza dentro de una clase hija.

require_once "conexion.php";

class Datos extends Conexion{

	
	public function registroUsuarioModel($datosModel, $tabla){
		
		$stmt = Conexion::conectar()->prepare("INSERT INTO 
			$tabla (apellido_parterno, apellido_materno, facultad, carrera, nume_matricula, promocion, nombre,telefono, domicilio) 
			VALUES (:apellidopaterno,:apellidomaterno,:facultad,:carrera,:numematricula,:promocion,:nombre,:telefono,:domicilio");

			$stmt->bindParam(":apellidopaterno", $datosModel["apellidopaterno"], PDO::PARAM_STR);
			$stmt->bindParam(":apellidomaterno", $datosModel["apellidomaterno"], PDO::PARAM_STR);
			$stmt->bindParam(":facultad", $datosModel["facultad"], PDO::PARAM_STR);
			$stmt->bindParam(":carrera", $datosModel["carrera"], PDO::PARAM_STR);
			$stmt->bindParam(":numematricula", $datosModel["numerodematricula"], PDO::PARAM_STR);
			$stmt->bindParam(":promocion", $datosModel["promocion"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre", $datosModel["nombres"], PDO::PARAM_STR);
			$stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_STR);
			$stmt->bindParam(":domicilio", $datosModel["domicilio"], PDO::PARAM_STR);	

			

		if($stmt->execute()){

			return "insercion exitosa";

		}

		else{

			return "error";

		}

		$stmt->close();

	}
/*
	
	public function ingresoUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT usuario, password FROM $tabla WHERE usuario = :usuario");	
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->execute();

		#fetch(): Obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement. 
		return $stmt->fetch();

		$stmt->close();

	}
*/
	

	

}

?>