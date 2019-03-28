<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicie Sesion</title>
        <link rel="shortcut icon" type="image/png" href="img/log/189.png"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 
</head>
<body>
 <div class="container">
	<div class="row">
	<div class="col-md-5 col-md-offset-3">
	<div class="page-header text-center">
		<h1>Ingrese su usuario y contraseña</h1> 
		<h3><small>Recuerde que todas las modificaciones que se hagan acá se verán reflejadas en su sitio web, no puede dejar campos vacíos en cada uno de los formularios.</small></h3> 
	</div>
		<form class="form-signin" method="post" action="login.php">
			<center><h2 class="form-signin-heading">Iniciar Sesión</h2></center>
			<label for="usuario" class="sr-only"></label>
			<input type="text" name="usuario" class="form-control" placeholder="Ingrese su Usuario" ><br>
			<label for="password" class="sr-only"></label>
			<input type="password" name="password" class="form-control" placeholder="Ingrese su Contraseña"><br>
			<input type="submit" class="btn btn-lg btn-primary btn-block" name="enviar" value="Ingresar ">
		</form>
	</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
