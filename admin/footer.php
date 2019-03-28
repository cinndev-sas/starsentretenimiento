<?php 
session_start();
require_once 'conexion.php';

if (isset($_SESSION['usuario'])) {?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/footerp.css" />
</head>
<body>
<div class="container-fluid">
  <div class="row">
      <div class="as col-md-12">
        <h1>Correo electronico</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modala">Cambiar</button>
      </div>
      <div class="as col-md-12">
        <h1>Telefono</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalb">Cambiar</button>
      </div>
      <div class="as col-md-12">
        <h1>Direccion</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalc">Cambiar</button>
      </div>
      <div class="as col-md-12">
        <h1>Direccion de google maps</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modald">Cambiar</button>
      </div>
      <div class="as col-md-12">
        <h1>Año</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modale">Cambiar</button>
      </div>
  </div>
</div>
</div>





  <!-- Modal -->
<div id="modala" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,cambia el correo electronico maximo tamaño del correo es de 100 caracteres</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexinformacioncorreo.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="correo">Correo electronico:</label>
        <input class="texa form-control" id="correo" name="correo" type="e-mail"  required/>
    </div>
    <div class="form-group">
        <label for="correob">Correo electronico alterno:</label>
        <input class="texa form-control" id="correob" name="correob" type="e-mail"  />
    </div>

        <button class="btn btn-success" type="submit" name="submit">Enviar</button>
    </form>

    </div>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>







  <!-- Modal -->
<div id="modalb" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web, el numero telefonico no podra superar los 10 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexinformaciontelefono.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="telefono">Telefono:</label>
        <input class="texa form-control" type="number" id="telefono" name="telefono" required/>
    </div>
    <div class="form-group">
        <label for="telefonob">Telefono alterno:</label>
        <input class="texa form-control" type="number" id="telefonob" name="telefonob"/>
    </div>

        <button class="btn btn-success" type="submit" name="submit">Enviar</button>
    </form>

    </div>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>







  <!-- Modal -->
<div id="modalc" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,esta direccion es la direccion normal que se encuentra en las distintas paginas web, ejemplo: cra 22 5 -123 sur.No podra se superior a 100 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexinformaciondireccion.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="direccion">Dirección:</label>
        <textarea class="texa form-control" id="direccion" name="direccion"  required></textarea>
    </div>

        <button class="btn btn-success" type="submit" name="submit">Enviar</button>
    </form>

    </div>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>







  <!-- Modal -->
<div id="modald" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,este formulario sera para modicar su ubicación en un sitiode ggogle maps, para hacer eso posible seguir los siguientes pasos: ir a google maps, ubicar su empresa,al tenerla ubicada darle click sobre esta, al hacerlo en la parte izquierda aparecera un menu donde aparecera la opcion de compratir daras click alli,ahi se desplegara un cuadro donde habarn dos opciones uno dira:"enviar un enlace" y el otro "insertar un mapa", daras click sobre insertar mapa al hacerlo, aparecera un link en la parte de arriba lo copearas y pegaras tal como aparece.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexinformaciondireccionmaps.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="direccionb">Dirección de google maps:</label>
        <textarea class="texa form-control" id="direccionb" name="direccionb"  required></textarea>
    </div>

        <button class="btn btn-success" type="submit" name="submit">Enviar</button>
    </form>

    </div>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>








  <!-- Modal -->
<div id="modale" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web, este campo es para ingresar el año cursante</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexinformacionanio.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="a">Año</label>
        <textarea class="texa form-control" id="a" name="a"  required></textarea>
    </div>

        <button class="btn btn-success" type="submit" name="submit">Enviar</button>
    </form>

    </div>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
}else{
  echo '<script> window.location="indexadmin.php"; </script>';
}
?>