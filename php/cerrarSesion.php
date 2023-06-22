<?php
session_start();

unset($_SESSION['TxtUsr']); 
header("location:../index.php"); 
?>