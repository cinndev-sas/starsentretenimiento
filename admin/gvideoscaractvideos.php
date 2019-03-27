<?php 
require_once 'conexion.php';
$a=$_REQUEST['a-a'];
$b=$_REQUEST['a'];
$c=$_REQUEST['b'];
$d=$_REQUEST['c'];
$e=$_REQUEST['d'];
$f=$_REQUEST['e'];
$g=$_REQUEST['f'];
$h=$_REQUEST['g'];
$i=$_REQUEST['h'];
mysqli_query($mysqli,"INSERT INTO gvideoscaracteristicas(parrafo,caracteristicaa,caracteristicab,caracteristicac,caracteristicad,caracteristicae,caracteristicaf,caracteristicag,caracteristicah)VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i')");
  header("Location: galeria.php");

 ?>