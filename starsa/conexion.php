<?php
 
$mysqli = new mysqli("localhost", "root", "12345", "dbstars");
 
if($mysqli->connect_errno) {
	echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
}
return $mysqli;
 
 ?>