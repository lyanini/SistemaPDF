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

	0 =>'check_jefcarr', 
	1 => 'check_aranceles',
	2=> 'check_dae',
	3=> 'check_bibloteca',
	4=> 'tipo',
	5=> 'nombre'
);

/*consulta filas*/
$sql = "SELECT check_jefcarr, check_aranceles, check_dae, check_bibloteca, tipo, nombre FROM estados";
$query=mysqli_query($conn, $sql) or die("pend.php: No datos");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  

/*consulta datos*/
$sql = "SELECT check_jefcarr, check_aranceles, check_dae, check_bibloteca, tipo, nombre FROM estados WHERE 1=1 AND check_jefcarr <> 1 OR check_aranceles <> 1 OR check_dae <> 1 OR check_bibloteca <> 1";
if( !empty($requestData['search']['value']) ) {   
	$sql.=" AND ( id_archivo LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR nombre LIKE '".$requestData['search']['value']."%' ";

	$sql.=" OR nombre LIKE '".$requestData['search']['value']."%' )";
}


$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query); 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");


/*Recorrer arreglo*/
$data = array();
while( $row=mysqli_fetch_array($query) ) {  
	$nestedData=array(); 

	if ($row['check_jefcarr'] == 1) {
		$nestedData[] = '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>';
	}else{ 
		$nestedData[] = '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>';


	}if ($row['check_aranceles'] == 1) {
		$nestedData[] = '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>';
	}else{ 
		$nestedData[] = '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>';


	}if ($row['check_dae'] == 1) {
		$nestedData[] = '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>';
	}else{ 
		$nestedData[] = '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>';


	}if ($row['check_bibloteca'] == 1) {
		$nestedData[] = '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>';
	}else{ 
		$nestedData[] = '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>';


	}

	$nestedData[] = $row["tipo"];
	$nestedData[] = $row["nombre"];
	
	$data[] = $nestedData;
}


/*datos en JSON a Jquery*/
$json_data = array(
			"draw"            => intval( $requestData['draw'] ),    
			"recordsTotal"    => intval( $totalData ), 
			"recordsFiltered" => intval( $totalFiltered ), 
			"data"            => $data  
			);

echo json_encode($json_data);  

?>
