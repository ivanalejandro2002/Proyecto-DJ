<?php

require ('./fpdf/fpdf.php');

class PDF extends FPDF{
    //Esta es la cabecera de mi archivo 
    function header(){
        //Agregamos una imagen
    $this->Image('imgs/logo_FINAL_G.png', 8,3,70);

    $this->SetFont('helvetica','B',35);
    $this->SetXY(85, 7);
    $this->MultiCell(120, 20, utf8_decode("Comprobante de Reservación"), 1, "C");
    $this->Ln(10);
    }

    //Pie de página
function footer(){
    $this->SetY(-20);
    $this->SetFont('helvetica','I','10');
    //Creamos nuestro pie de página
    $this->Cell(0,15,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$conexion = mysqli_connect("localhost","root","","serv_dj");
$consulta = "SELECT * FROM serv_dj WHERE Folio ='2020630381'";
$resultado = mysqli_query($conexion,$consulta);
$datos = mysqli_fetch_array($resultado);
$contenidoDatos = "$datos[0] - $datos[1] $datos[2] $datos[3] $datos[4] $datos[5] $datos[6] $datos[7] $datos[8] $datos[9] $datos[10] $datos[11] $datos[12] $datos[13] $datos[14]";
$folio = $datos[0];
$titulo="Comprobante de Reservación";
$msgDJ="Elegiste a nuestro DJ: ";
$evento_datos_1="Tipo de Evento: ".$datos[9]."    DJ: ".$datos[13]."  Lugar del Evento: ".$datos[14]."    Número de Invitados: ".$datos[12]."   Fecha del Evento: ".$datos[10]."    Hora del Evento: ".$datos[11];
$contacto_datos_1="Nombre Completo: ".$datos[1]." ".$datos[2]." ".$datos[3]."    CURP: ".$datos[5]."  Teléfono: ".$datos[6]."    Correo Electrónico: ".$datos[4]."   Entidad Federativa: ".$datos[7]."    Alcaldía: ".$datos[8];


$pdf = new PDF();
/*Define un alias para el número total de páginas. 
El valor por default es {nb}*/
$pdf->AliasNBPages(); //Define el total de las páginas
$pdf->AddPage(); //Creamos un apágina
//$pdf->SetFont('helvetica','B',35); //Elegimos fuente, tipo, tamaño
$pdf->SetTitle($folio,true);
//$pdf->Cell(40,20,$contenidodatos,0,1);
//$pdf->SetXY(85, 7);
//$pdf->MultiCell(120, 20, utf8_decode($titulo), 1, "C");
//Folio
$pdf->SetXY(40, 53);
$pdf->SetFont('helvetica','U',30);
$pdf->Cell(130, 20, utf8_decode("Folio: ".$folio), 0, 1, "C");
//Mensaje DJ
$pdf->SetXY(54, 78);
$pdf->SetFont('helvetica','I',24);
$pdf->Cell(100, 15, utf8_decode($msgDJ), 0, 1, "C");
//Imagen DJ
if($datos[13] == "Fourier")
{
    $pdf->Image('imgs/DJFourierP.png', 30, 96,150);
}
else if($datos[13] == "Ampere")
{
    $pdf->Image('imgs/DJAmpereP.png', 30, 96,150);
}
else if($datos[13] == "Trooper")
{
    $pdf->Image('imgs/DJTrooperP.png', 30, 96,150);
}
else
{
    $pdf->SetXY(40, 100);
    $pdf->SetFont('helvetica','I',24);
    $pdf->Cell(100, 15, utf8_decode("Error de Dato de DJ"), 0, 1, "C");
}
//Titulo Datos
$pdf->SetXY(55, 300);
$pdf->SetFont('helvetica',"B",32);
$pdf->Cell(100, 15, utf8_decode("Datos del Evento: "), 0, 1, "C");

//Datos Evento

$pdf->SetXY(10,80);
$pdf->SetFont('helvetica','B',18);
$pdf->MultiCell(190,10, utf8_decode($evento_datos_1),1,"C");
//$pdf->Cell(180, 20, utf8_decode($evento_datos_1), 0, 1, "L");


//Titulo Contacto
$pdf->SetXY(55, 120);
$pdf->SetFont('helvetica',"B",32);
$pdf->Cell(100, 15, utf8_decode("Datos del Contacto: "), 0, 1, "C");

//Datos Contacto
$pdf->SetXY(10,140);
$pdf->SetFont('helvetica','B',18);
$pdf->MultiCell(190,10, utf8_decode($contacto_datos_1),1,"C");

//$pdf->SetY(200);
//$pdf->SetFont('helvetica','B',18);
//$pdf->MultiCell(160,10, utf8_decode($contenidoDatos),1,"C"); //Imprime los datos del evento con acentos
//$pdf->Output('I', $folio.'.pdf'); //Asignamos nombre de forma automática de acuerdo a la boleta


//Salida del Archivo
$pdf->Output('I', $folio.'.pdf');


?>