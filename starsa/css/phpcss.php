<?php
header("Content-type: text/css");
    require_once 'conexion.php';
 $sql="SELECT * FROM giniciofotounoslider  ORDER BY `fecharegistro` DESC LIMIT 1";
 $result_set=mysqli_query($mysqli,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
   $path = $row["imagen"];
 
echo "
.slide{
background: url(../../$path)no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    height: 49vw;
}
";
}





require_once 'conexion.php';
 $sqla="SELECT * FROM giniciofotodoslider  ORDER BY `fecharegistro` DESC LIMIT 1";
 $result_seta=mysqli_query($mysqli,$sqla);
 while($rowa=mysqli_fetch_array($result_seta))
 {
   $patha = $rowa["imagen"];
 
echo "
.slide2{
background: url(../../$patha)no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    height: 49vw;
}
";
}





require_once 'conexion.php';
 $sql="SELECT * FROM giniciofototreslider  ORDER BY `fecharegistro` DESC LIMIT 1";
 $result_set=mysqli_query($mysqli,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
   $path = $row["imagen"];
 
echo "
.slide3{
background: url(../../$path)no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    height: 49vw;
}
";
}








require_once 'conexion.php';
 $sql="SELECT * FROM gvideosentrada  ORDER BY `fecharegistro` DESC LIMIT 1";
 $result_set=mysqli_query($mysqli,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
   $path = $row["imagen"];
 
echo "
.inner-page-banner-1 {
    background: url(../../$path) no-repeat 0px 0px;
    background-size: cover;
    min-height: 470px;
   background-attachment: fixed;
}
";
}






require_once 'conexion.php';
 $sql="SELECT * FROM gnosotrosentrada  ORDER BY `fecharegistro` DESC LIMIT 1";
 $result_set=mysqli_query($mysqli,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
   $path = $row["imagen"];
 
echo "
.inner-page-banner {
    background: url(../../$path) no-repeat 0px 0px;
    background-size: cover;
    min-height: 470px;
    background-attachment: fixed;
}
";
}







require_once 'conexion.php';
 $sql="SELECT * FROM gludicasentrada  ORDER BY `fecharegistro` DESC LIMIT 1";
 $result_set=mysqli_query($mysqli,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
   $path = $row["imagen"];
 
echo "
.inner-page-banner-2 {
    background: url(../../$path) no-repeat 0px 0px;
    background-size: cover;
    min-height: 470px;
   background-attachment: fixed;
}
";
}






require_once 'conexion.php';
 $sql="SELECT * FROM gpublicidadentrada  ORDER BY `fecharegistro` DESC LIMIT 1";
 $result_set=mysqli_query($mysqli,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
   $path = $row["imagen"];
 
echo "
.inner-page-banner-3 {
    background: url(../../$path) no-repeat 0px 0px;
    background-size: cover;
    min-height: 470px;
    background-attachment: fixed;
}
";
}




require_once 'conexion.php';
 $sql="SELECT * FROM giniciotextoestadisticas  ORDER BY `fecharegistro` DESC LIMIT 1";
 $result_set=mysqli_query($mysqli,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
   $path = $row["imagen"];
 
echo "
.Welcome-bottom {
    background: url(../../$path) no-repeat 0px 0px;
    background-size: cover;
}
";
}








?>








