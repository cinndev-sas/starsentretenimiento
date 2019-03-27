<?php 
require_once 'conexion.php';
$a=$_REQUEST['titulo'];
$b=$_REQUEST['subtitulo'];
mysqli_query($mysqli,"INSERT INTO gludicastitysubtirulo(titulo,subtitulo)VALUES('$a','$b')");
  header("Location: ludicascorporativas.php");

 ?>