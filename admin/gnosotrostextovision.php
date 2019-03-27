<?php 
require_once 'conexion.php';
$a=$_REQUEST['titulo'];
$b=$_REQUEST['subtitulo'];
$c=$_REQUEST['parrafo'];
mysqli_query($mysqli,"INSERT INTO gnosotrosvision(titulo,subtitulo,parrafo)VALUES('$a','$b','$c')");
  header("Location: nosotros.php");

 ?>