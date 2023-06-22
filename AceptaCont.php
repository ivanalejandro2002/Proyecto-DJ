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


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Contratación Exitosa</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <script>
    function mandarDatosPDF() {
        document.getElementById("formAceptaCont").action = "pdfBaseDatos.php";
        document.getElementById("formAceptaCont").submit();
    }
  </script>

</head>
<body class="grey darken-fondo2">
  <nav class="grey darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo"><img src="imgs/logoP4.png"  id="logoP"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="contratacion.html">Contratación</a></li>
        <li><a href="comprobante.html">Comprobante</a></li>
        <li><a href="admin.html">Admin</a></li>
        
      </ul>
      
      <ul id="nav-mobile" class="sidenav">
        <li><a href="contratacion.html">Contratación</a></li>
        <li><a href="comprobante.html">Comprobante</a></li>
        <li><a href="admin.html">Admin</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="grey darken-vacio">

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
  <footer class="page-footer grey darken-fondo2">
    <div class="container">
      <div class="row">
        <div class="col l12">
          <h5 class="white-text">Inserte nombre de la Empresa</h5>
          <p class="grey-text text-lighten-4">Inserte un buen slogan aquí</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text"> Enlaces</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contactos</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Hecho en <a class="orange-text text-lighten-3" href="https://escom.ipn.mx">ESCOM</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/contratacion.js"></script>

  </body>
</html>