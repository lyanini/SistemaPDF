<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario contacto</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre" value="">
			<input type="email" class="form-control" name="correo" placeholder="Correo" id="correo" value="">

			<textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje"></textarea>
			
			<?php if(!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				 <div class="alert succes">
				 	<!--<p>Enviado correctamente</p>-->
					<script>
						alert("Valores enviados");

					</script>
				</div>
			<?php endif ?>
			

			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
		</form>
	</div>
</body>
</html>