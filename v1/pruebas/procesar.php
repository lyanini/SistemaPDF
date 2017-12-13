<?php  

include("conexion.php"); 


$nom = $_POST['Nombre'];
$ap_mater = $_POST['apMaterno'];
$ap_pater = $_POST['apPaterno'];
$rut = $_POST['Rut'];


$sql = "INSERT INTO bd01 (rut, nombre, ap_paterno, ap_materno)VALUES('$rut','$nom', '$ap_pater', '$ap_mater')";

if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/Multimedia2/Ayudantia/Trabajo%20ayudantia/?');
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 
?>
