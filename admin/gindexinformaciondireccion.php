<?php 
require_once 'conexion.php';
$a=$_REQUEST['direccion'];
mysqli_query($mysqli,"INSERT INTO gfooterdireccion(direccion)VALUES('$a')");
  header("Location: footer.php");

 ?>