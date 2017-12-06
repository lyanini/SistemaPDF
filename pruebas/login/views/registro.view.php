<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">

	<title>Registro</title>
</head>
<body>
	<div class="contenedor">
		<div class="contenido">
			<h1 class="titulo">REGISTRATE</h1>
			<hr class="border">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
				<div class="form-grup">
					<i class="icono izquierda fa fa-user"></i><input type="text" class="usuario" name="usuario" placeholder="Usuario">
				</div>
				<div class="form-grup">
					<i class="icono izquierda fa fa-lock"></i><input type="password" class="password" name="password" placeholder="Contraseña">
				</div>
				<div class="form-grup">
					<i class="icono izquierda fa fa-lock"></i><input type="password" class="password_btn" name="password2" placeholder="Repetir contraseña">
					<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
				</div>
				<?php if(!empty($errores)): ?>
					<div class="error">
						<ul>
							<?php echo $errores; ?>
						</ul>
					</div>
				<?php endif; ?>
			</form>
			<p class="texto-registrate">
				Inicia secion
				<a href="login.php">aquí</a>
			</p>

		</div>
	</div>
</body>
</html>