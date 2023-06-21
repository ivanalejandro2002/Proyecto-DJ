<?php

$servidor = "localhost";
$usuario ="root";
$clave ="";
$BaseDeDatos ="serv_dj";

$enlace = mysqli_connect($servidor, $usuario, $clave,$BaseDeDatos);

if (!$enlace){
    echo "Error en la conexion con el servidor";
}

$Folio = rand(1,99);
$Nombre = rand(1,99);
$ApellidoPaterno = rand(1,99);
$ApellidoMaterno = rand(1,99);
$Correo = $_POST["correo"] ?? null;
$CURP = $_POST["curp"] ?? null;
$Telefono = $_POST["telefono"] ?? null;
$EntidadFederativa = $_POST["entidadFederativa"] ?? null;
$Alcaldia =  $_POST["alcaldia"] ?? null;
$Evento = $_POST["evento"] ?? null;
$FechaEvento = $_POST["fechaEvento"] ?? null;
$HoraEvento = $_POST["horaEvento"] ?? null;
$NumeroInvitados = rand(1,99);
$DJ= rand(1,99);

$insertarDatos = "INSERT INTO serv_dj VALUES('$Folio',
                                            '$Nombre',
                                            '$ApellidoPaterno',
                                            '$ApellidoMaterno',
                                            '$Correo',
                                            '$CURP',
                                            '$Telefono',
                                            '$EntidadFederativa',
                                            '$Alcaldia',
                                            '$Evento',
                                            '$FechaEvento',
                                            '$HoraEvento',
                                            '$NumeroInvitados',
                                            '$DJ')";

$ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

if(!$ejecutarInsertar){
    echo "Error en la insercion de datos";
}

header('Location: AceptaCont.html');

?>
