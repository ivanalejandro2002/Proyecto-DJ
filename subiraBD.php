<?php

$servidor = "localhost";
$usuario ="root";
$clave ="";
$BaseDeDatos ="serv_dj";

$enlace = mysqli_connect($servidor, $usuario, $clave,$BaseDeDatos);

if (!$enlace){
    echo "Error en la conexion con el servidor";
}

$Folio = $_POST["folio"] ?? null;
$Nombre = $_POST["nombre"] ?? null;
$ApellidoPaterno = $_POST["apellidoPaterno"] ?? null;
$ApellidoMaterno = $_POST["apellidoMaterno"] ?? null;
$Correo = $_POST["correo"] ?? null;
$CURP = $_POST["curp"] ?? null;
$Telefono = $_POST["telefono"] ?? null;
$EntidadFederativa = $_POST["entidadFederativa"] ?? null;
$Alcaldia =  $_POST["alcaldia"] ?? null;
$Evento = $_POST["evento"] ?? null;
$FechaEvento = $_POST["fechaEvento"] ?? null;
$HoraEvento = $_POST["horaEvento"] ?? null;
$NumeroInvitados = $_POST["numeroInvitados"] ?? null;
$DJ= $_POST["dj"] ?? null;
$Lugar=$_POST["lugar"] ?? null;

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
                                            '$DJ',
                                            '$Lugar')";

$ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

if(!$ejecutarInsertar){
    echo "Error en la insercion de datos";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
    function mandarDatosPDF() {
        document.getElementById("formAceptaCont").action = "AceptaCont.php";
        document.getElementById("formAceptaCont").submit();
    }
    </script>


</head>
<body onload="mandarDatosPDF()">
<div class="input-field col l6 m6 s6 offset-l4">
        <form  id ="formAceptaCont" method="POST" action="AceptaCont.php">
            <input  type="hidden" name="folio" value="<?php echo $Folio; ?>">
            <input type="hidden" name="nombre" value="<?php echo $Nombre; ?>">
            <input type="hidden" name="apellidoPaterno" value="<?php echo $ApellidoPaterno; ?>">
            <input type="hidden" name="apellidoMaterno" value="<?php echo $ApellidoMaterno; ?>">
            <input type="hidden" name="correo" value="<?php echo $Correo; ?>">
            <input type="hidden" name="curp" value="<?php echo $CURP; ?>">
            <input type="hidden" name="telefono" value="<?php echo $Telefono; ?>">
            <input type="hidden" name="entidadFederativa" value="<?php echo $EntidadFederativa; ?>">
            <input type="hidden" name="alcaldia" value="<?php echo $Alcaldia; ?>">
            <input type="hidden" name="evento" value="<?php echo $Evento; ?>">
            <input type="hidden" name="fechaEvento" value="<?php echo $FechaEvento; ?>">
            <input type="hidden" name="horaEvento" value="<?php echo $HoraEvento; ?>">
            <input type="hidden" name="numeroInvitados" value="<?php echo $NumeroInvitados; ?>">
            <input type="hidden" name="dj" value="<?php echo $DJ; ?>">
            <input type="hidden" name="lugar" value="<?php echo $Lugar; ?>">
            <input type="submit" value="Enviar" onclick="enviarFormulario()" class="btn">
        </form>
</div>
</body>
</html>
