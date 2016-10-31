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

    <title>Administraci�n Instituto Privado Dr. Ram�n Rosa</title>

    <!-- inicio de todas las importaciones de la plantilla -->
   	<link href="/Proyecto/css/bootstrap.min.css" rel="stylesheet">
	<link href="/Proyecto/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	<link href="/Proyecto/css/general.css" rel="stylesheet">
	<link href="/Proyecto/css/custom.css" rel="stylesheet">
	<link href="/Proyecto/css/owl.carousel.css" rel="stylesheet">
    <link href="/Proyecto/css/owl.theme.css" rel="stylesheet">
	<link href="/Proyecto/css/style.css" rel="stylesheet">
	<link href="/Proyecto/css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="/Proyecto/css/magnific-popup.css"> 
</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status">
		</div>
	</div>
	
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
				<a class="navbar-brand" href="http://localhost/Proyecto/index.php" title="Volver a la p�gina principal">Instituto Privado Dr. Ram�n Rosa</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="menuItem"><a href="/Proyecto/Administracion/Secretaria/secretaria.php">Secretar�a</a></li>
					<li class="menuItem"><a href="/Proyecto/Administracion/Tesoreria/tesoreria.php">Tesorer�a</a></li>
					<li class="menuItem"><a href="/Proyecto/Administracion/Cuentas/administracion-cuentas.php">Cuentas</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
	        		<li class="dropdown">
	          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario<span class="caret"></span></a>
	          			<ul class="dropdown-menu">
	            			<li><a href="#">Salir del sistema</a></li>
	            			<li><a href="#">Perf�l</a></li>
	            			<li><a href="#">Opciones</a></li>
	            		</ul>
	        		</li>
	      		</ul>

			</div>

		   
		</div>
	</nav> 
	<!-- NavBar fin-->

	<!-- inicio div administracion -->
	<div id="Tesorer�a" class="content-section-b" style="border-top: 0">
    	<div class="container text-center">
    	<h2>Pagos de Mensualidades</h2></br>
			<div class="col-md-6  text-center ">
        		<p class="lead" style="margin-top:0">Seleccione una opci�n de pago:</p>
		        <label><input type="radio" name="opcionPago[]">Efectivo</label><br>
		        <label><input type="radio" name="opcionPago[]">Cheque</label><br>
		        <label><input type="radio" name="opcionPago[]">Cr�dito</label><br>
		    </div>    
        	
        	<div class="col-md-6 text-center">
	      		<form>
				<p><label>Nombre de usuario: </label><input type="text" name="txt_usuario"/></p>
				<p><label>Contrase�a: </label><input type="password" name="txt_contasenia"/></p>
				<p><label>Cantidad a pagar: </label><input type="text" name="txt_cantidadPago"/></p>
				<p><button>Realizar Pago</button></p>
				</form>
      		</div>
        	<br>
      	</div>  
    </div>  	
	<!-- fin div administracion -->
	
	<div  class="content-section-c ">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center white">
				<h2>Dejan�s un comentario</h2>
				<p class="lead" style="margin-top:0">Solucionaremos cualquier problema que tengas.</p>
			</div>
			
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							<button type="button "><span>H�z click aqu�</span></button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-4 ">
										<h2 class="morph-clone">H�z click aqu�</h2>
										<form>
											<p><label>Nombre de usuario:</label><input type="text"/></p>
											<p><label>H�blanos de tu problema:</label><input type="text"/></p>
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
              <h1 class="footer-title">Universidad Nacional Aut�noma de Honduras</h1>
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

    <!-- JavaScript -->
    <script src="/proyecto/js/jquery-1.10.2.js"></script>
    <script src="/proyecto/js/bootstrap.js"></script>
	<script src="/proyecto/js/owl.carousel.js"></script>
	<script src="/proyecto/js/script.js"></script>
	<!-- StikyMenu -->
	<script src="/proyecto/js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="/proyecto/js/jquery.corner.js"></script> 
	<script src="/proyecto/js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="/proyecto/js/classie.js"></script>
	<script src="/proyecto/js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="/proyecto/js/jquery.magnific-popup.js"></script> 

</body>

</html>
