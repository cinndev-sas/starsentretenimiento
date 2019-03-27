<?php 
require_once 'conexion.php';
$a=$_REQUEST['a-a'];
$b=$_REQUEST['a'];
$c=$_REQUEST['b'];
$d=$_REQUEST['c'];
$e=$_REQUEST['d'];
$f=$_REQUEST['e'];
mysqli_query($mysqli,"INSERT INTO gpublicidadcaract(parrafo,caracteristicaa,caracteristicab,caracteristicac,caracteristicad,caracteristicae)VALUES('$a','$b','$c','$d','$e','$f')");
  header("Location: publicidad.php");

 ?>