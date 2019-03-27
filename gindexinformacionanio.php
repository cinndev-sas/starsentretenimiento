<?php 
require_once 'conexion.php';
$a=$_REQUEST['a'];
mysqli_query($mysqli,"INSERT INTO gfooteranio(anio)VALUES('$a')");
  header("Location: footer.php");

 ?>