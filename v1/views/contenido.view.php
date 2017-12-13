<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Universidad de Playa Ancha</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="css/simple-sidebar.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body><div id="wrapper">
	
		
			<div class="row align-items-start">
    			<div class="nav-superior">
    				<img class="logo rounded " src="img/logo_UPLA.png" alt="Generic placeholder image">
      					<div class="clearfix"></div>
      				<a href="#menu-toggle" class="btn btn-info" id="menu-toggle"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Menu de acceso</a> 
      			</div>			
					
    	</div>
    	
			        <!-- menu lateral -->
			        <div id="sidebar-wrapper">
			            <ul class="sidebar-nav">
			                <li class="sidebar-brand">
			                    <a href="cerrar.php"><i class="fa fa-user-times" aria-hidden="true"></i> Cerrar Sesión</a> 			                        			                    
			                </li>
			                <li>
			                    <a href="contenido.php"><i class="fa fa-archive" aria-hidden="true"></i> Inicio</a>
			                </li>
			                <li>
			                    <a href="aprobar.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> Check</a>
			                </li>
			                <li>
			                	<a href="gestiondoc.php"><i class="fa fa-file" aria-hidden="true"></i> Gestion documentos</a>
			                </li>
			                <li>
			                	<a href="ingresar.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Ingresar usuario</a>
			                </li>

			            </ul>
	    		</div>
		<div class="col-md-1" >
			
		</div>
			<div class="col-md-9">
				<h3 class="titulo">Descargar documentos</h3>
				
				<hr class="border">
				<div class="col-md-4">
					
					<ul class="list-group">
						<li class="list-group-item active">Tipo de documentos</li>
						<li class="list-group-item"><input type="checkbox" aria-label="Radio button for following text input"> Documento 1</li>
						<li class="list-group-item"><input type="checkbox" aria-label="Radio button for following text input"> Documento 2</li>
						<li class="list-group-item"><input type="checkbox" aria-label="Radio button for following text input"> Documento 3</li>
						<li class="list-group-item"><input type="checkbox" aria-label="Radio button for following text input"> Documento 4</li>
					</ul>

					<button type="button" class="btn btn-danger">Documentos emitidos</button>


				</div>
				<div class="col-md-8">

				

					<table class="table">
				 		<thead>
						    <tr class="bg-info">							    
							    <th scope="col">Tipo documento</th>
							    <th scope="col">Nombre documento</th>
					      		<th scope="col"></th>
				  			</tr>
				  		</thead>
						  <tbody>

						   <!--  <tr>
						      <th scope="row">1</th>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td><a class="btn btn-primary" href="#" role="button">Pedir</a></td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Jacob</td>
						      <td>Thornton</td>
						      <td><a class="btn btn-primary" href="#" role="button">Pedir</a></td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td>Larry</td>
						      <td>the Bird</td>
						      <td><a class="btn btn-primary" href="#" role="button">Pedir</a></td>
						    </tr>
						    <tr>
						    	<th scope="row">4</th>
						      	<td>Larry</td>
						      	<td>the Bird</td>
						      	<td><a class="btn btn-primary" href="#" role="button">Pedir</a></td>
						    </tr> 
						    <tr>
						    	<th scope="row">5</th>
						      	<td>Larry</td>
						      	<td>the Bird</td>
						      	<td><a class="btn btn-primary" href="#" role="button">Pedir</a></td>
						    </tr>
						    <tr>
						    	<th scope="row">6</th>
						      	<td>Larry</td>
						      	<td>the Bird</td>
						      	<td><a class="btn btn-primary" href="#" role="button">Pedir</a></td>
						    </tr>
				  		</tbody> -->
						<tbody>
							
							<?php 
								
								$usuario = $conexion->prepare("SELECT * FROM employee");
								$usuario->execute();
								$usuario = $usuario->fetchAll();

								foreach ($usuario as $user) {
									echo '<tr scope="row">';
							        /*echo '<td>' . $user["id"]. '</td>';*/
							        echo '<td>' . $user["employee_name"]. '</td>';
							        echo '<td>' . $user["employee_salary"]. '</td>';
							        echo '<td><a class="btn btn-primary" href="#" role="button">Pedir</a></td>';
							        echo '</tr>';
							}
						?>	


						</tbody>
						


					</table>

					<nav>
					  <ul class="pagination justify-content-end">
					    <!-- <li class="page-item">
					      <a class="page-link" href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					        <span class="sr-only">Previous</span>
					      </a>
					    </li>
					    <li class="page-item active"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					        <span class="sr-only">Next</span>
					      </a>
					    </li> -->


					    <!--boton izquerda-->
				<?php if ($pagina == 1): ?>
					<li class="page-item-disable">
						<a class="page-link" href="#" aria-label="Previous">
					    <span aria-hidden="true">&laquo;</span>
				        <span class="sr-only">Previous</span>
					    </a>
					</li>
				<?php else: ?>
					<li>
						<a class="page-link" href="?pagina=<?php echo $pagina-1 ?>" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
				        <span class="sr-only">Previous</span>
				    	</a>
				    </li>
				<?php endif; ?>
				
				<!--boton numerico-->
				<?php 
				for ($i=1; $i <= $numeroPaginas; $i++) { 
					//echo '<li>'."$i".'</li';
					if ($pagina == $i) {
						echo '<li class="page-item active"><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>';
					}else{
						echo '<li class="page-item"><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>';
					}
				}
				 ?>

				 <!--boton derecha-->
				<?php if ($pagina == $numeroPaginas): ?>
					<li  class="page-item-disable"> 
						<a class="page-link" href="#" aria-label="Next">
					    <span aria-hidden="true">&raquo;</span>
				        <span class="sr-only">Next</span>
					    </a>
					</li>
				<?php else: ?>
					<li class="page-item" >
						<a href="?pagina=<?php echo $pagina + 1 ?>" class="page-link" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					    <span class="sr-only">Next</span>
						</a>
					</li>
				<?php endif; ?>
					  </ul>
					</nav>
				</div> 
				
			
				
			</div>
			<div class="col-md-2" ></div>
		</div>
	</div>


	  <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <!-- Menu con JavaScript -->
    <script type="text/javascript" src="js/menu.js"></script>
</body>
</html>