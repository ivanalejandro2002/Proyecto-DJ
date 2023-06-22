<?php require 'php/header.php'; ?>

  <div class="white darken-1">
    <br>
    <form id="mandaPDF" action = recuperaPDF.php method="post">
      <div style="display:block" class ="container" id="contenedorLogin">
        <h2>Recuperación de Comprobante</h2>
        <h5>Ingresa tu CURP y la fecha del evento en formato DDMMAAAA para recuperar el PDF de tu comprobante:</h5>
        <div class = "section">

          <div class="row">
              <div class="input-field col l6 m6 s12"> 
                <i class="material-icons prefix orangeengine-text">more_horiz</i>
                <input name="CURP" id="CURP" type="text">
                <label for="folio">CURP: </label>
              </div>

              <div class="input-field col l6 m6 s12"> 
                <i class="material-icons prefix orangeengine-text">more_horiz</i>
                <input name="fecha" id="fecha" type="text">
                <label for="fecha">Fecha del evento: </label>
              </div>
          </div>

          <div class="row">
              <div class="col l6 m12 s12 offset-l3"> 
                  <br>
                  <a id = "botonLogIn2" onclick="mandarDatosPDF()" class="waves-effect waves-light btn">Recuperar</a>
              </div>
          </div>

        </div>
      </div>
      
    </form>
    <br>
    <br>
  </div>

  <?php require 'php/footer.php'; ?>