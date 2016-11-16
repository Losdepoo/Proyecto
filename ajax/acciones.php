<?php 
include_once("/proyecto/class/class_conexion.php");
$conexion = new Conexion();
	switch ($_GET["accion"]) {
		
		case '1':
			$usuario = $_POST["txt-usuario"];
			$correo = $_POST["txt-nuevocorreo"];
			$contrasena = $_POST["txt-nuevocontrasena"];
			$img = $_POST["slc-url-imagen"];

			$contar = $conexion->ejecutarInstruccion('SELECT * FROM tbl_usuarios');	
			$numero = $conexion->cantidadRegistros($contar);
			$conexion->liberarResultado($contar);

			 

			$registro = $numero+1;
			$separador1 = "'";
			$separador2 = "','";
			$separador3 = ",'";

			$codigo = $conexion->ejecutarInstruccion('INSERT INTO `tbl_usuarios`(`codigo_usuario`, `nombre_usuario`, `correo`, `contrasena`, `url_imagen_perfil`) VALUES ('.$registro.$separador3.$usuario.$separador2.$correo.$separador2.$contrasena.$separador2.$img.$separador1.')');

			echo "Se ha añadido con exito su nuevo usuario bienvenido ".$usuario." tenga un excelente dia"."<br>";
			$conexion->cerrarConexion();
			break;
		
		case 'obtener':
			
			$correo=$_POST["txt-correo"];
			$contrasena=$_POST["txt-contrasena"];
			
			$codigo = $conexion->ejecutarInstruccion('SELECT nombre_usuario, codigo_usuario, correo, contrasena FROM tbl_usuarios WHERE contrasena ='."'".$contrasena."'".' AND correo ='."'".$correo."'");
			$respuesta = $conexion->cantidadRegistros($codigo);

			$fila = $conexion->obtenerFila($codigo);

			$conexion->liberarResultado($codigo);
			
			if ($respuesta == 0 || !$respuesta){  
				echo "No existen registros en la base de datos."."<br>";
			} else {
				echo "Bienvenido señor"."<br>";
				echo $fila["nombre_usuario"]."<br>";
			}

			$conexion->cerrarConexion();
		break;

		case 'tarjetas':
			$idusuario = $_POST["txt-id-usuario"];
			$nombre = $_POST["txt-nombre"];

			$codigo = $conexion->ejecutarInstruccion('SELECT codigo_usuario, nombre_usuario, correo, contrasena, url_imagen_perfil FROM tbl_usuarios ');

			while ($fila = $conexion->obtenerFila($codigo)){
				?>
				<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 card-container">
 					<div class="card-profile">
 							<button type="button" class="btn btn-primary btn-xs" style="position:absolute;"
								title="<?php echo $fila["nombre_usuario"]; ?>" onclick="seleccionarUsuario(<?php echo $fila["codigo_usuario"]; ?>,'<?php echo $fila["nombre_usuario"]; ?>');  superaleros(); futurosaleros(); ">
 								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
 							</button>
 						<img src="<?php echo $fila["url_imagen_perfil"]; ?> " class="img-responsive">
 						<span class="profile-name"><?php echo $fila["nombre_usuario"];?></span>
 					</div>
				</div>
				<?php
			}
			$conexion->liberarResultado($codigo);
			$conexion->cerrarConexion();
		break;

		case 'misaleros':
			$id = $_POST["txt-id-usuario"];
			$codigo = $conexion->ejecutarInstruccion('SELECT a.codigo_usuario, a.nombre_usuario, a.correo, a.contrasena, a.url_imagen_perfil
													FROM tbl_usuarios a
													INNER JOIN tbl_amigos b
													ON (a.codigo_usuario = b.codigo_usuario_amigo)
													WHERE b.codigo_usuario = '.$id.';');

			while ($fila = $conexion->obtenerFila($codigo)){
				?>
					<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 card-container">
 						<div class="card-profile">
 							<img src="<?php echo $fila["url_imagen_perfil"]; ?>" class="img-responsive">
 							<span class="profile-name"><?php echo $fila["nombre_usuario"]; ?></span>
 						</div>
					</div>
				<?php
			}
			$conexion->liberarResultado($codigo);
			$conexion->cerrarConexion();
		break;

		case 'maradelfuturo':
			$id = $_POST["txt-id-usuario"];
			
			$codigo = $conexion->ejecutarInstruccion('SELECT a.codigo_usuario, a.nombre_usuario, a.correo, a.contrasena, a.url_imagen_perfil
														FROM tbl_usuarios a
														WHERE a.codigo_usuario NOT IN
														(	
								 						SELECT codigo_usuario_amigo
														FROM tbl_amigos
														WHERE codigo_usuario ='.$id. 
														')
														AND a.codigo_usuario !='.$id. 
														';');
			
			while ($fila = $conexion->obtenerFila($codigo)){
				?>
					<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 card-container">
 						<div class="card-profile">
 							<button type="button" class="btn btn-primary btn-xs" style="position: absolute;" title="Agregar"
								onclick="agregarAmigo(<?php echo $fila["codigo_usuario"]; ?>); futurosaleros(); superaleros();">
			 					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
 							</button>
 							<img src="<?php echo $fila["url_imagen_perfil"]; ?>" class="img-responsive">
 							<span class="profile-name"><?php echo $fila["nombre_usuario"]; ?></span>
 						</div>
					</div>
				<?php
			}

			$conexion->liberarResultado($codigo);
			$conexion->cerrarConexion();
		break;

		case 'masaleros':

				$id=$_POST["txt-id-usuario"];
				$id2=$_POST["txt-nuevocontrasena"];

				$codigo = $conexion->ejecutarInstruccion('INSERT INTO `tbl_amigos`(`codigo_usuario`, `codigo_usuario_amigo`) VALUES ('.$id.','.$id2.')');
				$conexion->cerrarConexion();
		break;

		default:
			echo "Accion invalida";
			break;
	}
	
?>