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

    <title>Inventario</title>

    <!-- inicio de todas las importaciones de la plantilla -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	<link href="../../css/general.css" rel="stylesheet">
	<link href="../../css/custom.css" rel="stylesheet">
	<link href="../../css/owl.carousel.css" rel="stylesheet">
    <link href="../../css/owl.theme.css" rel="stylesheet">
	<link href="../../css/style.css" rel="stylesheet">
	<link href="../../css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/magnific-popup.css"> 
	<script src="../../js/modernizr-2.8.3.min.js"></script>
	<link href="bootstrap.css" rel="stylesheet">   
	<link href="/css/bootstrap.css" rel="stylesheet"> 
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
				<h2>Inventario</h2>
				<p class="lead" style="margin-top:0">Seleccione una opción:</p>
				
			</div>
			
			<div class="row">

				<div class="col-sm-6 wow fadeInDown text-center">
				  <img  class="rotate" src="../../img/icon/materialDidactico.png" alt="Generic placeholder image" height="100" width="100">
				  <div class="center">
				  	<h4>Material Didáctico</h4>
				  	<button data-toggle="modal" data-target="#modalNMaterialDidactico" class="btn btn-link btn-lg" title="El usuario podrá llevar el control de los materiales con los que cuenta la institución.">Nuevo Material</button>
				  	<button data-toggle="modal" data-target="#modalMEMaterialDidactico" class="btn btn-link btn-lg" title="El usuario podra modificar o eliminar un material.">Modificar/Eliminar Material</button>
				  </div>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->

				<div class="col-sm-6 wow fadeInDown text-center">
				  <img  class="rotate" src="../../img/icon/edificios.png" alt="Generic placeholder image" height="100" width="100">
				  <div class="center">
				  	<h4>Inmueble</h4>
				  	<button data-toggle="modal" data-target="#modalNEdificios" class="btn btn-link btn-lg" title="El usuario podrá llevar el control de los edificios que tiene la institución.">Nuevo Inmueble</button>
				  	<button data-toggle="modal" data-target="#modalMEEdificios" class="btn btn-link btn-lg" title="El usuario podra modificar o eliminar edificios.">Modificar/Eliminar Inmueble</button>
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

    <!-- ventana modal Material Didactico-->
	<div class="modal fade" id="modalNMaterialDidactico" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="lineModalLabel">Nuevo Material</h4>
			</div>
			<div class="modal-body">
				
	            <!-- aqui el contenido -->
				<form class="form-horizontal" style="width:520px">
					<div class="form-group">
						<label for="txtCodMaterial" class="col-lg-4 control-label">Código del Material</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtCodMaterial" placeholder="Inserte código asignado al material." required="">
						</div>
					</div>

					<div class="form-group">
				      <label for="slcTipodMaterialDidactico" class="col-lg-4 control-label">Tipo de Material:</label>
				      <div class="col-lg-8">
				        <select class="form-control" id="slcTipodMaterialDidactico">
				          <option value="1">Permanente de Trabajo</option>
				          <option value="2">Informativo</option>
				          <option value="3">Ilustrativo Audiovisual</option>
				          <option value="4">Experimental</option>
				          <option value="5">Tecnológico</option>
				        </select>
				      </div>
				    </div>

				    <div class="form-group">
						<label for="txtNomMaterial" class="col-lg-4 control-label">Nombre del Material</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtNomMaterial" placeholder="Inserte el nombre del material." required="">
						</div>
					</div>

				    <div class="form-group">
						<label for="txtCantidad" class="col-lg-4 control-label">Cantidad del Material</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtCantidad" placeholder="Inserte la cantidad de dicho material." required="">
						</div>
					</div>
					    
					<div class="form-group">
						<div class="col-lg-6 col-lg-offset-4">
							<button type="submit" class="btn btn-primary btn-sm">Agregar</button>
							<button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
						</div>
					</div>

					<div class="media">
					   <a href="#" class="pull-left">
					      <img  class="rotate" src="../../img/icon/ayuda.png" alt="Generic placeholder image" height="20" width="20">
					   </a>
					   <div class="media-body">
					     <p class="help-block" style="font-size:8pt">1. Material permanente de trabajo: pizarras, marcadores, escritorios, sillas, cuadernos, etc.<br>2. Material informativo: mapas, libros, diccionarios, enciclopedias, revistas, periódicos, etc.<br>3. Material ilustrativo audiovisual: posters, videos, discos, etc.<br>4. Material experimental: aparatos y materiales variados, que se presten para la realización de experimentos.<br>5. Material Tecnológico: computadores personales/escritorio, proyectores, etc.</p>
					   </div>
					</div>							
				</form>
			</div>
		</div>
	  </div>
	</div>

	<div class="modal fade" id="modalMEMaterialDidactico" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="lineModalLabel">Modificar/Eliminar Material</h4>
			</div>
			<div class="modal-body">
				
	            <!-- aqui el contenido -->
				<form class="form-horizontal" style="width:520px">
					<div class="form-group">
						<label for="txtCodMaterial" class="col-lg-4 control-label">Código del Material</label>
						<div class="col-lg-8">
							<div class="input-group">
								<input type="text" class="form-control" id="txtCodMaterial" placeholder="Código curso" required="">
									<span class="input-group-btn">
										<button type="button" class="btn btn-default" id="btnBuscarCurso" title="Buscar">
											<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
										</button>	
									</span>
							</div>		
						</div>
					</div>

					<div class="form-group">
				      <label for="slcTipodMaterialDidactico" class="col-lg-4 control-label">Tipo de Material:</label>
				      <div class="col-lg-8">
							<input type="text" class="form-control" id="slcTipodMaterialDidactic" placeholder="ej.: Permanente de Trabajo" disabled="">
						</div>			
				    </div>

				    <div class="form-group">
						<label for="txtNomMaterial" class="col-lg-4 control-label">Nombre del Material</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtNomMaterial" placeholder="Nombre del material." required="">
						</div>
					</div>

				    <div class="form-group">
						<label for="txtCantidad" class="col-lg-4 control-label">Cantidad del Material</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtCantidad" placeholder="Cantidad de material." required="">
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

	<!-- ventana modal Edificios-->
	<div class="modal fade" id="modalNEdificios" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="lineModalLabel">Nuevo Inmueble</h4>
			</div>
			<div class="modal-body">
				
	            <!-- aqui el contenido -->
				<form class="form-horizontal" style="width:520px">
					<div class="form-group">
						<label for="txtCodEdificio" class="col-lg-4 control-label">Código del Edificio</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtCodEdificio" placeholder="Inserte código asignado al Edificio" required="">
						</div>
					</div>

					<div class="form-group">
						<label for="txtNumAulas" class="col-lg-4 control-label">Número de Aulas</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtNumAulas" placeholder="Inserte el número  de aulas" required="">
						</div>
					</div>

					<div class="form-group">
				      <label for="txtDescripcion" class="col-lg-4 control-label">Descripción</label>
				      <div class="col-lg-8">
				        <textarea class="form-control" rows="3" id="txtDescripcion"></textarea>
				        <span class="help-block">El usuario podrá describir otras actividades que se desempeñan en el edificio.</span>
				      </div>
				    </div>
					    
					<div class="form-group">
						<div class="col-lg-6 col-lg-offset-4">
							<button type="submit" class="btn btn-primary btn-sm">Agregar</button>
							<button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
						</div>
					</div>							
				</form>
			</div>
		</div>
	  </div>
	</div>

	<div class="modal fade" id="modalMEEdificios" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="lineModalLabel">Modificar/Eliminar Inmueble</h4>
			</div>
			<div class="modal-body">
				
	            <!-- aqui el contenido -->
				<form class="form-horizontal" style="width:520px">
					<div class="form-group">
						<label for="txtCodEdificio" class="col-lg-4 control-label">Código del Edificio</label>
						<div class="col-lg-8">
							<div class="input-group">
								<input type="text" class="form-control" id="txtCodEdificio" placeholder="Código edificio" required="">
									<span class="input-group-btn">
										<button type="button" class="btn btn-default" id="btnBuscarCurso" title="Buscar">
											<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
										</button>	
									</span>
							</div>		
						</div>
					</div>

					<div class="form-group">
						<label for="txtNumAulas" class="col-lg-4 control-label">Número de Aulas</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="txtNumAulas" placeholder="Numero de aulas" required="">
						</div>
					</div>

					<div class="form-group">
				      <label for="txtDescripcion" class="col-lg-4 control-label">Descripción</label>
				      <div class="col-lg-8">
				        <textarea class="form-control" rows="3" id="txtDescripcion" placeholder="ej.: El edifico tambien cuenta con un laboratorio de computación ."></textarea>
				        <span class="help-block">El usuario podrá describir otras actividades que se desempeñan en el edificio.</span>
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
    <script src="../../js/jquery-1.10.2.js"></script>
    <script src="../../js/bootstrap.js"></script>
	<script src="../../js/owl.carousel.js"></script>
	<script src="../../js/script.js"></script>
	<!-- StikyMenu -->
	<script src="../../js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="../../js/jquery.corner.js"></script> 
	<script src="../../js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="../../js/classie.js"></script>
	<script src="../../js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="../../js/jquery.magnific-popup.js"></script> 

</body>

</html>
