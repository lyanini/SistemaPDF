<?php

require_once "conexion.php";

class datos extends conexion {
	
	public function registroalumnomodel($datosmodelos,$tabla){

		$stmt = conexion::conectar()->prepare("INSERT INTO $tabla (apellido_parterno, apellido_materno, facultad, carrera, nume_matricula, promocion, nombre,telefono, domicilio) VALUES (:apellido_parterno,:apellido_materno,:facultad,:carrera,:nume_matricula,:promocion,:nombre,:telefono,:domicilio");
		$stmt->bindparam(":apellido_parterno", $datosmodelos["apellido_paterno"] ,PDO::Param_str);
		$stmt->bindparam(":apellido_materno", $datosmodelos["apellido_materno"] ,PDO::Param_str);
		$stmt->bindparam(":facultad", $datosmodelos["facultad"] ,PDO::Param_str);
		$stmt->bindparam(":carrera", $datosmodelos["carrera"] ,PDO::Param_str);
		$stmt->bindparam(":nume_matricula", $datosmodelos["numero_de_matricula"] ,PDO::Param_str);
		$stmt->bindparam(":promocion", $datosmodelos["promocion"] ,PDO::Param_str);
		$stmt->bindparam(":nombre", $datosmodelos["nombre"] ,PDO::Param_str);
		$stmt->bindparam(":telefono", $datosmodelos["telefone"] ,PDO::Param_str);
		$stmt->bindparam(":domicilio", $datosmodelos["domicilio"] ,PDO::Param_str);
		
		if($stmt->execute()){
			return "success";

		}
		else{
			return"error";
		}

	}
	$stmt->close();
}

?>