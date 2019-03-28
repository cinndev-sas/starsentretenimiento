<?php 
session_start();
?>
<?php 
require_once 'conexion.php';
if (isset($_POST['enviar'])) {
  $usuario = $_POST['usuario'];
  $pw = $_POST['password'];
  $log = mysqli_query($mysqli,"SELECT * FROM admin_user WHERE usuario='$usuario' AND clave='$pw'");
  if (mysqli_num_rows($log)>0) {
    $row = mysqli_fetch_array($log);
    $_SESSION["usuario"] = $row['usuario'];
    echo 'iniciando sesion para '.$_SESSION['usuario'].' <p>';
    echo '<script> window.location="main.php";</script>';
  }else{
    echo '<script> alert("usuario o contraseña incorrectos");</script>';
    echo '<script> window.location="indexadmin.php";</script>';

   }
}
 ?>
