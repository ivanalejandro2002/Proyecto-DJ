<?php
session_start();
$servidor = "localhost";
$usuario ="root";
$clave ="";
$BaseDeDatos ="serv_dj";

$enlace = mysqli_connect($servidor, $usuario, $clave,$BaseDeDatos);

$TxtUsr = $_POST['TxtUsr'];
$TxtPsw = $_POST['TxtPsw'];

  $sql = "SELECT*FROM admin_dj WHERE User = '$TxtUsr' AND Pass = '$TxtPsw'";
  $resultado = mysqli_query($enlace, $sql);
  $numResultado = mysqli_num_rows($resultado);

  if($numResultado == 1){
    $_SESSION['TxtUsr'] = $_POST['TxtUsr'];
    $_SESSION['TxtPsw'] = $_POST['TxtPsw'];
    unset($_SESSION["Error"]); 
    header("location:../AceptaAdmin.php");

  }else{
    $_SESSION["Error"] = "1";
    header("location:../admin.php");
  }

?>