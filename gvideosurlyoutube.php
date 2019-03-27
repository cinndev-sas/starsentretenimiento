<?php 
require_once 'conexion.php';
$a=$_REQUEST['titulo'];
mysqli_query($mysqli,"INSERT INTO gvideosvideoyoutube(url)VALUES('$a')");
  header("Location: galeria.php");

 ?>