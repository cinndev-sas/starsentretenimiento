<?php 
require_once 'conexion.php';
$a=$_REQUEST['data'];
$b=$_REQUEST['datb'];
$c=$_REQUEST['datc'];
mysqli_query($mysqli,"INSERT INTO giniciodatosestadisticos(datoa,datob,datoc)VALUES('$a','$b','$c')");
  header("Location: inicio.php");

 ?>