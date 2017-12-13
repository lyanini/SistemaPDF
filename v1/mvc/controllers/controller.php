<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	

		include "views/template.php";
	
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

	#Registro USUARIOS
	/*$_SERVER['REQUEST_METHOD'] == 'POST'*/
	#-------------------------------------
	public function registroUsuarioController(){
		if (isset($_POST['usuarioRegistro'])) {

			if (preg_match('/^[a-zA-Z0-9]+$/',$_POST['usuarioRegistro']) &&
				preg_match('/^[a-zA-Z0-9]+$/',$_POST['passwordRegistro']) &&
				preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/',$_POST['emailRegistro'])){

				$datosController = array("usuario" => $_POST['usuarioRegistro'],
					   			 "password" => $_POST['passwordRegistro'],
					   			 "email" => $_POST['emailRegistro']);

				$respuesta = Datos::registroUsuarioModel($datosController, "usuarios");

				/*COMPROBANDO
				echo '<pre>';
				var_dump($respuesta);
				echo '<br>';		
				print_r($respuesta);		
				echo '</pre>';
				*/

				if ($respuesta == "success") {
					header("location:index.php?action=ok");
				}else{
					header("location:index.php");
				}
			}
		}
	}

	#Ingreso USUARIOS
	#-------------------------------------
	public function ingresoUsuarioController(){
		if (isset($_POST['usuarioIngreso'])) {

			if (preg_match('/^[a-zA-Z0-9]+$/',$_POST['usuarioIngreso']) &&
				preg_match('/^[a-zA-Z0-9]+$/',$_POST['passwordIngreso'])){

				$datosController = array("usuario" => $_POST['usuarioIngreso'],
					   			 	 "password" => $_POST['passwordIngreso']);

				$respuesta = Datos::ingresoUsuarioModel($datosController, "usuarios");

				/*COMPROBANDO
				echo '<pre>';
				var_dump($respuesta);
				echo '<br>';		
				print_r($respuesta);		
				echo '</pre>';*/

				if ($respuesta['usuario'] == $_POST['usuarioIngreso'] && $respuesta['password'] == $_POST['passwordIngreso']) {
					session_start();
					$_SESSION['validar'] = true;
					header("location:index.php?action=usuarios");

				}else{
					header("location:index.php?action=fallo");

				}
			}			
		}
	}

	#Vista USUARIOS
	#-------------------------------------
	public function vistaUsuariosController(){
		$respuesta = Datos::vistaUsuariosModel("usuarios");

		/*COMPROBANDO*/
		/*echo '<pre>';
		var_dump($respuesta);
		echo '<br>';		
		print_r($respuesta);		
		echo '</pre>';*/

		foreach ($respuesta as $row => $item) {
			echo '<tr>
					<td>'.$item['usuario'].'</td>
					<td>'.$item['password'].'</td>
					<td>'.$item['email'].'</td>
					<td><a href="index.php?action=editar&id='.$item['id'].'"><button>Editar</button></a></td>
					<td><a href="index.php?action=usuarios&idBorrar='.$item['id'].'"><button>Borrar</button></a></td>
			 	</tr>';

		}
	}

	#Editar USUARIOS
	#-------------------------------------
	public function editarUsuarioController(){
		$datosController = $_GET['id'];
		/*Verificar ID
		echo $datos;*/

		$respuesta = Datos::editarUsuarioModel($datosController, "usuarios");

		/*COMPROBANDO*/
		/*echo '<pre>';
		var_dump($respuesta);
		echo '<br>';		
		print_r($respuesta);		
		echo '</pre>';*/

		echo '<input type="hidden" value="'.$respuesta['id'].'" name="idEditar">
			  <input type="text" value="'.$respuesta['usuario'].'" name="usuarioEditar" required>
			  <input type="text" value="'.$respuesta['password'].'" name="passwordEditar" required>
			  <input type="email" value="'.$respuesta['email'].'" name="emailEditar" required>
			  <input type="submit" value="Actualizar">';

	}

	#Actualizar USUARIOS
	#-------------------------------------
	public function actualizarusuarioController(){
		if (isset($_POST['usuarioEditar'])) {

			if (preg_match('/^[a-zA-Z0-9]+$/',$_POST['usuarioEditar']) &&
				preg_match('/^[a-zA-Z0-9]+$/',$_POST['usuarioEditar']) &&
				preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/',$_POST['emailEditar'])){
				
				$datosController = array("id" => $_POST['idEditar'],
						   "usuario" => $_POST['usuarioEditar'],
						   "password" => $_POST['passwordEditar'],
						   "email" => $_POST['emailEditar']);

				$respuesta = Datos::actualizarUsuarioModel($datosController, "usuarios");

				/*COMPROBANDO*/
				/*echo '<pre>';
				var_dump($respuesta);
				echo '<br>';		
				print_r($respuesta);		
				echo '</pre>';*/

				if ($respuesta == "success") {
					header('location:index.php?action=cambio');
				}else{
					echo "Error";
				}
			}			
		}
	}

	#Borrar USUARIOS
	#-------------------------------------
	public function borrarUsuarioController(){
		if (isset($_GET['idBorrar'])) {
			$datosController = $_GET['idBorrar'];

			$respuesta = Datos::borrarUsuarioModel($datosController, "usuarios");

			if($respuesta == "success"){
				header('location:index.php?action=usuarios');

			}else{
				echo "Error";

			}
		}
	}

}

?>