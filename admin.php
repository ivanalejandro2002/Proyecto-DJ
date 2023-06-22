<?php
session_start();

if(isset($_SESSION['TxtUsr'])){ //La sesión existe sí y solo si pasó por le login y los datos fueron correctos.
  $TxtUsr = $_SESSION['TxtUsr'];
  $TxtPsw = $_SESSION['TxtPsw'];
  header("location:AceptaAdmin.php");

}else{
  header("location:admin.php");
}

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
</head>
<body class="grey darken-fondo2">
  <nav class="grey darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo"><img src="imgs/logo_FINAL.png"  id="logoP"></a>
      <ul class="right hide-on-med-and-down">
        <?php
        if(isset($_SESSION['TxtUsr'])){
          require 'php/Bienvenido.php';
        }
        ?>
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
    <br>
    <form method="post" action="sesion.php">
      
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
  <footer class="page-footer grey darken-fondo2">
    <div class="container">
      <div class="row">
        <div class="col l12">
          <h5 class="white-text">DJ's Hub LTD</h5>
          <p class="grey-text text-lighten-4">La mejor selección de DJ’s para tu evento especial además del salón ideal y el banquete indicado.</p>


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