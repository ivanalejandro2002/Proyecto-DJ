<?php
if(isset($_SESSION['TxtUsr'])){ 
    $TxtUsr = $_SESSION['TxtUsr'];
    $TxtPsw = $_SESSION['TxtPsw'];
  }else{
    header("location:admin.php");
  }

$servidor = "localhost";
$usuario ="root";
$clave ="";
$BaseDeDatos ="serv_dj";

$enlace = mysqli_connect($servidor, $usuario, $clave,$BaseDeDatos);
$sql = "SELECT*FROM serv_dj ORDER BY Folio";
$resultado = mysqli_query($enlace, $sql);
$numFilas = mysqli_num_rows($resultado);
$arreglo = mysqli_fetch_array($resultado);
?>
<table class="responsive-table centered highlight">
        <thead>
          <tr>
              <th>Folio</th>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Correo</th>
              <th>Curp</th>
              <th>Teléfono</th>
              <th>Entidad Federativa</th>
              <th>Alcaldia</th>
              <th>Evento</th>
              <th>Fecha</th>
              <th>Hora</th>
              <th>Invitados</th>
              <th>DJ</th>
              <th>Lugar</th>
            </tr>
        </thead>
        <tbody>
            <form action="#">
             <?php require 'php/pruebas.php' ?>
            </form>
        </tbody>
      </table>