<?php 
require_once 'conexion.php';
$a=$_REQUEST['direccionb'];
mysqli_query($mysqli,"INSERT INTO gfooterdireccionmaps(direccionmaps)VALUES('$a')");
  header("Location: inicio.php");

 ?>