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
      <div class="as col-md-4">
        <h1>Imagen y textos del primer slider</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modala">Cambiar</button>
      </div>
      <div class="as col-md-4" >
        <h1>Imagen y textos del segundo slider</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalb">Cambiar</button>
      </div>
      <div class="as col-md-4">
        <h1>Imagen y textos del tercer slider</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalc">Cambiar</button>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-6">
        <h1>Texto de nosotros</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modald">Cambiar</button>
      </div>
      <div class="as col-md-3" >
        <h1>Imagen de inicio nosotros</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modale">Cambiar</button>
      </div>
      <div class="as col-md-3">
        <h1>Segunda imagen de inicio  nosotros</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalf">Cambiar</button>
      </div>
    </div>
  </div>



  <div class="container-fluid">
    <div class="row">
      <div class="as col-md-6">
        <h1>Numeros de estadisticas</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalg">Cambiar</button>
      </div>
      <div class="as col-md-6" >
        <h1>Texto e imagen de fondo de estadisticas</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalh">Cambiar</button>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <h1 class="aw">Servicios</h1>
      <div class="as col-md-4">
        <h1>Servicio</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modali">Cambiar</button>
      </div>
      <div class="as col-md-4" >
        <h1>Servicio</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalj">Cambiar</button>
      </div>
      <div class="as col-md-4">
        <h1>Servicio</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalk">Cambiar</button>
      </div>
      <div class="as col-md-4">
        <h1>Servicio</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modall">Cambiar</button>
      </div>
      <div class="as col-md-4" >
        <h1>Servicio</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalm">Cambiar</button>
      </div>
      <div class="as col-md-4">
        <h1>Servicio</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modaln">Cambiar</button>
      </div>
    </div>
  </div>



  <div class="container-fluid">
    <div class="row">
      <h1 class="aw">Clientes</h1>
      <div class="as col-md-2">
        <h1>Cliente uno</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalt">Cambiar</button>
      </div>
      <div class="as col-md-2">
        <h1>Cliente dos</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalu">Cambiar</button>
      </div>
      <div class="as col-md-2">
        <h1>Cliente tres</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalv">Cambiar</button>
      </div>
      <div class="as col-md-2">
        <h1>Cliente cuatro</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalx">Cambiar</button>
      </div>
      <div class="as col-md-2">
        <h1>Cliente cinco</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modaly">Cambiar</button>
      </div>
      <div class="as col-md-2">
        <h1>Cliente seis</h1>
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modalz">Cambiar</button>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el parrafo no debera superar los 500 caracteres y la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png, el tamaño de la imagen debe ser de 1600px por 800px.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexfotoslidera.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="encabezado">Titulo:</label>
        <textarea class="texa form-control" id="encabezado" name="encabezado" required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"  required></textarea>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el parrafo no debera superar los 500 caracteres y la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png, el tamaño de la imagen debe ser de 1600px por 800px.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexfotosliderb.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="encabezado">Titulo:</label>
        <textarea class="texa form-control" id="encabezado" name="encabezado" required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"  required></textarea>
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
<div id="modalc" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web el titulo sera maximo de 200 caracteres, el parrafo no debera superar los 500 caracteres y la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png, el tamaño de la imagen debe ser de 1600px por 800px.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexfotosliderc.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="encabezado">Titulo:</label>
        <textarea class="texa form-control" id="encabezado" name="encabezado" required></textarea>
    </div>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"  required></textarea>
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
<div id="modald" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,el texto no debera superar los 1500 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindextextonosotros.php" method="POST" enctype="multipart/form-data">
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
<div id="modale" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindeximagenanosotros.php" method="POST" enctype="multipart/form-data">
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
<div id="modalf" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindeximagenanosotrosb.php" method="POST" enctype="multipart/form-data">
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
<div id="modalg" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,los numeros no pueden superar 5 carcarteres ejemplo: 50000.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexdatosestadisticos.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="data">Dato uno:</label>
        <input type="number" class="texa form-control" id="data" name="data" required>
    </div>
    <div class="form-group">
        <label for="datb">Dato dos:</label>
        <input type="number" class="texa form-control" id="datb" name="datb" required>
    </div>
    <div class="form-group">
        <label for="datc">Dato tres:</label>
        <input type="number" class="texa form-control" id="datc" name="datc" required>
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
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,el primer texto no podra superar los 200 caracteres y el segundo no podra superar los 1000 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindextextoestadisticos.php" method="POST" enctype="multipart/form-data">
    <br>
    <div class="form-group">
        <label for="parrafo">Parrafo:</label>
        <textarea class="texa form-control" id="parrafo" name="parrafo"required></textarea>
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
<div id="modali" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,el primer texto no podra superar los 200 caracteres y el segundo no podra superar los 1000 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexcaracteristicaa.php" method="POST" enctype="multipart/form-data">
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
<div id="modalj" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,el primer texto no podra superar los 200 caracteres y el segundo no podra superar los 1000 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexcaracteristicab.php" method="POST" enctype="multipart/form-data">
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
<div id="modalk" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,el primer texto no podra superar los 200 caracteres y el segundo no podra superar los 1000 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexcaracteristicac.php" method="POST" enctype="multipart/form-data">
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
<div id="modall" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,el primer texto no podra superar los 200 caracteres y el segundo no podra superar los 1000 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexcaracteristicad.php" method="POST" enctype="multipart/form-data">
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
<div id="modalm" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,el primer texto no podra superar los 200 caracteres y el segundo no podra superar los 1000 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindextextoestadisticose.php" method="POST" enctype="multipart/form-data">
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
<div id="modaln" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,el primer texto no podra superar los 200 caracteres y el segundo no podra superar los 1000 caracteres.</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindextextoestadisticosf.php" method="POST" enctype="multipart/form-data">
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
<div id="modalt" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexclientea.php" method="POST" enctype="multipart/form-data">
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
<div id="modalu" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexclienteb.php" method="POST" enctype="multipart/form-data">
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
<div id="modalv" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexclientec.php" method="POST" enctype="multipart/form-data">
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
<div id="modalx" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexcliented.php" method="POST" enctype="multipart/form-data">
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
<div id="modaly" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexclientee.php" method="POST" enctype="multipart/form-data">
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
<div id="modalz" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">La informacion que cambie, se vera reflejada en su sitio web,la imagen no debera superar los 20MB y debera estar en extenciones: jpg o png</h4>
      </div>
      <div class="modal-body">
                        <div class="container">
                                <div class="row">
            <form action="gindexclientef.php" method="POST" enctype="multipart/form-data">
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

















<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>