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

    <title>Matricula</title>

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
  <script src="/Proyecto/js/modernizr-2.8.3.min.js"></script> <!-- Modernizr /-->
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
          
          <li class="menuItem"><a href="/Proyecto/administracion/secretaria/secretaria-alumno.php">Volver a Alumnado</a></li>
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

  <!-- inicio div administracion -->
  <form class="form-horizontal">
  <fieldset>
    <legend>Matricula Alumnos</legend>
    
    
    <div class="form-group">
      <label for="inputNombre" class="col-lg-2 control-label">Nombre del Estudiante</label>
      <div class="col-lg-3">
        <input type="Nombre" class="form-control" id="inputNombre" placeholder="Ingrese el Nombre">
      </div>
    </div> 

    <div class="form-group">
      <label for="inputApellido" class="col-lg-2 control-label">Apellido</label>
      <div class="col-lg-3">
        <input type="Apellido" class="form-control" id="inputApellido" placeholder="Ingrese el Apellido">
      </div>
    </div>
    
      <div class="form-group">
      <label for="inputTelefono" class="col-lg-2 control-label">Fecha de nacimiento</label>
      <div class="col-lg-3">
        <input type="Telefono" class="form-control" id="inputNombre" placeholder="Ingrese el Telefono">
      </div>
    </div>

      <div class="form-group">
      <label for="inputIdEstudiante" class="col-lg-2 control-label">No. de identidad</label>
      <div class="col-lg-3">
        <input type="text" class="form-control" id="inputIdEstudiante" placeholder="Ingrese el ID">
      </div>
    </div>

    <div class="form-group">
      <label for="inputDireccion" class="col-lg-2 control-label">Direccion</label>
      <div class="col-lg-3">
        <input type="Direccion" class="form-control" id="inputDireccion" placeholder="Ingrese la Direccion">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEdad" class="col-lg-2 control-label">Edad</label>
      <div class="col-lg-3">
        <input type="Edad" class="form-control" id="inputEdad" placeholder="Ingrese la Edad">
      </div>
    </div>
     
    <div class="form-group">
      <label for="inputCorreo-electronico" class="col-lg-2 control-label">Correo Electronico</label>
      <div class="col-lg-3">
        <input type="Correo-electronico" class="form-control" id="Correo-electronico" placeholder="Ingrese el Correo Electronico">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputTelefono" class="col-lg-2 control-label">Telefono</label>
      <div class="col-lg-3">
        <input type="Telefono" class="form-control" id="inputNombre" placeholder="Ingrese el Telefono">
      </div>
    </div>
    

   <div class="form-group">
      <label class="col-lg-2 control-label">Sexo</label>
      <div class="col-lg-4">
        <div class="sexo">
          <label>
            <input type="radio" name="optionSexo" id="optionsSexo1" value="option1" checked="">
            Femenino
          </label>
        </div>
        <div class="sexo">
          <label>
            <input type="radio" name="optionsSexo" id="optionsSexo2" value="option2">
             Masculino
          </label>
        </div>
      </div>
    </div>
    
    
    <div class="form-group">
      <div class="col-lg-4 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Nuevo</button>
        <button type="submit" class="btn btn-primary">Editar</button>
        <button type="submit" class="btn btn-primary">Traslado</button>

      </div>
    </div>
  </fieldset>
</form>
    
      

  <!-- fin div administracion -->
  
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

    <!-- JavaScript -->
    <script src="/Proyecto/js/jquery-1.10.2.js"></script>
    <script src="/Proyecto/js/bootstrap.js"></script>
  <script src="/Proyecto/js/owl.carousel.js"></script>
  <script src="/Proyecto/js/script.js"></script>
  <script src="/Proyecto/js/stickUp.min.js"></script>
  <script type="text/javascript">
    jQuery(function($) {
    $(document).ready( function() {
      $('.navbar-default').stickUp();
      
    });
    });
  
  </script>
  <script type="text/javascript" src="/Proyecto/js/jquery.corner.js"></script> 
  <script src="/Proyecto/js/wow.min.js"></script>
  <script>
   new WOW().init();
  </script>
  <script src="/Proyecto/js/classie.js"></script>
  <script src="/Proyecto/js/uiMorphingButton_inflow.js"></script>
  <script src="/Proyecto/js/jquery.magnific-popup.js"></script> 

</body>

</html>