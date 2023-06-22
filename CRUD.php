


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

  <style>
    table,th,td{
      border: 1px solid black;
    }

    button{
      margin-top: 20px;
    }

  </style>

</head>
<body class="grey darken-fondo2">
<nav class="grey darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo"><img class="grey darken-4 " src="imgs/logo_FINAL.png"  id="logoP"></a>
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


<?php

include_once ('ConexionCRUD.php');
$consulta = Conexion::ConexionBD();

?>

  <div class="grey darken-vacio">
    <h1>CRUD</h1>

    <div>
      <form method="POST" action="DatosCRUD.php">

          <h5>Folio:</h5>
          <input type="text" name="Folio" id="Folio">

          <h5>Nombre:</h5>
          <input type="text" name="Nombre" id="Nombre">

          <h5>Apellido Paterno:</h5>
          <input type="text" name="AP" id="AP">

          <h5>Apellido Materno:</h5>
          <input type="text" name="AM" id="AM">

          <h5>Correo:</h5>
          <input type="email" name="Correo" id="Correo">

          <h5>CURP:</h5>
          <input type="text" name="CURP" id="CURP">

          <h5>Telefono:</h5>
          <input type="tel" name="Telefono" id="Telefono">


          <h5>Entidad Federativa:</h5>
          <input type="text" name="EF" id="EF">

          <h5>Alcaldia:</h5>
          <input type="text" name="Alcaldia" id="Alcaldia">

          <h5>Evento:</h5>
          <input type="text" name="Evento" id="Evento">

          <h5>Fecha del Evento:</h5>
          <input type="text" name="FechaEvento" id="FechaEvento">

          <h5>Hora del Evento:</h5>
          <input type="text" name="HoraEvento" id="HoraEvento">

          <h5>Numero de Invitados:</h5>
          <input type="number" name="NumInvitados" id="NumInvitados">

          <h5>DJ:</h5>
          <input type="text" name="DJ" id="DJ">
          
          <h5>Lugar:</h5>
          <input type="text" name="Lugar" id="Lugar">

          <input type="submit" value="Guardar" name="insertar" id="insertar">
          <input type="submit" value="Modificar" name="modificar" id="modificar">
          <input type="submit" value="Eliminar" name="eliminar" id="eliminar">


      </form>



      

      <h2>Lista de registros</h2>

      <div>

      <table id="tablaCRUD">

        <tr>
          <th>Folio</th>
          <th>Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Correo</th>
          <th>CURP</th>
          <th>Telefono</th>
          <th>Entidad Federativa</th>
          <th>Alcaldia</th>
          <th>Evento</th>
          <th>Fecha de Evento</th>
          <th>Hora de Evento</th>
          <th>Numero de Invitados</th>
          <th>DJ</th>
          <th>Lugar</th>
          <th>Accion</th>
        </tr>
        <tbody>
<?php
        include_once('DatosCRUD.php');
        $consulta = cCRUD::mostrarUsuarios();

        foreach($consulta as $fila){

          echo "<tr>";

          echo"<td>".$fila['Folio']."</td>";
          echo"<td>".$fila['Nombre']."</td>";
          echo"<td>".$fila['Apellido Paterno']."</td>";
          echo"<td>".$fila['Apellido Materno']."</td>";
          echo"<td>".$fila['Correo']."</td>";
          echo"<td>".$fila['CURP']."</td>";
          echo"<td>".$fila['Telefono']."</td>";
          echo"<td>".$fila['EntidadFederativa']."</td>";
          echo"<td>".$fila['Alcaldia']."</td>";
          echo"<td>".$fila['Evento']."</td>";
          echo"<td>".$fila['FechaEvento']."</td>";
          echo"<td>".$fila['HoraEvento']."</td>";
          echo"<td>".$fila['NumeroInvitados']."</td>";
          echo"<td>".$fila['DJ']."</td>";
          echo"<td>".$fila['Lugar']."</td>";
          echo"<td>"."<input type=\"submit\" value=\"Seleccionar\" onClick=\"Seleccionar()\">"."</td>";

          echo "</tr>";

        }

        

?>
        </tbody>



      </table>

      </div>




  </div>

  
  <footer class="page-footer grey darken-fondo2">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Sobre nosotros</h5>
        <p class="grey-text text-lighten-4">Somos un grupo de estudiantes de ESCOM realizando este proyecto para la materia "Desarrollo de Tecnologías para la Web".</p>
        
        
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Integrantes</h5>
        <ul>
          <li><a class="white-text" href="#!">Arturo</a></li>
          <li><a class="white-text" href="#!">Iván</a></li>
            <li><a class="white-text" href="#!">Luis</a></li>
            <li><a class="white-text" href="#!">Mario</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">GitHub</h5>
          <ul>
            <li>
              <div class="col s2">
                <img src="imgs/OldRevan66.png" class="circle responsive-img">
              </div>
              <div class="col s10">
                <a class="white-text" href="https://github.com/OldRevan66">OldRevan66</a>
              </div>
            </li>
            <li>
              <div class="col s2">
              <img src="imgs/ivanalejandro2002.png" class="circle responsive-img">
              </div>
              <div class="col s10">
                <a class="white-text" href="https://github.com/ivanalejandro2002">ivanalejandro2002</a>
              </div>
            </li>
            <li>
              <div class="col s2">
                <img src="imgs/Wuiszho.jpeg" class="circle responsive-img">
              </div>
              <div class="col s10">
                <a class="white-text" href="https://github.com/Wuiszho">Wuiszho</a>
              </div>
            </li>
            <li>
              <div class="col s2">
                <img src="imgs/MarioARC21.jpeg" class="circle responsive-img">
              </div>
              <div class="col s10">
                <a class="white-text" href="https://github.com/MarioARC21">MarioARC21</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/contratacion.js"></script>

  <script>
    function Seleccionar(){
      var table = document.getElementById("tablaCRUD");
      for(var i=1;i<table.rows.length;i++){
        table.rows[i].onclick = function(){
          document.getElementById('Folio').value = this.cells[0].innerHTML;
          document.getElementById('Nombre').value = this.cells[1].innerHTML;
          document.getElementById('AP').value = this.cells[2].innerHTML;
          document.getElementById('AM').value = this.cells[3].innerHTML;
          document.getElementById('Correo').value = this.cells[4].innerHTML;
          document.getElementById('CURP').value = this.cells[5].innerHTML;
          document.getElementById('Telefono').value = this.cells[6].innerHTML;
          document.getElementById('EF').value = this.cells[7].innerHTML;
          document.getElementById('Alcaldia').value = this.cells[8].innerHTML;
          document.getElementById('Evento').value = this.cells[9].innerHTML;
          document.getElementById('FechaEvento').value = this.cells[10].innerHTML;
          document.getElementById('HoraEvento').value = this.cells[11].innerHTML;
          document.getElementById('NumInvitados').value = this.cells[12].innerHTML;
          document.getElementById('DJ').value = this.cells[13].innerHTML;
          document.getElementById('Lugar').value = this.cells[14].innerHTML;
        }
      }
    }


  </script>
  </body>
</html>