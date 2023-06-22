<?php

$Folio = $_POST["CURP"] ?? null;
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


require 'php/inicioH.php';
require 'php/scriptsCont2.php';
require 'php/finH.php';
?>




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
            <div class="input-field col l4 m4 s4 "> 
              <input id="Nombre" type="text" onchange="activarBoton()" name="Nombre" value="<?php echo $Nombre?>">
              <label for="CURP">Nombre(S)</label>
            </div>
            
            <div class="input-field col l4 m4 s4 "> 
              <input id="ApPat" type="text" onchange="activarBoton()" name="ApPat" value="<?php echo $ApellidoPaterno?>">
              <label for="ApPat">Apellido Paterno></label>
            </div>
            
            <div class="input-field col l4 m4 s4 "> 
              <input id="ApMat" type="text" onchange="activarBoton()" name="ApMat" value="<?php echo $ApellidoMaterno?>">
              <label for="ApMat">Apellido Materno</label>
            </div>
        </div>
          
          
          <div class="row">
              <div class="input-field col l4 m6 s12 "> 
                <i class="material-icons prefix red-text">perm_identity</i>
                <input id="CURP" type="text" onchange="evaluaCURP()" name="CURP" value="<?php echo $CURP?>">
                <label for="CURP">CURP</label>
                <span><p id="helperCURP">Esperando...</p></span>
              </div>
              
              <div class="input-field col l4 m6 s12 ">
                <i class="material-icons prefix red-text">local_phone</i>  
                <input name="telefono" id="telefono" type="tel" class="validate" maxlength="10" onchange="evalTelefono()" value="<?php echo $Telefono?>">
                <label for="telefono">Teléfono</label>
                <span><p id="helperTelefono">Esperando...</p></span>
              </div>
              
              <div class="input-field col l4 m12 s12">
                <i class="material-icons prefix red-text">email</i>
                <input id="email" name="email" type="email" class="validate" onchange="evalEmail()" value="<?php echo $Correo?>">
                <label for="email">Correo</label>
                <span><p id="helperEmail">Esperando...</p></span>
            </div>
          </div>

          <div class="row">
              <div class="col l6 m6 s12">

                    <select class="icons" id="estados" onchange="delegacionVisual()" name="estados" value="<?php echo $EntidadFederativa?>">
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
                  <select class="icons" id="seleccionDelegacion" name="seleccionDelegacion" onchange="activarBoton()" value="<?php echo $Alcaldia?>"> 
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
    
    
      <div style="display:none" class="container grey lighten-3 estiloMenus" id="contenedorEvento">
        <h2>Evento:</h2>
        <div class="section">
          <div class="row">
            <div class="input-field col l6 m6 s12">
              <i class="material-icons prefix red-text">event</i>
              <select id="eventosTipo" name="eventosTipo" onchange="activarBoton()" value="<?php echo $Evento?>">
                <option value="" disabled selected>--Escoja el tipo de evento--</option>
                <option value="Bautizo">Bautizo</option>
                <option value="Primera Comunión">Primera Comunión</option>
                <option value="XV años">XV años</option>
                <option value="Boda">Boda</option>
                <option value="Cumpleaños">Cumpleaños</option>
                <option value="Otro">Otro</option>
              </select>
              <label>Tipo de Evento:</label>
            </div>
            <div class="input-field col l6 m6 s12" style="position:relative; bottom:21px">
              
              <p class="range-field">
                <span><i class="material-icons prefix red-text" style="position:relative;">person_add</i></span>
                Número de Invitados: <span id="numInv">138</span>
                <input type="range" name="invitados" id="invitados" min="75" max="200" onchange="cambiaInvitados()" value="<?php echo $NumeroInvitados?>"/>
              </p>
            </div>
          </div>
          <div class="row">
            
            <div class="input-field col l6 m6 s12">
              <i class="material-icons prefix red-text">local_play</i>
              <input id="fechaEvento" name="fechaEvento" type="text" class="datepicker" placeholder="" onchange="fechaMueve()" value="<?php echo $FechaEvento?>">
              <label for="fechaEvento" >Fecha del evento:</label>
            </div>
            
            <div class="input-field col l6 m6 s12" id="muestraHora" style="display:none">
              <i class="material-icons prefix red-text">access_time</i>
              <select name="Hora" id="Hora" onchange="horaMueve()" value="<?php echo $HoraEvento?>">
                <option value="" disabled selected>--Seleccione la hora--</option>
                <option value="7:00AM - 12:00PM">7:00AM - 12:00PM</option>
                <option value="14:00PM - 19:00PM">14:00PM - 19:00PM</option>
                <option value="21:00PM - 2:00AM">21:00PM - 2:00AM</option>
              </select>
              <label for= "Hora">Hora del evento:</label>
            </div>

          </div>

          <div class="row">
            
            <div class="input-field col l12 m12 s12" id="muestraDJ" style="display:none">
              <i class="material-icons prefix red-text">person</i>
              <select class="icons" name="DJ" id="DJ" onchange="activarBoton()" value="<?php echo $DJ?>">
                
                <option value="" disabled selected>--Escoga al DJ--</option>
                <option value="Ampere" data-icon="imgs/DJAmpereP.png">DJ Ampere</option>
                <option value="Fourier" data-icon="imgs/DJFourierP.png">DJ Fourier</option>
                <option value="Trooper" data-icon="imgs/DJTrooperP.png">DJ Trooper</option>
              </select>
              <label>DJ del evento:</label>
            </div>
            
            <div class="input-field col l12 m12 s12" id="muestraLugar" style="display:none" >
              <i class="material-icons prefix red-text">access_time</i>
              <select class="icons" name="Lugar" id="Lugar" onchange="activarBoton()" value="<?php echo $Lugar?>">
                <option value="" disabled selected>--Escoga el lugar del evento--</option>
                <option value="Fuente" data-icon="imgs/salon_1.jpeg">Salón la Fuente</option>
                <option value="Roma" data-icon="imgs/salon_2.jpeg">Salón Roma</option>
                <option value="Pekes" data-icon="imgs/salon_3.jpg">Salón Pekes</option>
                <option value="Escondida" data-icon="imgs/jardin_1.jpg">Jardín la Escondida</option>
                <option value="Amanecer" data-icon="imgs/jardin_2.jpg">Jardín Amanecer</option>
              </select>
              <label>Lugar del evento:</label>
            </div>

          </div>
        </div>
      </div>


      <div clas="container">
        <div class="row">
          <div class="input-field col l6 m6 s6 offset-l4">
            <input type="submit" class="btn" disabled="false" id="MandarForm">
            <input type="reset" class="btn" value="Limpiar">
          </div>
        </div>
      </div>

    </form>
    <br>
    <br>
  </div>

<?php require 'php/footer.php';?>
