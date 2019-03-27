
<!DOCTYPE html>
<html lang="en">
<head>
<title>StarsEntretenimiento</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Flex Art Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- banner slider css -->
	<link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
	<!-- //banner slider css -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="css/phpcss.php">

	<!-- //css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- header -->
<div class="header-top">
	<header>
		<div class="top-head ml-lg-auto text-center">
			<div class="row mr-0">

				<div class="search col-md-2 col-4">
					<div class="mobile-nav-button">
						
					</div>
					<!-- open/close -->
					<div class="overlay overlay-door">
						<button type="button" class="overlay-close">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<form action="#" method="post" class="d-flex">
							<input class="form-control" type="search" placeholder="Search here..." required="">
							<button type="submit" class="btn btn-primary submit">
								<i class="fas fa-search"></i>
							</button>
						</form>
					</div>
					<!-- open/close -->
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="logo">
				<h1>
					<a class="navbar-brand" href="index.php">
						<a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid" alt="" /></a>
				</h1>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<i class="fas fa-bars"></i>
				</span>

			</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-lg-auto text-center">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Inicio
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">Nosotros</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Servicios
							<i class="fas fa-angle-down"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="videos.php" title="">Vídeos</a>
							<a class="dropdown-item" href="ludicascorporativas.php" title="">Lúdicas corporativas</a>
							<a class="dropdown-item" href="publicidadycomunicacion.php">Publicidad y comunicación</a>
                                                        <a class="dropdown-item" href="#"></a>
						</div>
					</li>
					
				
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contactenos</a>
					</li>
				</ul>

			</div>
		</nav>
	</header>
</div>

<!-- header -->

<!-- main image slider container -->
<section class="slide-window">
	<div class="slide-wrapper" style="width:300%;">
		<div class="slide">
			<div class="slide-caption text-center">
			   <h2 class="text-uppercase">                <?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT encabezado FROM giniciofotounoslider ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["encabezado"]."<br>";
      }?></h2>
			   <p class="my-4"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM giniciofotounoslider ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"]."<br>";
      }?></p>
			   			
			</div>
		</div>
		<div class="slide slide2">
			<div class="slide-caption text-center">
				<h3 class="text-uppercase"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT encabezado FROM giniciofotodoslider ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["encabezado"]."<br>";
      }?></span></h3>
			   <p class="my-4"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM giniciofotodoslider ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"]."<br>";
      }?></p>
			 
			</div>
		</div>
		<div class="slide slide3">
			<div class="slide-caption text-center">
				<h3 class="text-uppercase"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT encabezado FROM giniciofototreslider ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["encabezado"]."<br>";
      }?></h3>
			   <p class="my-4"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM giniciofototreslider ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"]."<br>";
      }?></p>
			
			</div>
		</div>
	</div>
	<div class="slide-controller">
		<div class="slide-control-left">
			<div class="slide-control-line"></div>
			<div class="slide-control-line"></div>
		</div>
		<div class="slide-control-right">
			<div class="slide-control-line"></div>
			<div class="slide-control-line"></div>
		</div>
	</div>
</section>
<!-- end of main image slider container -->
	
<!-- welcome -->
<section class="Welcome py-5">
	<div class="container py-sm-5">
		<div class="welcome-grids row">
			<div class="col-lg-6 mb-lg-0 mb-5">
                            <h3 class="mt-lg-4"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT titulo FROM giniciotextonosotros ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["titulo"]."<br>";
      }?></h3>
                            <p class="my-4"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM giniciotextonosotros ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"]."<br>";
      }?></p>
				<div class="read">
					<a href="about.php"> Stars entretenimiento Nosotros<span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>	
			</div>
			<div class="col-lg-3 col-md-4 col-6 pr-1 welcome-image">
            <?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM ginicioimagennosotros ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img src="../'.$res["imagen"].'">'; }?>			</div>	
			<div class="col-lg-3 col-md-4 col-6 pl-1 welcome-image">
            <?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM ginicioimagennosotrosb ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img src="../'.$res["imagen"].'">'; }?>			</div>
		</div>	
	</div>	
</section>
<!-- welcome -->

<!-- welcome bottom -->
<section class="Welcome-bottom">
	<div class="bs-slider-overlay">
		<div class="container">
			<div class="welcome-bottom-grids row">
				
				<!-- Counter -->
				<div class="col-lg-6 p-sm-5 p-4 welcome_left Features-bottom">
					<div class="layer p-sm-5 p-4 welcome_left_inner agile-info">
							<div class="agileits_w3layouts_about_counter_left w3-agile-grid">
								<div class="countericon">
									<span><img src="images/iconos/camaraaudiovisualescolombia.png" class="img-responsive" alt="" /></span>
									<h3>Proyectos</h3>
								</div>
								<div class="counterinfo agile-info">
									<p class="counter"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT datoa FROM giniciodatosestadisticos ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["datoa"];
      }?></p> 
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mt-sm-5 mt-3 agileits_w3layouts_about_counter_left w3-agile-grid">
								<div class="countericon">
									<span><img src="images/iconos/vídeoscorporativoscolombia.png" class="img-responsive" alt="" /></span>
									<h3>Empresas</h3>
								</div>
								<div class="counterinfo agile-info">
									<p class="counter"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT datob FROM giniciodatosestadisticos ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["datob"];
      }?></p> 
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mt-sm-5 mt-3 agileits_w3layouts_about_counter_left w3-agile-grid">
								<div class="countericon">
									<span><img src="images/iconos/audiovisualescolombia.png" class="img-responsive" alt="" /></span>
									<h3>Clientes Satisfechos</h3>
								</div>
								<div class="counterinfo agile-info">
									<p class="counter"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT datoc FROM giniciodatosestadisticos ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["datoc"];
      }?></p>
								</div>
								<div class="clearfix"> </div>
							</div>
					</div>
				</div>
				<!-- //Counter -->
				<div class="col-lg-6 p-sm-5 p-4 mt-lg-5 mt-0 welcome_bottom_right">
					
					<p class="my-4"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM giniciotextoestadisticas ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"];
      }?></p>
					<div class="read">
						
					</div>
				</div>
			</div>	
		</div>	
	</div>	
</section>
<!-- //welcome bottom -->

<!-- Features -->
<section class="features py-5">
	<div class="container py-sm-5">
		<div class="heading pb-4">
			<h3 class="heading mb-2 text-center"> <span>Nuestros </span> Servicios </h3>
			<p class="para mb-5 text-center">Audio-Vídeo-Diseño</p>
		</div>
            <div class="feature-grids row">
                <div class="col-lg-4 col-md-6">
                    <div class="f1 p-sm-5 p-4">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                        <h3 class="my-3"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT titulo FROM giniciocaracteristicaa ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["titulo"];
      }?></h3>
                        <p><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM giniciocaracteristicaa ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"];
      }?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4">
                    <div class="f2-active p-sm-5 p-4">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                        <h3 class="my-3"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT titulo FROM giniciocaracteristicab ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["titulo"];
      }?></h3>
                        <p><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM giniciocaracteristicab ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"];
      }?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-5 mt-4">
                    <div class="f1 p-sm-5 p-4">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                        <h3 class="my-3"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT titulo FROM giniciocaracteristicac ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["titulo"];
      }?></h3>
                        <p><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM giniciocaracteristicac ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"];
      }?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-sm-5 mt-4">
                    <div class="f1 p-sm-5 p-4">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                        <h3 class="my-3"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT titulo FROM giniciocaracteristicad ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["titulo"];
      }?></h3>
                        <p><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM giniciocaracteristicad ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"];
      }?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-sm-5 mt-4">
                    <div class="f1 p-sm-5 p-4">
                        <i class="fas fa-arrow-right" aria-hidden="true"></i>
                        <h3 class="my-3"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT titulo FROM giniciocaracteristicae ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["titulo"];
      }?></h3>
                        <p><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM giniciocaracteristicae ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"];
      }?></p>
                    </div>
			</div>
			<div class="col-lg-4 col-md-6 mt-sm-5 mt-4">
				<div class="f1 p-sm-5 p-4">
					<i class="fas fa-arrow-right" aria-hidden="true"></i>
					<h3 class="my-3"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT titulo FROM giniciocaracteristicaf ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["titulo"];
      }?></h3>
					<p><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM giniciocaracteristicaf ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"];
      }?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Features -->

<!-- Skills -->
<section class="bottom-last">
	<div class="bottom-bg py-5 bs-slider-overlay text-left">
		<div class="container py-md-5">
			<div class="heading pb-4">
				<h3 class="heading mb-2 text-center text-white"> <span>Nuestros </span> clientes </h3>
				<p class="para mb-5 text-center">  Te ayudamos a trasmitir de una manera rápida, clara y concisa.</p>
			</div>
			<div class="row grids">
				<div class="col-lg-12">
					<section class="partners bg-light py-5">
	<div class="container">
		<div class="row partner-grids text-center">
			<div class="col-md-2 col-4">
				<div class="brand bg-white">
					<a href="#"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM ginicioclientesa ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img src="../'.$res["imagen"].'">'; }?></a>
				</div>
			</div>
			<div class="col-md-2 col-4">
				<div class="brand bg-white">
					<a href="#"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM ginicioclientesb ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img src="../'.$res["imagen"].'">'; }?></a>
				</div>
			</div>
			<div class="col-md-2 col-4">
				<div class="brand bg-white">
					<a href="#"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM ginicioclientesc ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img src="../'.$res["imagen"].'">'; }?></a>
				</div>
			</div>
			<div class="col-md-2 col-4 mt-md-0 mt-3">
				<div class="brand bg-white">
					<a href="#"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM ginicioclientesd ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img src="../'.$res["imagen"].'">'; }?></a>
				</div>
			</div>
			<div class="col-md-2 col-4 mt-md-0 mt-3">
				<div class="brand bg-white">
					<a href="#"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM ginicioclientese ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img src="../'.$res["imagen"].'">'; }?></a>
				</div>
			</div>
			<div class="col-md-2 col-4 mt-md-0 mt-3">
				<div class="brand bg-white">
					<a href="#"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM ginicioclientesf ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img src="../'.$res["imagen"].'">'; }?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //brands -->
					</div>
				</div>
						
			</div>
		</div>
	</div>
</section>
<!-- //Skills -->



<!-- brands -->
<!-- footer -->
<footer class="footer py-5">
	<div class="container py-sm-4">
		<div class="row">
			<div class="col-lg-4 col-md-6 footer-top">
				<h3 class="mb-4 pb-3 w3f_title">Suscribete</h3>
				<p>Suscribete a nuestra lista de correo,recibiras nuestras últimas noticias, ofertas y actualizaciones..</p>
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Escribe tu correo..." required="">
					<button class="btn1"><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
					<div class="clearfix"> </div>
				</form>

			</div>
			<div class="col-lg-2  col-md-6 footv3-left mt-md-0 mt-5">
				<h3 class="mb-4 pb-3 w3f_title">Navigation</h3>
				<ul class="list-agileits">
					<li>
						<a href="index.php">
							Inicio 
						</a>
					</li>
					<li class="my-2">
						<a href="about.php">
							Nosotros
						</a>
					</li>
					<li class="my-2">
						<a href="projects.php">
							Vídeos
						</a>
					</li>
					<li class="mb-2">
						<a href="features.php">
							Fotografia Profesional
						</a>
					</li>
					<li>
						<a href="contact.php">
							Contactenos
						</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
				<h3 class="mb-4 pb-3 w3f_title">Contactenos</h3>
				<div class="fv3-contact">
					<span class="fas fa-envelope-open mr-2"></span>
					<p>
						<a href="#"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT correo FROM gfootercorreo ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["correo"];
      }?></a>
					</p>
				</div>
				<div class="fv3-contact my-3">
					<span class="fas fa-phone-volume mr-2"></span>
					<p>+(57)<?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT telefono FROM gfootertelefono ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["telefono"];
      }?></p>
                                        
				</div>
				<div class="fv3-contact">
					<span class="fas fa-home mr-2"></span>
					<p><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT direccion FROM gfooterdireccion ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["direccion"];
      }?></p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 footerv2-w3ls mt-lg-0 mt-5">
				<h3 class="mb-4 w3f_title pb-3">Siguenos en:</h3>
				<p>Siguenos en nuestras redes sociales</p>
				<ul class="social-iconsv2 agileinfo mt-4">
					<li>
						<a href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //footer bottom -->
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="cpy-right text-center">
	<p>© <?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT anio FROM gfooteranio ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["anio"];
      }?>  All rights reserved | Design by
		<a href="http://cinndev.online"> Cinndev</a>
	</p>
</div>
<!-- //copyright -->

	<!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Register Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>First name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-center pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->
    <!--//model-form-->

	<!-- video Modal Popup -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
					<iframe src="https://player.vimeo.com/video/33531612"></iframe>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- //video Model Popup -->

	<!-- Vertically centered Modal -->
	<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><i class="fab fa-cloudversify"></i> Flex Art</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<div class="modal-body">
				<img src="images/bg.jpg" class="img-fluid mb-3" alt="Modal Image" />
				Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
				ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	  </div>
	</div>
	<!-- //Vertically centered Modal -->

	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- search overlay -->
    <script src="js/modernizr-2.6.2.min.js"></script> 
	<!-- //search overlay -->
	
	<!--search jQuery-->
    <script src="js/classie-search.js"></script>
    <script src="js/demo1-search.js"></script>
    <!--//search jQuery-->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

	<!-- banner slider js -->
	<script src="js/minimal-slider.js"></script>
	<!-- //banner slider js -->

	<!-- Stats-Number-Scroller-Animation-JavaScript -->
	<script src="js/waypoints.min.js"></script> 
	<script src="js/counterup.min.js"></script> 
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 100,
				time: 1000
			});
		});
	</script>
	<!-- //Stats-Number-Scroller-Animation-JavaScript -->

	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

</body>
</html>