<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
     <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="/proyecto/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="/proyecto/css/signin.css" rel="stylesheet">

    
  </head>

  <body>

    <div class="container">

      <div class="form-signin">
        <h2 class="form-signin-heading">Bienvenido, Identificate para ingresar</h2>
        <label for="inputEmail" class="sr-only">Nombre de Usuario</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Nombre de Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> No cerrar sesión en este equipo
          </label>
        </div>
        <button id="btn-login" class="btn btn-lg btn-primary btn-block" type="submit">ingresar</button>
      </div>
      <div id="resultado"></div>
    </div> <!-- /container -->


    <script type="text/javascript" src="/proyecto/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/proyecto/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/proyecto/js/login.js"></script>
  </body>
</html>
