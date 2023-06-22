<?php
session_start();

if(isset($_SESSION['TxtUsr'])){ 
  $TxtUsr = $_SESSION['TxtUsr'];
  $TxtPsw = $_SESSION['TxtPsw'];
  
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
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo"><img src="imgs/logoP4.png"  id="logoP"></a>
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

    <div class="container">
      <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a class="active" href="#C">C</a></li>
          <li class="tab col s3"><a href="#R">R</a></li>
          <li class="tab col s3 disabled"><a href="#U">U</a></li>
          <li class="tab col s3"><a href="#D">D</a></li>
        </ul>
      </div>
      <div id="C" class="col s12"><?php require 'php/C.php'?></div>
      <div id="R" class="col s12">Test 2</div>
      <div id="U" class="col s12">Test 3</div>
      <div id="D" class="col s12">Test 4</div>
  </div>

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
  <script src="js/admin.js"></script>

  </body>
</html>
