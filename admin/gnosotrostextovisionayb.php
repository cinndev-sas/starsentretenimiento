<?php 
require_once 'conexion.php';
$a=$_REQUEST['titulo'];
$b=$_REQUEST['parrafo'];
$c=$_REQUEST['titulob'];
$d=$_REQUEST['parrafob'];
mysqli_query($mysqli,"INSERT INTO gnosotrosvisionparrafoayb(tituloa,parrafoa,titulob,parrafob)VALUES('$a','$b','$c','$d')");
  header("Location: nosotros.php");

 ?>