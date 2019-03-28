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
<link rel="stylesheet" type="text/css" href="css/nosotrosp.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-12">
        <h1>Imagen, titulo y subtitulo</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modala">Cambiar</button>
      </div>
      <div class="as col-md-12">
        <h1>Titulo y subtitulo de compañia</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalb">Cambiar</button>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-4">
        <h1>Titulo y parrafo de Mision</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalc">Cambiar</button>
      </div>
      <div class="as col-md-4">
        <h1>imagen uno de la Mision</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modald">Cambiar</button>
      </div>
      <div class="as col-md-4">
        <h1>imagen dos de la Mision</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modale">Cambiar</button>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-4">
        <h1>imagen de Vision</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalg">Cambiar</button>
      </div>      
      <div class="as col-md-8">
        <h1>Titulo,subtitulo y parrafo de visión</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalf">Cambiar</button>
              <div class="as col-md-12">
        <h1>Caracteristicas de nuetra visión</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalf-a">Cambiar</button>
      </div>

      </div>

    </div>
  </div>


  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-12">
        <h1>Politica de Servicio y Calidad</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalh">Cambiar</button>
      </div>
      <div class="as col-md-3">
        <h1>Caracteristica uno de servicio y calidad</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modali">Cambiar</button>

      </div>
      <div class="as col-md-3">
        <h1>Caracteristica dos de servicio y calidad</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalj">Cambiar</button>

      </div>
      <div class="as col-md-3">
        <h1>Caracteristica tres de servicio y calidad</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalk">Cambiar</button>

      </div>
      <div class="as col-md-3">
        <h1>Caracteristica cuatro de servicio y calidad</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modall">Cambiar</button>

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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el subtitulo no debera superar los 200 caracteres y la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrosentrada.php" method="POST" enctype="multipart/form-data">
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el subtitulo no debera superar los 200 caracteres .</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotroscompania.php" method="POST" enctype="multipart/form-data">
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 100 caracteres, el parrafo no debera superar los 1200 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrosmision.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"  required></textarea>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web, la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrosimagena.php" method="POST" enctype="multipart/form-data">
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










  <!-- Modal -->
<div id="modale" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web, la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrosimagenb.php" method="POST" enctype="multipart/form-data">
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








  <!-- Modal -->
<div id="modalf" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el subtitulo maximo de 100 caracteres y el parrafo no debera superar los 1200 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrostextovision.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
    </div>
    <div class="form-group">
        <label for="subtitulo">Subtitulo:</label>
        <textarea class="texa form-control" id="subtitulo" name="subtitulo"  required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"  required></textarea>
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
<div id="modalf-a" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres,los subtitulos seran maximo de 100 caracteres y los parrafos de maximo 800 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrostextovisionayb.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Primer Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Primer Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"  required></textarea>
    </div>
    <div class="form-group">
        <label for="titulob">Segundo Titulo:</label>
        <textarea class="texa form-control" id="titulob" name="titulob" required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafob">Segundo Parrafo:</label>
        <textarea class="texa form-control" id="parrafob" name="parrafob"  required></textarea>
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
<div id="modalg" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web, la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png, el tamaño de la imagen debe ser de 1600px por 800px.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrosvisionimagen.php" method="POST" enctype="multipart/form-data">
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














  <!-- Modal -->
<div id="modalh" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el titulo maximo de 100 caracteres y el parrafo no debera superar los 1200 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrostextopoliticayservcio.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"  required></textarea>
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
<div id="modali" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el titulo maximo de 100 caracteres y el parrafo no debera superar los 1200 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrostextoservicioa.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"  required></textarea>
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
<div id="modalj" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el titulo maximo de 100 caracteres y el parrafo no debera superar los 1200 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrostextoserviciob.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"  required></textarea>
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
<div id="modalk" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el titulo maximo de 100 caracteres y el parrafo no debera superar los 1200 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrostextoservicioc.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"  required></textarea>
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
<div id="modall" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el titulo maximo de 100 caracteres y el parrafo no debera superar los 1200 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gnosotrostextoserviciod.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"  required></textarea>
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