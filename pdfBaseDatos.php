<?php

require ('./fpdf/fpdf.php');

class PDF extends FPDF{
    //Esta es la cabecera de mi archivo 
    function header(){
        //Agregamos una imagen
    $this->Image('img/logoP4.png',10,8,200);
    $this->Ln(20);
    }

    //Pie de página
function footer(){
    $this->SetY(-20);
    $this->SetFont('helvetica','I','10');
    //Creamos nuestro pie de página
    $this->Cell(0,15,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$conexion = mysqli_connect("localhost","root","","sem20232");
$consulta = "SELECT * FROM alumno WHERE boleta ='2022630122'";
$resultado = mysqli_query($conexion,$consulta);
$alumno = mysqli_fetch_array($resultado);
$contenidoAlumno = "$alumno[0] - $alumno[1] $alumno[2] $alumno[3]";
$boleta = $alumno[0];

$pdf = new PDF();
/*Define un alias para el número total de páginas. 
El valor por default es {nb}*/
$pdf->AliasNBPages(); //Define el total de las páginas
$pdf->AddPage(); //Creamos un apágina
$pdf->SetFont('helvetica','B',18); //Elegimos fuente, tipo, tamaño
$pdf->SetTitle($boleta,true);
//$pdf->Cell(40,20,$contenidoAlumno,0,1);
//$pdf->Cell(40,20,"Boleta:" .$boleta,0,1);
$pdf->Cell(40,20, utf8_decode($contenidoAlumno),0,1); //Imprime los datos del alumno con acentos
$pdf->Output($boleta.'.pdf','D'); //Asignamos nombre de forma automática de acuerdo a la boleta

?>