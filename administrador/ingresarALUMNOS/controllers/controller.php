<?php
     
     class MvcController 
     {
     		public function pagina(){	
		
		include "views/template.php";
		include"views/modules/ingresar alumno.php";
	
	}

	#ENLACES
	#-------------------------------------

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

     	
   
     public function registroalumnoscontroller(){
        if(isset($_post["Nombres"])){


     	 $datoscontroller = array("Nombres" => $_post["Nombres"], "apellido_paterno" =>$_post["apellido_paterno"] ,"apellido_materno"=>$_post["apellido_materno"],"carrera"=>$_post["carrrera"],"numero_de_matricula"=>$_post["numero_de_matricula"],"telefone"=>$_post["telefone"],"facultad"=>$_post["facultad"],"promocion"=>$_post["promocion"],"domicilio"=>$_post["domicilio"]);

     	$respuesta= datos::registroalumnomodel($datoscontroller,"usuario");
     	echo $respuesta;
     	
}
     }
  }

?>