<?php 
session_start();
session_destroy();
echo 'cerraste cesion';
echo '<script> window.location="indexadmin.php"; </script>';
 ?>