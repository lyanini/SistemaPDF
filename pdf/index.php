<?php
require'conexion.php';
require'fpdf.php';
$query=$conexion->prepare("SELECT * FROM usuarios us JOIN estado es ON us.id_usuario=es.id_usuario WHERE   ");
$query = $conexion->execute();

$pdf=new fpdf();
$pdf-> addpage();
$pdf->Image('logo.png',0,10,100,50); 
$pdf->SetFont('arial','B',15);
$pdf->cell(100,10,'',0,1,'L');
$pdf->cell(100,10,'',0,1,'L');
$pdf->cell(100,10,'',0,1,'L');
$pdf->cell(100,10,'',0,1,'L');
$pdf->cell(100,10,'',0,1,'L');
$pdf->cell(100,10,'',0,1,'L');
$pdf->cell(100,10,'FACULTAD:',1,1,'L');
$pdf->cell(100,10,'carrera:',1,1,'L');
$pdf->cell(100,10,'n.matricula:',1,1,'L');
$pdf->cell(100,10,'promocion:',1,1,'L');
$pdf->cell(100,10,'nombre:',1,1,'L');
$pdf->cell(100,10,'domicilio:',1,1,'L');
$pdf->cell(100,10,'telefono:',1,1,'L');
$pdf->cell(100,10,'fecha:',1,1,'L');
$pdf->cell(100,10,'tipo de documento:',1,1,'L');


$pdf->output();

?>