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

	0 =>'fecha', 
	1 => 'nombre',
	2=> 'tipo'
);

/*consulta filas*/
$sql = "SELECT fecha, nombre, tipo FROM estados WHERE check_jefcarr =1 AND check_aranceles = 1 AND check_dae = 1 AND check_bibloteca = 1";
$query=mysqli_query($conn, $sql) or die("eti.php: No datos");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  

/*consulta datos*/
$sql = "SELECT fecha, nombre, tipo FROM estados	 WHERE 1=1 AND check_jefcarr =1 AND check_aranceles = 1 AND check_dae = 1 AND check_bibloteca = 1 ";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( fecha LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR nombre LIKE '".$requestData['search']['value']."%' ";

	$sql.=" OR tipo LIKE '".$requestData['search']['value']."%' )";
}



$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query);  
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");


/*Recorrer arreglo*/
$data = array();
while( $row=mysqli_fetch_array($query) ) {  
	$nestedData=array(); 

	$nestedData[] = $row["fecha"];
	$nestedData[] = $row["nombre"];
	$nestedData[] = $row["tipo"];
	
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
