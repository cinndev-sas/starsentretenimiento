<?php 
require_once 'conexion.php';
$a=$_REQUEST['correo'];
$b=$_REQUEST['correob'];
mysqli_query($mysqli,"INSERT INTO gfootercorreo(correo,correob)VALUES('$a','$b')");
  header("Location: footer.php");

 ?>