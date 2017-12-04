<?php

require_once"conexion.php";

class datos extends conexion {
	public function registroalumnomodel($datosmodelos,$tabla){

		$stmt = conexion::conectar()->prepare("INSERT INTO $tabla (apellido_parterno, apellido_materno, facultad, carrera, nume_matricula, promocion, nombre,telefono, domicilio) VALUES (:apellido_parterno,:apellido_materno,:facultad,:carrera,:nume_matricula,:promocion,:nombre,:telefono,:domicilio");
		$stmt->bindparam(":apellido_parterno", $datoscontroller["apellido_paterno"] ,PDO::Param_str);
		$stmt->bindparam(":apellido_materno", $datoscontroller["apellido_materno"] ,PDO::Param_str);
		$stmt->bindparam(":facultad", $datoscontroller["facultad"] ,PDO::Param_str);
		$stmt->bindparam(":carrera", $datoscontroller["carrera"] ,PDO::Param_str);
		$stmt->bindparam(":nume_matricula", $datoscontroller["numero_de_matricula"] ,PDO::Param_str);
		$stmt->bindparam(":promocion", $datoscontroller["promocion"] ,PDO::Param_str);
		$stmt->bindparam(":nombre", $datoscontroller["nombre"] ,PDO::Param_str);
		$stmt->bindparam(":telefono", $datoscontroller["telefone"] ,PDO::Param_str);
		$stmt->bindparam(":domicilio", $datoscontroller["domicilio"] ,PDO::Param_str);
		
		if($stmt->execute()){
			return "success";

		}
		else{
			return"error";
		}

	}
}

?>