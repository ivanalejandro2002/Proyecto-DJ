<?php
session_start();

if(isset($_SESSION['TxtUsr'])){ //La sesión existe sí y solo si pasó por le login y los datos fueron correctos.
  $TxtUsr = $_SESSION['TxtUsr'];
  $TxtPsw = $_SESSION['TxtPsw'];
  header("location:AceptaAdmin.php");

}

?>

<?php require 'php/header.php'; ?>

  <div class="grey darken-vacio">
    <br>
    <form method="post" action="php/sesion.php">
      
      <div style="display:block" class ="container" id="contenedorLogin">
        
        <h2>Administrador</h2>
        <div class = "section">

          <div class="row">
              <div class="input-field col l6 m12 s12 offset-l3"> 
                <i class="material-icons prefix orangeengine-text">perm_identity</i>
                <input id="username" type="text" name="TxtUsr">
                <label for="username">Nombre de Usuario: </label>
              </div>
          </div>

          <div class="row">
              <div class="input-field col l6 m12 s12 offset-l3"> 
                <i class="material-icons prefix orangeengine-text">lock</i>
                <input id="password" type="password" name="TxtPsw">
                <label for="password">Contraseña: </label>
              </div>
          </div>

          <div class="row">
              <div class="col l6 m12 s12 offset-l3"> 
                  <br>
                  <button type="submit" id = "botonLogIn2" class="waves-effect waves-light btn" name="Btn">Log In</a>
              </div>
          </div>

        </div>
      </div>
      
    </form>
    <?php if(isset($_SESSION["Error"])){
      echo "<br><h5 class='center red-text'>Usuario o contraseña incorrectos</h5><br>";
    }else{

    }
    ?>
    <br>
  </div>

  <?php require 'php/footer.php'; ?>