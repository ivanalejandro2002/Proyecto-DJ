<?php

$Folio = rand(1,99);
$Nombre = rand(1,99);
$ApellidoPaterno = rand(1,99);
$ApellidoMaterno = rand(1,99);
$Correo = $_POST["correo"] ?? null;
$CURP = $_POST["curp"] ?? null;
$Telefono = $_POST["telefono"] ?? null;
$EntidadFederativa = $_POST["entidadFederativa"] ?? null;
$Alcaldia = $_POST["alcaldia"] ?? null;
$Evento = $_POST["evento"] ?? null;
$FechaEvento = $_POST["fechaEvento"] ?? null;
$HoraEvento = $_POST["horaEvento"] ?? null;
$NumeroInvitados = rand(1,99);
$DJ= rand(1,99);



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Contratación</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


  <script>
    function limpiarAtributosValue() {
      // Obtener todos los elementos de entrada del formulario
      var inputs = document.getElementsByTagName("input");

      // Iterar sobre los elementos de entrada y limpiar los atributos "value"
      for (var i = 0; i < inputs.length; i++) {
        var input = inputs[i];
        if (input.value !== "") {
          input.value = "";
        }
      }
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

    <div class="container">
      <div class="section">
          <br><br>
          <a id = "botonMostrarContacto" onclick="muestraContacto()" class="waves-effect waves-light btn disabled red">Contacto</a>
          <a id = "botonMostrarEvento" onclick="muestraEvento()" class="waves-effect waves-light btn red">Evento</a>
      </div>
    </div>




    <form method="POST" action="modificar.php">
      <div style="display:block" class ="container grey lighten-3 estiloMenus" id="contenedorContacto"><!--En esta posición colocar el color representativo de la empresa-->
        <h2>Contacto:</h2>
        <div class = "section">
          <div class="row">
              <div class="input-field col l4 m6 s12 "> 
                <i class="material-icons prefix red-text">perm_identity</i>
                <input value="<?php echo $CURP?>" id="CURP" type="text" onchange="evaluaCURP()" name="CURP" >
                <label for="CURP">CURP</label>
                <span><p id="helperCURP">Esperando...</p></span>
              </div>
              
              <div class="input-field col l4 m6 s12 ">
                <i class="material-icons prefix red-text">local_phone</i>  
                <input value="<?php echo $Telefono?>" name="telefono" id="telefono" type="tel" class="validate" maxlength="10" onchange="evalTelefono()">
                <label for="telefono">Teléfono</label>
                <span><p id="helperTelefono">Esperando...</p></span>
              </div>
              
              <div class="input-field col l4 m12 s12">
                <i class="material-icons prefix red-text">email</i>
                <input value="<?php echo $Correo?>" name="email" type="email" class="validate">
                <label for="email">Correo</label>
            </div>
          </div>

          <div class="row">
              <div class="col l6 m6 s12">

                    <select class="icons" id="estados" onchange="delegacionVisual()" name="estados">
                      <option value="" disabled selected>--Escoja su estado--</option>
                      <option value="Aguascalientes" data-icon='https://i.ibb.co/N2gQRZk/ags.jpg' class="left">Aguascalientes</option>
                      <option value="Baja California Norte" data-icon='https://i.ibb.co/3YPgNv4/BCN.jpg' class="left">Baja California Norte</option>
                      <option value="Baja California Sur" data-icon='https://i.ibb.co/y86xtBR/BCS.png' class="left">Baja California Sur</option>
                      <option value="Campeche" data-icon='https://i.ibb.co/k15GW4z/Campeche.jpg' class="left">Campeche</option>
                      <option value="Chiapas" data-icon='https://i.ibb.co/G2LCbVY/Chiapas.jpg' class="left">Chiapas</option>
                      <option value="Chihuahua" data-icon='https://i.ibb.co/18S7rnB/Chihuahua.png' class="left">Chihuahua</option>
                      <option value="Ciudad de Mexico" data-icon='https://i.ibb.co/K9VyjB5/CDMX.png' class="left">Ciudad de México</option>
                      <option value="Coahuila" data-icon='https://i.ibb.co/VS0Wd7t/Coahuila.jpg', class="left">Coahuila</option>
                      <option value="Colima" data-icon='https://i.ibb.co/pPkN3fJ/colima.jpg' class="left">Colima</option>
                      <option value="Durango" data-icon='https://i.ibb.co/kXwpJ6V/durango.png' class="left">Durango</option>
                      <option value="Estado de Mexico" data-icon='https://i.ibb.co/TLFgxBM/EDOMEX.png' class="left">Estado de México</option>
                      <option value="Guanajuato" data-icon='https://i.ibb.co/Kq5qfDm/Guanajuato.png' class="left">Guanajuato</option>
                      <option value="Guerrero" data-icon='https://i.ibb.co/Kwt81p8/guerrero.jpg' class="left">Guerrero</option>
                      <option value="Hidalgo" data-icon='https://i.ibb.co/YLVmjR7/Hidalgo.png' class="left">Hidalgo</option>
                      <option value="Jalisco" data-icon='https://i.ibb.co/wJXy4Jv/Jalisco.png' class="left">Jalisco</option>
                      <option value="Michoacan" data-icon='https://i.ibb.co/qrMt6PZ/Mich.jpg' class="left">Michoacán</option>
                      <option value="Morelos" data-icon='https://i.ibb.co/XbmCvL1/Morelos.png' class="left">Morelos</option>
                      <option value="Nayarit" data-icon='https://i.ibb.co/RNjnFJQ/Nayarit.jpg' class="left">Nayarit</option>
                      <option value="Nuevo Leon" data-icon='https://i.ibb.co/P4ZxFJS/NL.png' class="left">Nuevo León</option>
                      <option value="Oaxaca" data-icon='https://i.ibb.co/dPJnPB9/Oaxaca.png' class="left">Oaxaca</option>
                      <option value="Puebla" data-icon='https://i.ibb.co/yd80Gtd/Puebla.png' class="left">Puebla</option>
                      <option value="Queretaro" data-icon='https://i.ibb.co/MRjSJTZ/Queretaro.jpg' class="left">Querétaro</option>
                      <option value="Quintana Roo" data-icon='https://i.ibb.co/4mFnJBq/QRO.jpg' class="left">Quintana Roo</option>
                      <option value="San Luis Potosi" data-icon='https://i.ibb.co/XC5pt20/SLP.jpg' class="left">San Luis Potosí</option>
                      <option value="Sinaloa" data-icon='https://i.ibb.co/fQCxd5K/Sinaloa.png' class="left">Sinaloa</option>
                      <option value="Sonora" data-icon='https://i.ibb.co/t8nj5Fk/Sonora.png' class="left">Sonora</option>
                      <option value="Tabasco" data-icon='https://i.ibb.co/25ghFgS/Tabasco.png' class="left">Tabasco</option>
                      <option value="Tamaulipas" data-icon='https://i.ibb.co/kBJxL0j/Tamaulipas.png' class="left">Tamaulipas</option>
                      <option value="Tlaxcala" data-icon='https://i.ibb.co/hgLwqnN/Tlaxcala.jpg' class="left">Tlaxcala</option>
                      <option value="Veracruz" data-icon='https://i.ibb.co/jhmD0mY/Veracruz.png' class="left">Veracruz</option>
                      <option value="Yucatan" data-icon='https://i.ibb.co/nf3XKGg/Yucatan.png' class="left">Yucatán</option>
                      <option value="Zacatecas" data-icon='https://i.ibb.co/gdds3q2/Zacatecas.png' class="left">Zacatecas</option>
                      
                    </select>
                    <label>Images in select</label>
              </div>
            <div class="col l6 m6 s12" id="delegaciones" style="display:none">
                  <select class="icons" id="seleccionDelegacion" name="seleccionDelegacion"> 
                    <option value="" disabled selected>--Escoja su alcaldía--</option>
                    <option value="Azcapotzalco" data-icon='https://i.ibb.co/GPFkvPB/Azcapotzalco.jpg' class="left">Azcapotzalco</option>
                    <option value="Alvaro Obregon" data-icon='https://i.ibb.co/1dHm2J7/Alvaro-Obregon.jpg' class="left">Álvaro Obregón</option>
                    <option value="Benito Juarez" data-icon='https://i.ibb.co/JdHry5P/Benito-Juarez.jpg' class="left">Benito Juárez</option>
                    <option value="Coyoacan" data-icon='https://i.ibb.co/kHzNJbt/Coyoacan.jpg' class="left">Coyoacán</option>
                    <option value="Cuajimalpa" data-icon='https://i.ibb.co/pfn0dZM/cuajimalpa.jpg' class="left">Cuajimalpa</option>
                    <option value="Cuahtemoc" data-icon='https://i.ibb.co/zsrK5pM/Del-Cuauhtemoc.png' class="left">Cuahtémoc</option>
                    <option value="Gustavo A. Madero" data-icon='https://i.ibb.co/3S22JQR/avatar-400x400.png' class="left">Gustavo A. Madero</option>
                    <option value="Iztacalco" data-icon='https://i.ibb.co/BNnwyjp/Iztacalco.jpg', class="left">Iztacalco</option>
                    <option value="Iztapalapa" data-icon='https://i.ibb.co/9WqWLGW/iztapalapa.jpg' class="left">Iztapalapa</option>
                    <option value="Milpa Alta" data-icon='https://i.ibb.co/tKmmK3V/Milpa-Alta.png' class="left">Milpa Alta</option>
                    <option value="Tlahuac" data-icon='https://i.ibb.co/fk2X7gs/Tlahuac.png' class="left">Tláhuac</option>
                    <option value="Tlalpan" data-icon='https://www.archivo.cdmx.gob.mx/storage/app/uploads/public/57c/7a3/bf5/thumb_42_148_148_0_0_crop.png' class="left">Tlalpan</option>
                    <option value="Venustiano Carranza" data-icon='https://www.archivo.cdmx.gob.mx/storage/app/uploads/public/57c/7a4/313/thumb_45_148_148_0_0_crop.png' class="left">Venustiano Carranza</option>
                    <option value="Xochimilco" data-icon='https://www.archivo.cdmx.gob.mx/storage/app/uploads/public/57c/de6/e5b/thumb_299_148_148_0_0_crop.png' class="left">Xochimilco</option>
                    
                  </select>
                </div>
            </div>
          </div>
        </div>
      </div>
    
    
      <div style="display:none" class="container grey lighten-3 estiloMenus" id="contenedorEvento">
        <h2>Evento:</h2>
        <div class="section">
          <div class="row">
            <div class="input-field col l12 m12 s12">
              <i class="material-icons prefix red-text">event</i>
              <select>
                <option value="" disabled selected>--Escoja el tipo de evento--</option>
                <option value="1">Bautizo</option>
                <option value="2">Primera Comunión</option>
                <option value="3">XV años</option>
                <option value="4">Boda</option>
                <option value="5">Cumpleaños</option>
                <option value="6">Otro</option>
              </select>
              <label>Tipo de Evento:</label>
            </div>
          </div>
          <div class="row">
            
            <div class="input-field col l6 m6 s12">
              <i class="material-icons prefix red-text">local_play</i>
              <input value="<?php echo $FechaEvento?>" name="fechaEvento" type="text" class="datepicker" placeholder="">
              <label for="fecha" >Fecha del evento:</label>
          </div>
            
            <div class="input-field col l6 m6 s12">
              <i class="material-icons prefix red-text">access_time</i>
              <input value="<?php echo $HoraEvento?>" name = "horaEvento" type="text" class="timepicker">
              <label for= "horaEvento">Hora del evento:</label>
            </div>

          </div>
        </div>
      </div>


      <div clas="container">
        <div class="row">
          <div class="input-field col l6 m6 s6 offset-l4">
            <input type="submit" class="btn">
            <button type="button" onclick="limpiarAtributosValue()"  class="btn">Limpiar</button>
          </div>
        </div>
      </div>

    </form>
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
