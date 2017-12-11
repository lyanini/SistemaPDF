<?php
require_once "../../controllers/gestorSuscriptores.php";
require_once "../../models/gestorSuscriptores.php";



class impresionsupcriptores{

public function imprimirSupcriptores(){

require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->AddPage();

$html1 = <<<EOF
<table>
<tr>
<td style="width:540px"> <img src="images/back.jpg"></td>
</tr>

<tr>
<td style="width:140px"> <img src="images/logoupla.jpg"></td>
</tr>
</table>

<table border="1">
<tr> 
     <td style="width:360px">facultad</td>
     <td style="width:180px">carrera</td>
</tr>
</table>
<table border="1">
<tr> 
     <td style="width:360px">n.matricula</td>
     <td style="width:180px">promocion</td>
</tr>
</table>


<table border="1">
<tr> 
     <td style="width:540px">nombre</td>
     
</tr>
</table>

<table border="1">
<tr> 
     <td style="width:360px">domicilio</td>
     <td style="width:180px">telefono</td>
</tr>
</table>

<table border="1">
<tr> 
     <td style="width:360px"></td>
     <td style="width:180px">fecha</td>
</tr>
</table>





EOF;

$pdf->WRITEHTML($html1,false,false,false,false,'');

$pdf->output('pdfupla.pdf');
}

}
$a=new impresionsupcriptores();
$a-> imprimirSupcriptores();

?>