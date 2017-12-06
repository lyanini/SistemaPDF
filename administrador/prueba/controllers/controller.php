<?php

class MvcController{

	
	public function pagina(){	
		
		include "views/template.php";
	
	}



	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}

		else{

			$enlaces = "index";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}

	
	public function registroUsuarioController(){

		if(isset($_POST["nombres"])){
			
			$datoscontroller = array("Nombres"=>$_POST["nombres"],
			                         "apellidopaterno"=>$_POST["apellidopaterno"],
			                         "apellidomaterno"=>$_POST["apellidomaterno"],                                           
			                         "carrera"=>$_POST["carrera"],                                                                    
			                         "numerodematricula"=>$_POST["numerodematricula"],                                                 
			                         "telefono"=>$_POST["telefono"],                                                                  
			                         "facultad"=>$_POST["facultad"],                                                                   
			                         "promocion"=>$_POST["promocion"],                                                                 
			                         "domicilio"=>$_POST["domicilio"]); 
			echo var_dump($datoscontroller);
			$respuesta = Datos::registroUsuarioModel($datoscontroller, "usuario");
			
			if($respuesta == "success"){

				header("location:index.php?action=ok");

			}

			else{

				header("location:index.php");
			}

		}

	}

	
	public function ingresoUsuarioController(){

		if(isset($_POST["usuarioIngreso"])){

			$datosController = array( "usuario"=>$_POST["usuarioIngreso"], 
								      "password"=>$_POST["passwordIngreso"]);

			$respuesta = Datos::ingresoUsuarioModel($datosController, "usuarios");

			if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]){

				session_start();

				$_SESSION["validar"] = true;

				header("location:index.php?action=usuarios");

			}

			else{

				header("location:index.php?action=fallo");

			}

		}	

	}

	

	



}	

?>