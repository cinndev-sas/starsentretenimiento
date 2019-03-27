<?php 
require_once 'conexion.php';
$a=$_REQUEST['telefono'];
$b=$_REQUEST['telefonob'];
mysqli_query($mysqli,"INSERT INTO gfootertelefono(telefono,telefonob)VALUES('$a','$b')");
  header("Location: footer.php");

 ?>