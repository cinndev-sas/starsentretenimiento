<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/galeriap.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-12">
          <h1>Entrada de videos</h1>
          <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modala">Cambiar</button>
      </div>
      <div class="as col-md-12">
          <h1>Titulo y Subtitulo de videos</h1>
          <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalb">Cambiar</button>
      </div>
    </div>
  </div>







  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-6">
          <h1>Caracteristicas de videos</h1>
          <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalc">Cambiar</button>
      </div>
      <div class="as col-md-6">
          <h1>Video de youtube</h1>
          <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modald">Cambiar</button>
      </div>
    </div>
  </div>



  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-12">
          <h1>Titulo y Subtitulo de videos institucionales</h1>
          <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modale">Cambiar</button>
      </div>
      <div class="as col-md-12">
          <h1>agregar video</h1>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el subtitulo no debera superar los 200 caracteres y la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gvideosentrada.php" method="POST" enctype="multipart/form-data">
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el subtitulo no debera superar los 200 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gvideosentradatitysubtitulo.php" method="POST" enctype="multipart/form-data">
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web, cada una de las caracteristicas no debera superar los 1000 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gvideoscaractvideos.php" method="POST" enctype="multipart/form-data">
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
    <div class="form-group">
        <label for="f">Caracteristica f:</label>
        <textarea class="texa form-control" id="f" name="f"  required></textarea>
    </div>
    <div class="form-group">
        <label for="g">Caracteristica g:</label>
        <textarea class="texa form-control" id="g" name="g"  required></textarea>
    </div>
    <div class="form-group">
        <label for="h">Caracteristica h:</label>
        <textarea class="texa form-control" id="h" name="h"  required></textarea>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,el titulo no podra exceder los 200 caracteres y el subtitulo de igual forma.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gvideostitsubvideos.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Titulo:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
    </div>
    <div class="form-group">
        <label for="subtitulo">SubTitulo:</label>
        <textarea class="texa form-control" id="subtitulo" name="subtitulo" required></textarea>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,para ello deberas ubicar tu video en Youtube y copear la url de la barra de navegacion y pegarla aca, RESTRICCION: no se pueden ubicar listas de reproduccion solo debe ser un video en particular.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gvideosurlyoutube.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="titulo">Url:</label>
        <textarea class="texa form-control" id="titulo" name="titulo" required></textarea>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,para ello deberas ubicar tu video en Youtube y copear la url de la barra de navegacion y pegarla aca, RESTRICCION: no se pueden ubicar listas de reproduccion solo debe ser un video en particular.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="ggaleriavideos.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="url">Url:</label>
        <textarea class="texa form-control" id="url" name="url" required></textarea>
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