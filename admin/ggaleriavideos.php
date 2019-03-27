<?php 
require_once 'conexion.php';
$a=$_REQUEST['url'];
$ax=substr($a, 32);
mysqli_query($mysqli,"INSERT INTO ggaleriavideos(url)VALUES('$ax')");
  header("Location: galeria.php");

 ?>
