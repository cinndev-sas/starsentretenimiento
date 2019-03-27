<?php 
require_once 'conexion.php';
$a=$_REQUEST['titulo'];
$ax=substr($a, 32);
mysqli_query($mysqli,"INSERT INTO gvideosvideoyoutube(url)VALUES('$ax')");
  header("Location: galeria.php");

 ?>