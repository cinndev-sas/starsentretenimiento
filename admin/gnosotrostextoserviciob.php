<?php 
require_once 'conexion.php';
$a=$_REQUEST['titulo'];
$b=$_REQUEST['parrafo'];
mysqli_query($mysqli,"INSERT INTO gnosotrosserviciob(titulo,parrafo)VALUES('$a','$b')");
  header("Location: nosotros.php");

 ?>