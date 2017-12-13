<h1>REGISTRO DE USUARIO</h1>

<form method="POST" onsubmit="return validarRegistro()">
	<label for="usuarioRegistro">Usuario</label>
	<input type="text" placeholder="Maximo 6 caracteres" maxlength="6" name="usuarioRegistro" id="usuarioRegistro" required>

	<label for="passwordRegistro">Contraseña</label>
	<input type="password" placeholder="Minimo 6 caracteres, incluir numeros y mayuscula" name="passwordRegistro" id="passwordRegistro" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>

	<label for="emailRegistro">Email</label>
	<input type="email" placeholder="Ingrese correo electronico" name="emailRegistro" id="emailRegistro" required>
	
	<p style="text-align: center"><input type="checkbox" name="terminos" id="terminos"><a href="#">Terminos y condiciones</a></p>
	<input type="submit" value="Enviar">

</form>

<?php  

$registro = new MvcController();
$registro->registroUsuarioController();

if (isset($_GET['action'])) {
	if ($_GET['action'] == "ok") {
		echo "Registro exitoso";
	}
}

?>