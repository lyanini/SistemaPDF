<?php  

/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbgenerica";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
*/
try {
	$conexion= new PDO('mysql:host=localhost;dbname=dbgenerica','root','');
	
} catch (PDOException $y) {
	echo "Error: ". $y->getMessage();
}
 ?>