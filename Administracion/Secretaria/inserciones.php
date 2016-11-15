<?php

?>
 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Inserciones</title>

    <!-- inicio de todas las importaciones de la plantilla -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	<link href="css/general.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	<script src="js/modernizr-2.8.3.min.js"></script>  
	<!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
	<!-- fin de todas las importaciones de la plantilla -->
</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->

	<!-- NavBar principio-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img class="img-circle" src="/Proyecto/img/RR.jpg" width="50" height="50">
				<a class="navbar-brand" href="http://localhost/Proyecto/index.php" title="Volver a la página principal">Instituto Privado Dr. Ramón Rosa</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="/Proyecto/administracion/secretaria/secretaria-instituto.php">Volver a Instituto</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
	        		<li class="dropdown">
	          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario<span class="caret"></span></a>
	          			<ul class="dropdown-menu">
	            			<li><a href="#">Salir del sistema</a></li>
	            			<li><a href="#">Perfíl</a></li>
	            			<li><a href="#">Opciones</a></li>
	            		</ul>
	        		</li>
	      		</ul>

			</div>

		   
		</div>
	</nav> 
	<!-- NavBar fin-->

	<!-- inicio div insercion -->
	<div id="Inserciones" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Inserciones</h2>
				<p class="lead" style="margin-top:0">Seleccione una opción:</p>
				
			</div>
			
			<div class="row">
				<div class="col-sm-6 wow fadeInDown text-center">
				  <img  class="rotate" src="../../img/icon/curso.png" alt="Generic placeholder image" height="100" width="100">
				  <div class="center">
				  <h4>Curso</h4>
				  	<button data-toggle="modal" data-target="#modalNCurso" class="btn btn-link btn-lg" title="El usuario podrá crear un nuevo curso.">Nuevo Curso</button>
				  	<button data-toggle="modal" data-target="#modalMECurso" class="btn btn-link btn-lg" title="El usuario podrá modificar o eliminar un curso.">Modificar/Eliminar Curso</button>
				  </div>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->

				<div class="col-sm-6 wow fadeInDown text-center">
				  <img  class="rotate" src="../../img/icon/asignatura.png" alt="Generic placeholder image" height="100" width="100">
				  <div class="center">
				  <h4>Asignatura</h4>
				  	<button data-toggle="modal" data-target="#modalNAsignatura" class="btn btn-link btn-lg" title="El usuario podrá crear una nueva Asignatura.">Nueva Asignatura</button>
				  	<button data-toggle="modal" data-target="#modalMEAsignatura" class="btn btn-link btn-lg" title="El usuario podrá modificar o eliminar una asignatura.">Modificar/Eliminar Asignatura</button>
				  </div>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->

				<div class="col-sm-12 wow fadeInDown text-center">
				  <img  class="rotate" src="../../img/icon/seccion.png" alt="Generic placeholder image" height="100" width="100">
				  <div class="center">
				  	<h4>Sección</h4>
				  	<button data-toggle="modal" data-target="#modalNSeccion" class="btn btn-link btn-lg" title="El usuario podrá crear una nuevo sección.">Nueva Sección</button>
				  	<button data-toggle="modal" data-target="#modalMESeccion" class="btn btn-link btn-lg" title="El usuario podrá modificar o eliminar una sección.">Modificar/Eliminar Sección</button>
				  </div>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
			</div><!-- /.row -->
		</div>
	</div>

	<!-- fin div insercion -->

	<!--Comentario-->
	
	<div  class="content-section-c ">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center white">
				<h2>Dejanós un comentario</h2>
				<p class="lead" style="margin-top:0">Solucionaremos cualquier problema que tengas.</p>
			</div>
			
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							<button type="button "><span>Ház click aquí</span></button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-4 ">
										<h2 class="morph-clone">Ház click aquí</h2>
										<form>
											<p><label>Nombre de usuario:</label><input type="text"/></p>
											<p><label>Háblanos de tu problema:</label><input type="text"/></p>
											<p><button>Comentar</button></p>
										</form>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>	
			</div>
		</div>
	</div>	
	
	 <footer>
          <div class="col-md-6">
              <h1 class="footer-title">Universidad Nacional Autónoma de Honduras</h1>
                <li>Grupo #3</li>
                <li>Integrantes:</li>
                <li>Abigail Fick</li>
                <li>Cristian Umanzor</li>
                <li>Gabriel Mejiga</li>
                <li>Gipsy Ortiz</li>
                <li>Jennifer Escoto</li><br>
                <li>Flatfy Theme: Andrea Galanti</li>
                <li>Creative Commons Attribution 3.0 License - NOT COMMERCIAL</li><br>
          </div>
    </footer>

    <!-- ventana modal Curso-->
	<div class="modal fade" id="modalNCurso" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="lineModalLabel">Nuevo Curso</h4>
			</div>
			<div class="modal-body">
				
	            <!-- aqui el contenido -->
				<form class="form-horizontal" style="width:520px">
					<div class="form-group">
						<label for="txtCodCurso" class="col-lg-4 control-label">Código del Curso</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtCodCurso" placeholder="Ingrese código asignado al curso" required="">
						</div>
					</div>

					<div class="form-group">
						<label for="txtNomCurso" class="col-lg-4 control-label">Nombre del Curso</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtNomCurso" placeholder="Ingrese el nombre del curso" required="">
						</div>
					</div>
					    
					<div class="form-group">
						<div class="col-lg-6 col-lg-offset-4">
							<button type="submit" class="btn btn-primary btn-sm">Crear</button>
							<button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
						</div>
					</div>

					<div class="media">
					   <a href="#" class="pull-left">
					      <img  class="rotate" src="../../img/icon/ayuda.png" alt="Generic placeholder image" height="20" width="20">
					   </a>
					   <div class="media-body">
					     <p class="help-block" style="font-size:8pt">Aquí el usuario establecerá cuales son los cursos/carreras que se imparten en la institución, (ej.: primero de ciclo común, bachillerato en ciencias y letras, entre otros).</p>
					   </div>
					</div>		
				</form>
			</div>
		</div>
	  </div>
	</div>

	<div class="modal fade" id="modalMECurso" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="lineModalLabel">Modificar/Eliminar Curso</h4>
			</div>
			<div class="modal-body">
				
	            <!-- aqui el contenido -->
				<form class="form-horizontal" style="width:520px">
					<div class="form-group">
						<label for="txtCodCurso" class="col-lg-4 control-label">Código del Curso</label>
						<div class="col-lg-8">
							<div class="input-group">
								<input type="text" class="form-control" id="txtCodCurso" placeholder="Código curso" required="">
									<span class="input-group-btn">
										<button type="button" class="btn btn-default" id="btnBuscarCurso" title="Buscar">
											<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
										</button>	
									</span>
							</div>		
						</div>
					</div>
					
					<div class="form-group">
						<label for="txtNomCurso" class="col-lg-4 control-label">Nombre del Curso</label>
						<div class="col-lg-8">
							<input type="password" class="form-control" id="txtNomCurso" placeholder="Nombre del curso" required="">
						</div>
					</div>
					    
					<div class="form-group">
						<div class="col-lg-6 col-lg-offset-4">
							<button type="submit" class="btn btn-warning btn-sm">Modificar</button>
							<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
							<button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
						</div>
					</div>							
				</form>
			</div>
		</div>
	  </div>
	</div>

	<!-- ventana modal Asignatura-->
	<div class="modal fade" id="modalNAsignatura" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="lineModalLabel">Nueva Asignatura</h4>
			</div>
			<div class="modal-body">
				
	            <!-- aqui el contenido -->
				<form class="form-horizontal" style="width:550px">
					<div class="form-group">
						<label for="txtCodAsignatura" class="col-lg-4 control-label">Código de la Asignatura</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtCodAsignatura" placeholder="Ingrese código asignado a la asignatura" required="">
						</div>
					</div>

					<div class="form-group">
						<label for="txtNomAsignatura" class="col-lg-4 control-label">Nombre de la Asignatura</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtNomAsignatura" placeholder="Ingrese el nombre de la asignatura" required="">
						</div>
					</div>
					    
					<div class="form-group">
						<div class="col-lg-6 col-lg-offset-4">
							<button type="submit" class="btn btn-primary btn-sm">Crear</button>
							<button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
						</div>
					</div>		

					<div class="media">
					   <a href="#" class="pull-left">
					      <img  class="rotate" src="../../img/icon/ayuda.png" alt="Generic placeholder image" height="20" width="20">
					   </a>
					   <div class="media-body">
					     <p class="help-block" style="font-size:8pt">Aquí el usuario establecerá cuales son las asignaturas que se imparten en la institución, (ej.: matematicas, español, entre otros).</p>
					   </div>
					</div>					
				</form>
			</div>
		</div>
	  </div>
	</div>

	<div class="modal fade" id="modalMEAsignatura" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="lineModalLabel">Modificar/Eliminar Asignatura</h4>
			</div>
			<div class="modal-body">
				
	            <!-- aqui el contenido -->
				<form class="form-horizontal" style="width:550px">
					<div class="form-group">
						<label for="txtCodAsignatura" class="col-lg-4 control-label">Código de la Asignatura</label>
						<div class="col-lg-8">
							<div class="input-group">
								<input type="text" class="form-control" id="txtCodAsignatura" placeholder="Código asignatura" required="">
									<span class="input-group-btn">
										<button type="button" class="btn btn-default" id="btnBuscarAsignatura" title="Buscar" >
											<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
										</button>	
									</span>
							</div>		
						</div>
					</div>

					<div class="form-group">
						<label for="txtNomAsignatura" class="col-lg-4 control-label">Nombre de la Asignatura</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtNomAsignatura" placeholder="Nombre de la asignatura" required="">
						</div>
					</div>
					    
					<div class="form-group">
						<div class="col-lg-6 col-lg-offset-4">
							<button type="submit" class="btn btn-warning btn-sm">Modificar</button>
							<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
							<button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
						</div>
					</div>							
				</form>
			</div>
		</div>
	  </div>
	</div>

	<!-- ventana modal Seccion-->
	<div class="modal fade" id="modalNSeccion" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="lineModalLabel">Nueva Sección</h4>
			</div>
			<div class="modal-body">
				
	            <!-- aqui el contenido -->
				<form class="form-horizontal" style="width:550px">
					<div class="form-group">
						<label for="txtCodSección" class="col-lg-4 control-label">Código de la Sección</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtCodSección" placeholder="Ingrese código asignado a la sección" required="">
						</div>
					</div>

					<div class="form-group">
						<label for="txtNomSección" class="col-lg-4 control-label">Nombre de la Sección</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtNomSección" placeholder="Ingrese el nombre de la sección" required="">
						</div>
					</div>
					    
					<div class="form-group">
						<div class="col-lg-6 col-lg-offset-4">
							<button type="submit" class="btn btn-primary btn-sm">Crear</button>
							<button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
						</div>
					</div>	

					<div class="media">
					   <a href="#" class="pull-left">
					      <img  class="rotate" src="../../img/icon/ayuda.png" alt="Generic placeholder image" height="20" width="20">
					   </a>
					   <div class="media-body">
					     <p class="help-block" style="font-size:8pt">Aquí el usuario establecerá cuales son las secciones que tendrá la institución, (ej.: A, B, entre otros).</p>
					   </div>
					</div>
				</form>
			</div>
		</div>
	  </div>
	</div>

	<div class="modal fade" id="modalMESeccion" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="lineModalLabel">Modificar/Eliminar Sección</h4>
			</div>
			<div class="modal-body">
				
	            <!-- aqui el contenido -->
				<form class="form-horizontal" style="width:550px">
					<div class="form-group">
						<label for="txtCodSección" class="col-lg-4 control-label">Código de la Sección</label>
						<div class="col-lg-8">
							<div class="input-group">
								<input type="text" class="form-control" id="txtCodSección" placeholder="Código sección" required="">
									<span class="input-group-btn">
										<button type="button" class="btn btn-default" id="btnBuscarSeccion" title="Buscar">
											<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
										</button>	
									</span>
							</div>		
						</div>
					</div>

					<div class="form-group">
						<label for="txtNomSección" class="col-lg-4 control-label">Nombre de la Sección</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtNomSección" placeholder="Nombre de la sección" required="">	
						</div>
					</div>
					    
					<div class="form-group">
						<div class="col-lg-6 col-lg-offset-4">
							<button type="submit" class="btn btn-warning btn-sm">Modificar</button>
							<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
							<button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
						</div>
					</div>							
				</form>
			</div>
		</div>
	  </div>
	</div>

	<!--fin de las ventanas modales-->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<script type="text/javascript" src="js/jquery.corner.js"></script> 
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<script src="js/jquery.magnific-popup.js"></script> 

</body>

</html>
