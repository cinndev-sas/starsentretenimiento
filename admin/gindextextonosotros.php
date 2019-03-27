<?php 
require_once 'conexion.php';
$valoruno=$_REQUEST['titulo'];
$valordos=$_REQUEST['parrafo'];
mysqli_query($mysqli,"INSERT INTO giniciotextonosotros(titulo,parrafo)VALUES('$valoruno','$valordos')");
  header("Location: nosotros.php");

 ?>