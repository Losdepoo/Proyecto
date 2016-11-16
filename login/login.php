<?php


?>
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

    <title>Login</title>

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
		<form class="form-vertical">
			  <fieldset>
			    <legend>Bienvenido, Autentiquese para continuar.</legend>
			    <div class="form-group">
			      <label class="col-lg-2 control-label">Nombre de Usuario:</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="txt-nombre_usuario" placeholder="Ej. Juan Orlando Hernandez Alvarado">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputPassword" class="col-lg-2 control-label">Contraseña:</label>
			      <div class="col-lg-10">
			        <input type="Password" class="form-control" id="txt-contrasena" placeholder="Password">
			      </div>
			    </div>
				
				<div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <button type="reset" class="btn btn-default">Cancelar</button>
			        <button type="submit" class="btn btn-primary" onclick="sesion();">Iniciar Sesión</button>
			      </div>
			    </div>

			    <div id="informacion">
			    </div>
			 </fieldset>
		</form>

	<script>
		function sesion(){
			var parametros = "txt-nombre_usuario="+$("#txt-nombre_usuario").val()+"&"+"txt-contrasena="+$("#txt-contrasena").val();
			alert(parametros);
			$.ajax({
          		url:"ajax/existo.php?accion=tarjetas",
          		method:"POST",
          		data: parametros,
          		success:function(respuesta){
            		$("#informacion").html(respuesta);
          		},
          		error:function(){
            		alert("Ocurrio un error.");
          		}
        	});
		}
	</script>	
</body>

</html>