<!DOCTYPE html>
<html lang="en">
<head>
<title>StartEntretenimiento</title>
	
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
	<!--// Meta tag Keywords -->
    
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
     <link rel="shortcut icon" type="image/ico" href="images/logo.png" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="css/phpcss.php">

	<!-- //css files -->
	
	<!-- Projects swipebox css-->
	<link rel="stylesheet" href="css/swipebox.css">

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
<!-- //header -->

<!-- inner page banner -->
<section class="inner-page-banner-2">
	<div class="page-heading text-center">
		<h2><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT titulo FROM gludicasentrada ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["titulo"]."<br>";
      }?></h2>
		<span class="section_1-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT subtitulo FROM gludicasentrada ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["subtitulo"]."<br>";
      }?></span></span>
	</div>
</section>
<!-- //inner page banner -->

<section class="Welcome py-5">
    <div class="container py-sm-3">
        <div class="heading pb-4">
            <h3 class="heading mb-2 text-center"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT titulo FROM gludicastitysubtirulo ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["titulo"]."<br>";
      }?></h3>
            <p class="para mb-5 text-center"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT subtitulo FROM gludicastitysubtirulo ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["subtitulo"]."<br>";
      }?></p>
        </div>
<div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 text-center"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagen ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow" data-tilt src="../'.$res["imagen"].'">'; }?>                
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 col-sm-12">
                <div class="space d-none d-xl-block d-sm-block" style="height: 60px"></div>
                <div class="space d-block d-sm-none" style="height: 60px"></div>
                <div class="section-title">
                
                   
     
                </div>
                 <h3 class="mt-lg-4"></h3>
                <p class="my-4"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM gludicascaract ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"]."<br>";
      }?></p>
                
                <ul>
                    <li class="li-c"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT caracteristicaa FROM gludicascaract ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["caracteristicaa"]."<br>";
      }?></li>
                    <li class="li-c"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT caracteristicab FROM gludicascaract ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["caracteristicab"]."<br>";
      }?></li>
                    <li><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT caracteristicac FROM gludicascaract ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["caracteristicac"]."<br>";
      }?></li>
                    <li><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT caracteristicad FROM gludicascaract ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["caracteristicad"]."<br>";
      }?></li>
                    <li><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT caracteristicae FROM gludicascaract ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["caracteristicae"]."<br>";
      }?></li>
                    <li><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT caracteristicaf FROM gludicascaract ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["caracteristicaf"]."<br>";
      }?></li>
                    <li><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT caracteristicag FROM gludicascaract ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["caracteristicag"]."<br>";
      }?></li>
                   
                </ul>
                <div class="space" style="height: 30px"></div>

              
            </div>
        </div>
    </div>	
</section>
<!--start-Projects-->
<div class="Projects py-5">
	<div class="container py-sm-4">
		<div class="heading pb-4">
			<h3 class="heading mb-2 text-center"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT titulo FROM gludicascompromiso ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["titulo"]."<br>";
      }?></h3>
			<p class="para mb-5 text-center"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT parrafo FROM gludicascompromiso ORDER BY `fecharegistro` DESC LIMIT 1");
          while($res=  mysqli_fetch_array($sql)){
                     echo $res["parrafo"]."<br>";
      }?></p>
		</div>	
		<div class="row inner_w3l_agile_grids-1">
			<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/calidaddevidalaboralcolombia.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 0,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4> SGSST StartEntretenimiento</h4>
					</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/gestionderiesgocolombiasabanaoccidente.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 1,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4>SGSST StartEntretenimiento</h4>
					</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/bienestareneltrabajocolombia.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 2,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4>SGSST StartEntretenimiento</h4>
					</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/gestionderiesgosabanoccidente.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 3,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4>SGSST StartEntretenimiento</h4>
					</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/ludicasempresarialescolombia.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 4,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4>SGSST StartEntretenimiento</h4>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/gestionderiesgocolombialudica.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 5,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4>SGSST StartEntretenimiento</h4>
					</div>
			   </a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/colombiaimportanciadelagestionderiesgolaboral.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 6,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4>SGSST StartEntretenimiento</h4>
					</div>
			   </a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/sludocupacionalcolombiacundinamarca.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 7,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4>SGSST StartEntretenimiento</h4>
					</div>
			   </a>
			</div>
				<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/saludeneltrabajocolombia.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 8,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4>SGSST StartEntretenimiento</h4>
					</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/colombiariesgosprofesionales.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 9,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4>SGSST StartEntretenimiento</h4>
					</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/sistemadegestionderiesgoslaboralescolombia.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 10,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4>SGSST StartEntretenimiento</h4>
					</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 Projects-grid Projects1">
				<a href="images/ludica/riesgoslaboralescuninamarcacolombia.png" class="swipebox"><?php 
            require_once 'conexion.php';
          $sql=  mysqli_query($mysqli,"SELECT imagen FROM gludicasimagenludicas ORDER BY `fecharegistro` DESC LIMIT 11,1");
          while($res=  mysqli_fetch_array($sql)){
          echo '<img class="img-fluid img-shadow img-responsive" data-tilt src="../'.$res["imagen"].'">'; }?>
					<div class="textbox">
					<h4>SGSST StartEntretenimiento</h4>
					</div>
			</a>
			</div>
		</div>
	</div>	
</div>	
<!--//Projects-->

<!-- brands -->


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


	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
    <script src="js/modernizr-2.6.2.min.js"></script>

	 <!--search jQuery-->
    <script src="js/classie-search.js"></script>
    <script src="js/demo1-search.js"></script>
    <!--//search jQuery-->

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
	
	<!-- Projects swipebox -->
	<script src="js/jquery.swipebox.min.js"></script> 
	<script>
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //Projects swipebox-->

	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
        <script src="js/ludica.js"></script>
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