<?php 
require_once 'conexion.php';
$a=$_REQUEST['direccionb'];
$ax=substr($a, 50,-85);
mysqli_query($mysqli,"INSERT INTO gfooterdireccionmaps(direccionmaps)VALUES('$ax')");
  header("Location: inicio.php");

 ?>

