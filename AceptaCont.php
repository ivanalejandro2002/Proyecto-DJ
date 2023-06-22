<?php

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
$lugar=$_POST["lugar"] ?? null;

?>

<?php require 'php/inicioH.php';
require 'php/scriptComprobante.php';
require 'php/finH.php'; ?>

  <div class="grey darken-vacio">

  <div class="input-field col l6 m6 s6 offset-l4">
        <form  id ="formAceptaCont" method="POST" action="pdfBaseDatos.php">
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
        </form>
  </div>


    <div class="container">
      <div class="row center">
          <br><br>
          <h1 class="header center light-blue-text text-darken-4">¡Contratación Exitosa!</h1>
          <br>
          <a id = "botonGenerarPDF" onclick="mandarDatosPDF()" class=" waves-light btn blue">Generar Comprobante</a>
      </div>
    </div>

    <br>
    <br>
  </div>

  <?php require 'php/footer.php'; ?>