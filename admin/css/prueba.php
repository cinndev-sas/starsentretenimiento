<?php
header("Content-type: text/css");
    require_once 'conexion.php';
 $sql="SELECT * FROM giniciofotounoslider  ORDER BY `fecharegistro` DESC LIMIT 1";
 $result_set=mysqli_query($mysqli,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
   $path = $row["imagen"];
 
echo "
body{
background: url(../$path);
color: $path;
font-weight: bold;
font-size: 1.2em;
text-align: left;
}
";
}
?>