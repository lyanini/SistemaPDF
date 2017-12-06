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
        
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
			$datoscontroller = array("Nombres"=>$_POST["nombres"],
			                         "apellidopaterno"=>$_POST["apellidopaterno"],
			                         "apellidomaterno"=>$_POST["apellidomaterno"],                                           
			                         "carrera"=>$_POST["carrera"],                                                                    
			                         "numerodematricula"=>$_POST["numerodematricula"],                                                 
			                         "telefono"=>$_POST["telefono"],                                                                  
			                         "facultad"=>$_POST["facultad"],                                                                   
			                         "promocion"=>$_POST["promocion"],                                                                 
			                         "domicilio"=>$_POST["domicilio"]); 

<<<<<<< HEAD
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$datoscontroller = array("Nombres" => $_post["Nombres"], "apellidopaterno" => $_post["apellidopaterno"] ,"apellidomaterno"=> $_post["apellidomaterno"],"carrera"=> $_post["carrrera"],"numerodematricula"=> $_post["numerodematricula"],"telefone"=> $_post["telefone"],"facultad"=>$_post["facultad"],"promocion"=> $_post["promocion"],"domicilio"=> $_post["domicilio"]);

			$respuesta = Datos::registroUsuarioModel($datosController, "usuario");

=======
			
			$respuesta = Datos::registroUsuarioModel($datoscontroller, "usuario");
			
>>>>>>> 1be7f0b4b9b20a5830f827ce9d4d7cc02f38343b
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

			$datoscontroller = array( "usuario"=>$_POST["usuarioIngreso"], 
								      "password"=>$_POST["passwordIngreso"]);

			$respuesta = Datos::ingresoUsuarioModel($datoscontroller, "usuarios");

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