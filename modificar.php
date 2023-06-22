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

$Folio = "$CURP $FechaEvento";
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
    function modificarFormulario() {
        document.getElementById("formModificar").action = "contratacion2.php";
        document.getElementById("formModificar").submit();
  }

  function enviarFormulario() {
        document.getElementById("formEnviar").action = "subiraBD.php";
        document.getElementById("formEnviar").submit();
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
</div>



<div clas="container">
        <div class="row">
          <div class="input-field col l6 m6 s6 offset-l4">
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

          <div class="input-field col l6 m6 s6 offset-l4">
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