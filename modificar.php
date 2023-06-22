<?php

$servidor = "localhost";
$usuario ="root";
$clave ="";
$BaseDeDatos ="serv_dj";

$enlace = mysqli_connect($servidor, $usuario, $clave,$BaseDeDatos);

if (!$enlace){
    echo "Error en la conexion con el servidor";
}

$Nombre = $_POST["Nombre"] ?? null;
$ApellidoPaterno = $_POST["ApPat"] ?? null;
$ApellidoMaterno = $_POST["ApMat"] ?? null;
$Correo = $_POST["email"] ?? null;
$CURP = $_POST["CURP"] ?? null;
$Telefono = $_POST["telefono"] ?? null;
$EntidadFederativa = $_POST["estados"] ?? null;
$Alcaldia = $_POST["seleccionDelegacion"] ?? null;
$Evento = $_POST["eventosTipo"] ?? null;
$FechaEvento = $_POST["fechaEvento"] ?? null;
$HoraEvento = $_POST["Hora"] ?? null;
$NumeroInvitados = $_POST["invitados"] ?? null;
$DJ= $_POST["DJ"] ?? null;
$Lugar = $_POST["Lugar"] ?? null;

$x = "$FechaEvento[0]$FechaEvento[1]$FechaEvento[2]";
$mes = "";
$dia = "";
$anio = "";
switch($x){
  case 'Jan':
    $mes="01";
    break;
  case 'Feb':
    $mes="02";
    break;
  case 'Mar':
    $mes="03";
    break;
  case 'Apr':
    $mes="04";
    break;
  case 'May':
    $mes="05";
    break;
  case 'Jun':
    $mes="06";
    break;
  case 'Jul':
    $mes="07";
    break;
  case 'Aug':
    $mes="08";
    break;
  case 'Sep':
    $mes="09";
    break;
  case 'Oct':
    $mes="10";
    break;
  case 'Nov':
    $mes="11";
    break;
  case 'Dec':
    $mes="12";
    break;
}
$dia = "$FechaEvento[4]$FechaEvento[5]";
$anio = "$FechaEvento[8]$FechaEvento[9]$FechaEvento[10]$FechaEvento[11]";

$Folio = "$CURP$dia$mes$anio";
/*
$insertarDatos = "INSERT INTO serv_dj VALUES('$Folio',
                                            '$Nombre',
                                            '$ApellidoPaterno',
                                            '$ApellidoMaterno',
                                            '$Correo',
                                            '$CURP',
                                            '$RFC',
                                            '$Telefono',
                                            '$EntidadFederativa',
                                            '$Alcaldia',
                                            '$Evento',
                                            '$FechaEvento',
                                            '$HoraEvento')";

$ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

if(!$ejecutarInsertar){
    echo "Error en la insercion de datos";
}

header('Location: index.html');
*/
require 'php/inicioH.php';
require 'php/scriptsModificar.php';
require 'php/finH.php';
?>

<div class="grey darken-vacio containerModificar" >

    <br>
      
      <p>Hola <?php echo $Nombre ?>, verifica que los datos de tu contratación/reservación
      que ingresaste sean correctos:</p>

      <div style="text-align:left ;">
        <ol>
          <li>Nombre: <?php echo $Nombre?></li>
          <li>Apellido Paterno: <?php echo $ApellidoPaterno?></li>
          <li>Apellido Materno: <?php echo $ApellidoMaterno?></li>
          <li>Correo: <?php echo $Correo?></li>
          <li>CURP: <?php echo $CURP?></li>
          <li>Telefono: <?php echo $Telefono?></li>
          <li>Entidad Federativa: <?php echo $EntidadFederativa?></li>
          <li>Alcaldia: <?php echo $Alcaldia?></li>
          <li>Evento: <?php echo $Evento?></li>
          <li>Fecha de Evento: <?php echo $FechaEvento?></li>
          <li>Hora de Evento: <?php echo $HoraEvento?></li>
          <li>Numero de invitados: <?php echo $NumeroInvitados?></li>
          <li>DJ: <?php echo $DJ?></li>

        </ol>
      </div>

    <br>
    
    
    
 
      <div class="container">
        <div class="row">
          <div class="input-field col l6 m6 s6 ">
            <form id ="formModificar" method="POST" action="contratacion2.php">
              <input type="hidden" name="Folio" value="<?php echo $Folio; ?>">
              <input type="hidden" name="Nombre" value="<?php echo $Nombre; ?>">
              <input type="hidden" name="ApPat" value="<?php echo $ApellidoPaterno; ?>">
              <input type="hidden" name="ApMat" value="<?php echo $ApellidoMaterno; ?>">
              <input type="hidden" name="email" value="<?php echo $Correo; ?>">
              <input type="hidden" name="CURP" value="<?php echo $CURP; ?>">
              <input type="hidden" name="telefono" value="<?php echo $Telefono; ?>">
              <input type="hidden" name="estados" value="<?php echo $EntidadFederativa; ?>">
              <input type="hidden" name="seleccionDelegacion" value="<?php echo $Alcaldia; ?>">
              <input type="hidden" name="eventosTipo" value="<?php echo $Evento; ?>">
              <input type="hidden" name="fechaEvento" value="<?php echo $FechaEvento; ?>">
              <input type="hidden" name="Hora" value="<?php echo $HoraEvento; ?>">
              <input type="hidden" name="invitados" value="<?php echo $NumeroInvitados; ?>">
              <input type="hidden" name="DJ" value="<?php echo $DJ; ?>">
              <input type="hidden" name="Lugar" value="<?php echo $Lugar; ?>">
              <input type="submit" value="Modificar" onclick="modificarFormulario()" class="btn">
            </form>
          </div>
        
    
          <div class="input-field col l6 m6 s6 ">
              <form  id ="formModificar" method="POST" action="subiraBD.php">
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
        </div>
      </div>
  
</div>

<?php require 'php/footer.php';?>