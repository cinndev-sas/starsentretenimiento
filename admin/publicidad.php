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
<link rel="stylesheet" type="text/css" href="css/mainstylep.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-12">
        <h1>Imagen de entrada, titulo y subtitulo</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modala">Cambiar</button>
      </div>>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-12">
        <h1>Titulo y subtitulo de publicidady comunicación</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalb">Cambiar</button>
      </div>
    </div>
  </div>



  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-6">
        <h1>Imagen de actividades de publicidady comunicación</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalc">Cambiar</button>
      </div>
      <div class="as col-md-6" >
        <h1>Parrafo y caracteristicas de publicidady comunicación</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modald">Cambiar</button>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-12">
        <h1>Titulo y parrafo de compromiso de la compañia</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modale">Cambiar</button>
      </div>
    </div>
  </div>



  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-12">
        <h1>Imagenes de la compañia a agregar </h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalf">Agregar</button>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el parrafo no debera superar los 500 caracteres y la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png, el tamaño de la imagen debe ser de 640px  de ancho por 425 de alto </h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gpublicidadentrada.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
    </div>
    <div class="form-group">
        <label for="subtitulo">Subtitulo:</label>
        <textarea class="texa form-control" id="subtitulo" name="subtitulo"  required></textarea>
    </div>
    <div>
        <label form="archivo">Imagen:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <p class="help-block"> Maximo 20 MB</p>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el Subtitulo no debera superar los 200 caracteres .</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gpublicidadtitysubtitulo.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
    </div>
    <div class="form-group">
        <label for="subtitulo">Subtitulo:</label>
        <textarea class="texa form-control" id="subtitulo" name="subtitulo"  required></textarea>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png,el tamaño de la imagen debe ser de 640px  de ancho por 425 de alto</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gpublicidadimagena.php" method="POST" enctype="multipart/form-data">
    <br>
    <div>
        <label form="fileToUpload">Imagen:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <p class="help-block"> Maximo 20 MB</p>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,el parrafo no podra superar los 1200 caracteres y  cada una de las caracteristicas no debera superar los 500 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gpublicidaddescipcion.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="a-a">Parrafo:</label>
        <textarea class="texa form-control" id="a-a" name="a-a" required></textarea>
    </div>
    <div class="form-group">
        <label for="a">Caracteristica a:</label>
        <textarea class="texa form-control" id="a" name="a" required></textarea>
    </div>
    <div class="form-group">
        <label for="b">Caracteristica b:</label>
        <textarea class="texa form-control" id="b" name="b"  required></textarea>
    </div>
    <div class="form-group">
        <label for="c">Caracteristica c:</label>
        <textarea class="texa form-control" id="c" name="c"  required></textarea>
    </div>
    <div class="form-group">
        <label for="d">Caracteristica d :</label>
        <textarea class="texa form-control" id="d" name="d"  required></textarea>
    </div>
    <div class="form-group">
        <label for="e">Caracteristica e:</label>
        <textarea class="texa form-control" id="e" name="e"  required></textarea>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,el titulo no podra superar los 200 caracteres y el parrafo no podra superar los 1200 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gpublicidadcompromiso.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo"required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"required></textarea>
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
<div id="modalf" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web, la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png, el tamaño de la imagen debe ser de 640px  de ancho por 425 de alto</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gpublicidadimagenes.php" method="POST" enctype="multipart/form-data">
    <br>
    <div>
        <label form="archivo">Imagen:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <p class="help-block"> Maximo 20 MB</p>
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