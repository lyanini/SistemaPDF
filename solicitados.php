<?php
/*conexion*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectomultimedia";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

$requestData= $_REQUEST;

/*columnas*/
$columns = array( 

	0 =>'id_archivo', 
	1 => 'nombre',
	2=> 'tipo_archivo'
);

/*consulta filas*/
$sql = "SELECT id_archivo, nombre, tipo_archivo ";
$sql.=" FROM archivos";
$query=mysqli_query($conn, $sql) or die("silicitados.php: No datos");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  

/*consulta datos*/
$sql = "SELECT id_archivo, nombre, tipo_archivo FROM archivos WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   
	$sql.=" AND ( id_archivo LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR nombre LIKE '".$requestData['search']['value']."%' ";

	$sql.=" OR tipo_archivo LIKE '".$requestData['search']['value']."%' )";
}


$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query); 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");



/*Recorrer arreglo*/
$data = array();
while( $row=mysqli_fetch_array($query) ) {  
	$nestedData=array(); 

	$nestedData[] = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        				Obtenr documento
      				</button>
      				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Requisitos</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					        <button type="button" class="btn btn-primary">Solisitar</button>
					      </div>
					    </div>
					  </div>
					</div>';
	$nestedData[] = $row["nombre"];
	$nestedData[] = $row["tipo_archivo"];
	
	$data[] = $nestedData;
}


/*datos en JSON*/
$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   
			"recordsTotal"    => intval( $totalData ),  
			"recordsFiltered" => intval( $totalFiltered ), 
			"data"            => $data   
			);

echo json_encode($json_data);  

?>
