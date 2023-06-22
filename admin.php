<?php require('./php/header.php')?>

  <div class="grey darken-vacio">
    <br>
    <form>
      
      <div style="display:block" class ="container" id="contenedorLogin">
        
        <h2>Administrador</h2>
        <div class = "section">

          <div class="row">
              <div class="input-field col l6 m12 s12 offset-l3"> 
                <i class="material-icons prefix orangeengine-text">perm_identity</i>
                <input id="username" type="text">
                <label for="username">Nombre de Usuario: </label>
              </div>
          </div>

          <div class="row">
              <div class="input-field col l6 m12 s12 offset-l3"> 
                <i class="material-icons prefix orangeengine-text">lock</i>
                <input id="password" type="password">
                <label for="password">Contraseña: </label>
              </div>
          </div>

          <div class="row">
              <div class="col l6 m12 s12 offset-l3"> 
                  <br>
                  <a id = "botonLogIn2" onclick="muestraContacto()" class="waves-effect waves-light btn">Log In</a>
              </div>
          </div>

        </div>
      </div>
      
    </form>
    <br>
  </div>

  <?php require('./php/footer.php')?>