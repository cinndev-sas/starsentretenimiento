<?php 
require_once 'conexion.php';
$a=$_REQUEST['titulo'];
$b=$_REQUEST['subtitulo'];
mysqli_query($mysqli,"INSERT INTO gvideosttitulovideos(titulo,subtitulo)VALUES('$a','$b')");
  header("Location: galeria.php");

 ?>