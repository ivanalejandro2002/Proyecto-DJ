<?php require('./php/header.php')?>

  <div class="white darken-1">
    <br>
    <form>
      <div style="display:block" class ="container" id="contenedorLogin">
        <h2>Recuperación de Comprobante</h2>
        <h5>Ingresa tu folio para recuperar el PDF de tu comprobante:</h5>
        <div class = "section">

          <div class="row">
              <div class="input-field col l6 m12 s12 offset-l3"> 
                <i class="material-icons prefix orangeengine-text">more_horiz</i>
                <input id="folio" type="text">
                <label for="folio">Folio: </label>
              </div>
          </div>

          <div class="row">
              <div class="col l6 m12 s12 offset-l3"> 
                  <br>
                  <a id = "botonLogIn2" onclick="muestraContacto()" class="waves-effect waves-light btn">Recuperar</a>
              </div>
          </div>

        </div>
      </div>
      
    </form>
    <br>
    <br>
  </div>

  <?php require('./php/footer.php')?>