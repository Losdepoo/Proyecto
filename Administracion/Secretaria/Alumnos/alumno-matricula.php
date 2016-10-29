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
          
          <li class="menuItem"><a href="/Proyecto/administracion/secretaria/alumnos/alumnado.php">Volver a Alumnado</a></li>
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

  <!-- inicio div Matricula -->
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
        <input type="Telefono" class="form-control" id="inputNombre" placeholder="Ingrese la fecha de nacimiento">
      </div>
    </div>

      <div class="form-group">
      <label for="inputIdEstudiante" class="col-lg-2 control-label">No. de identidad</label>
      <div class="col-lg-3">
        <input type="text" class="form-control" id="inputIdEstudiante" placeholder="Ingrese el No. de identidad">
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Genero</label>
      <div class="col-lg-4">
        <div class="Genero">
          <label>
            <input type="radio" name="optionsGenero" id="optionsGenero1" value="option1" checked="">
            F
            <input type="radio" name="optionsGenero" id="optionsGenero2" value="option2">
            M
          </label>
          
        </div>
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
      <label for="select" class="col-lg-2 control-label">Jornada</label>
      <div class="col-lg-3">
        <select class="form-control" id="select">
          <option>Matutino</option>
          <option>Vespertino</option>
        </select>
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
      <div class="col-lg-4 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Guardar</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>

     <div class="center">
         <h4></h4>
            <button data-toggle="modal" data-target="#modalNDatos-medicos" class="btn btn-info" title="El usuario podra ingresar los datos medicos.">Datos Medicos</button>
         </div>
        </div>
          </div>
           <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
        </div><!-- /.col-lg-4 -->
         
  </fieldset>
</form>
    
    
  <!-- fin div Matricula -->
  
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

   <!-- ventana modal Datos Medicos-->

  <div class="modal fade" id="modalNDatos-medicos" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="lineModalLabel">Datos Medicos</h4>
      </div>
      <div class="modal-body">
        
              <!-- aqui el contenido -->
        <form class="form-horizontal" style="width:520px">
          <div class="form-group">
            <label for="textAlergias" class="col-lg-4 control-label">Alergias</label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="textAlergias" placeholder="Ingrese si padece de alguna alergia" required="">
            </div>
          </div>

          <div class="form-group">
            <label for="txtEnfermedades" class="col-lg-4 control-label">Enfermedades que padece</label>
            <div class="col-lg-8">
              <input type="password" class="form-control" id="txtEnfermedades" placeholder="Ingrese si padece de alguna enfermedad" required="">
            </div>
          </div>

          <div class="form-group">
            <label for="inputTipo-sangre" class="col-lg-4 control-label">Tipo de sangre</label>
            <div class="col-lg-8">
                <input type="Tipo de sangre" class="form-control" id="inputTipo-sangre" placeholder="Ingrese el Tipo de sangre">
            </div>
          </div>
          
          <div class="form-group">
            <label for="textMedicamentos-toma" class="col-lg-4 control-label">Medicamentos que toma</label>
            <div class="col-lg-8">
                <input type="password" class="form-control" id="textMedicamentos-toma" placeholder="Medicamentos que toma" required="">
            </div>
          </div>

          <div class="form-group">
            <label for="textMedicamentos-ingerir" class="col-lg-4 control-label">Medicamentos que no debe de ingerir</label>
            <div class="col-lg-8">
                  <textArea class="form-control" rows="3" id="textMedicamentos-ingerir"></textArea>
                  <span class="help-block"></span>
            </div>
          </div>

              
          <div class="form-group">
            <div class="col-lg-6 col-lg-offset-4">
              <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
              <button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
            </div>
          </div>              
        </form>
      </div>
    </div>
    </div>
  </div>

              <!-- aqui el contenido -->
        <form class="form-horizontal" style="width:520px">
          <div class="form-group">
            <label for="textAlergias" class="col-lg-4 control-label">Alergias</label>
            <div class="col-lg-8">
              <div class="input-group">
                <input type="text" class="form-control" id="textAlergias" placeholder="Alergias" required="">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-default" id="btnBuscar" title="Buscar">
                      <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
                    </button> 
                  </span>
              </div>    
            </div>
          </div>
          
          <div class="form-group">
            <label for="txtEnfermedades" class="col-lg-4 control-label">Enfermedades que padece</label>
            <div class="col-lg-8">
              <input type="password" class="form-control" id="txtEnfermedades" placeholder="Nombre del curso" required="">
            </div>
          </div>

          <div class="form-group">
            <label for="inputTipo-sangre" class="col-lg-4 control-label">Tipo de sangre</label>
            <div class="col-lg-8">
              <input type="Tipo de sangre" class="form-control" id="inputTipo-sangre" placeholder="Ingrese el Tipo de sangre">
            </div>
          </div>

          <div class="form-group">
            <label for="textMedicamentos-toma" class="col-lg-4 control-label">Medicamentos que toma</label>
            <div class="col-lg-8">
              <input type="password" class="form-control" id="textMedicamentos-toma" placeholder="Medicamentos que toma" required="">
            </div>
          </div>

           <div class="form-group">
              <label for="textMedicamentos-ingerir" class="col-lg-4 control-label">Medicamentos que no debe de ingerir</label>
              <div class="col-lg-8">
                  <textArea class="form-control" rows="3" id="textMedicamentos-ingerir"></textArea>
                  <span class="help-block"></span>
              </div>
            </div>
              
  <!--fin de la ventana-->

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