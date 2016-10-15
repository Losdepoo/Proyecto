<!DOCTYPE html>
	<html>
		
		<head>
			<meta charset="utf-8">
			<title>Administración, Bienvenido</title>
			<link href="css/bootstrap.min.css" rel="stylesheet">
		</head>
		
		<body>
			<nav class="navbar navbar-default">
	  			<div class="container-fluid">
		   			<div class="navbar-header">
	      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        			<span class="sr-only">Toggle navigation</span>
	        			<span class="icon-bar"></span>
	       		 		<span class="icon-bar"></span>
	        			<span class="icon-bar"></span>
	      				</button>
	      				<img src="/Proyecto/img/Drr.JPG" width=50 height=50>
	      				<a class="navbar-brand" href="/Proyecto/Principal_administracion.php">Instituto Dr. Ramon Rosa</a>
	    			</div>

	    
	    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      				<ul class="nav navbar-nav">
	        				<li class="dropdown">
	          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Navegación<span class="caret"></span></a>
	         					<ul class="dropdown-menu">
	            					<li><a id="dpdonw-btn-docentes" href="/Proyecto/Docentes_administracion.php">Administración de Docentes</a></li>
	            					<li><a href="/Proyecto/Alumnos_administracion.php">Administración de Alumnos</a></li>
	            					<li><a href="/Proyecto/Bienes_administracion.php">Administración de Bienes e Inmuebles</a></li>
	            					<li><a href="#">Administración del nivel Administrativo</a></li>
	            					<li role="separator" class="divider"></li>
	            					<li><a href="https://es.wikipedia.org/wiki/Ram%C3%B3n_Rosa">Mas acerca del Dr. Ramón Rosa</a></li>
	          					</ul>
	        				</li>
	      				</ul>
	    				
	    				<ul class="nav navbar-nav navbar-right">
	       		 			<li class="dropdown">
	          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones del Usuario<span class="caret"></span></a>
	          					<ul class="dropdown-menu">
	            					<li><a href="#">Action</a></li>
	            					<li><a href="#">Another action</a></li>
	            					<li><a href="#">Something else here</a></li>
	            					<li role="separator" class="divider"></li>
	            					<li><a href="#">Separated link</a></li>
	          					</ul>
	        				</li>
	      				</ul>

					</div>
				</div>
			</nav>
		
			<div class="container-fluid">
				<div class="col-md-6">
					<input type="button" class="btn btn-primary" onclick="location=('/Proyecto/Docentes_administracion.php')" value="Administración de Docentes" /></br>
					</br>
					<input type="button" class="btn btn-primary" onclick="location=('/Proyecto/Alumnos_administracion.php')" value="Administración de Estudiantes" /></br>
					</br>
					<input type="button" class="btn btn-primary" onclick="location=('/Proyecto/Bienes_administracion.php')" value="Administración de Bienes e Inmuebles" /></br>
					</br>
					<input type="button" class="btn btn-primary" onclick="location=('/Proyecto/Administracion_administracion.php')" value="Administración del Personal Administrativo" /></br>
					</br>
				</div>

				<div class="col-md-6">
					<img src="/Proyecto/img/Drr.JPG" width=200 height=200>
				</div>
			</div>
			
			
			
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   	<script type="text/javascript">
    	$("#btn-administracion-docentes").click(function(evento){
    		
    		//En caso de que el boton sea un anchor <a>
    		evento.preventDefault();
    		alert("Acccion");

    	});
	</script>
    
</body>
</html>