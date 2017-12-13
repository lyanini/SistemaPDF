<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	 <form method="post" >
<fieldset>

<!-- Form Name -->
<legend>ingresar alumno </legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nome">Nombres</label>
  <div class="controls">
    <input name="Nombres" class="input-xlarge" id="nome" required="" type="text" placeholder="Nombres">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="nome">apellido paterno</label>
  <div class="controls">
    <input name="apellido_paterno" class="input-xlarge" id="nome" required="" type="text" placeholder="apellido_paterno">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="nome">apellido materno</label>
  <div class="controls">
    <input name="apellido_materno" class="input-xlarge" id="nome" required="" type="text" placeholder="apellido_materno">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="nome">numero de matricula</label>
  <div class="controls">
    <input name="numero_de_matricula" class="input-xlarge" id="nome" required="" type="text" placeholder="numero_de_matricula">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="telefone">Telefone</label>
  <div class="controls">
    <input name="telefone" class="input-xlarge" id="telefone" required="" type="text" placeholder="Ex.: (99) 9999-9999">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="endereco">facultad</label>
  <div class="controls">
    <input name="facultad" class="input-xlarge" id="endereco" required="" type="text" placeholder="facultad">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="bairro">carrrera</label>
  <div class="controls">
    <input name="carrrera" class="input-xlarge" id="bairro" type="text" placeholder="carrrera" required="carrrera">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cidade">promocion</label>
  <div class="controls">
    <input name="promocion" class="input-xlarge" id="cidade" type="text" placeholder="promocion" required="promocion">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cep">domicilio</label>
  <div class="controls">
    <input name="domicilio" class="input-xlarge" id="cep" required="" type="text" placeholder="domicilio">
    
  </div>
</div>



<!-- Button -->
<div class="control-group">
  <label class="control-label" for="enviar"></label>
  <div class="controls">
    <button name="enviar" class="btn btn-primary" id="enviar">Enviar</button>
  </div>
</div>

</fieldset>
</form>
<?php

$registro = new MvcController();
$registro -> registroalumnoscontroller();



?>
	
</body>
</html>

