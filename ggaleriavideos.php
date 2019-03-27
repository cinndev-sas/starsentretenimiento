<?php 
require_once 'conexion.php';
$a=$_REQUEST['url'];
mysqli_query($mysqli,"INSERT INTO ggaleriavideos(url)VALUES('$a')");
  header("Location: galeria.php");

 ?>