<?php
	include_once("../class/class_conexion.php");
	session_start();
	
	switch ($_GET["accion"]) {
		case '1': //Acceder
			
			$nombre =$_POST["NombreUsuario"];
			$contrasena= $_POST["contrasena"];

			$conexion= new conexion;

			$codigo = $conexion->ejecutarInstruccion('SELECT id_tipo_cuenta FROM tbl_cuentas WHERE contrasena_cuenta ='."'".$contrasena."'".											'AND nombre_cuenta ='."'".$nombre."'");
			
			$cantidad = $conexion->cantidadRegistros($codigo);
			$fila = $conexion->obtenerFila($codigo);
			$conexion->liberarResultado($codigo);
			
			if ($cantidad == 0 || !$cantidad){  
				echo "No existen registros en la base de datos."."<br>";
			} else {
				echo "Bienvenido señor"."<br>";
				echo $fila["id_tipo_cuenta"]."<br>";
				//$_SESSION["id_cuenta"] = $fila["id_cuenta"];
				$_SESSION["id_tipo_cuenta"] = $fila["id_tipo_cuenta"];
				//$_SESSION["id_tipo_cuenta"] = $fila["id_tipo_cuenta"];
				echo ($fila["id_tipo_cuenta"]);
			}

			$conexion->cerrarConexion();
			break;
		case '2'://agregar docente
			$nombre= $_POST["inputNombre"];
			$numeroIdentidad= $_POST["inputNumeroIdentidad"];
			$genero= $_POST["slcGenero"];
			$cursos= $_POST["cursos"];
			$Asignaturas= $_POST["slcAsignaturas"];
			$observacionesMedicas= $_POST["textAreaObservacionesMedicas"];
			$edad=$_POST["inputEdad"];
			$nombreUsuario=$_POST["inputUsuario"];
			$contrasena=$_POST["inputContrasena"];

			$contar = $conexion->ejecutarInstruccion('SELECT * FROM tbl_persona');	
			$contar2 = $conexion->ejecutarInstruccion('SELECT * FROM tbl_docente');
			$contar3 =	$conexion->ejecutarInstruccion('SELECT * FROM tbl_empleado');
			$contar4 = $conexion->ejecutarInstruccion('SELECT * FROM tbl_cuentas')
			$numero = $conexion->cantidadRegistros($contar);
			$numero2 = $conexion->cantidadRegistros($contar2);
			$numero3 = $conexion->cantidadRegistros($contar3);
			$numero4 = $conexion->cantidadRegistros($contar4);
			$conexion->liberarResultado($contar);
			$conexion->liberarResultado($contar2);
			$conexion->liberarResultado($contar3);
			$conexion->liberarResultado($contar4);
			$registro = $numero+1;
			$registro2 = $numero2+1;
			$registro3 = $numero3+1;
			$registro4 = $numero4+1;

			$codigo = $conexion->ejecutarInstruccion('INSERT INTO `tbl_persona`(`id_persona`, `numero_identidad`, `nombre_persona`, `edad`,
			 											`Genero`, `datos_medicos`) VALUES 														('.$registro.','.$numeroIdentidad.','.$nombre.','.$edad.','.$genero.','.$observacionesMedicas.')');

			$codigo2 = $conexion->ejecutarInstruccion('INSERT INTO `tbl_docente`(`id_docente`, `id_tipo_docente`, `id_empleado`) VALUES 
				('.$registro2.',1,'.$registro3.')');

			$codigo3 = $conexion ->ejecutarInstruccion('INSERT INTO `tbl_empleado`(`id_empleado`, `id_tipo_empleado`, `id_cuenta`, `id_persona`) VALUES ('.$registro3.',2,'.$registro4.','.$registro.')');

			$codigo4=$conexion->ejecutarInstruccion('INSERT INTO `tbl_cuentas`(`id_cuenta`, `id_tipo_cuenta`, `nombre_cuenta`, `contrasena_cuenta`) VALUES ('.$registro4.',2,'.$nombreUsuario.','.$contrasena.')');

			echo "Se ha añadido con exito su nuevo usuario bienvenido ".$nombre." tenga un excelente dia"."<br>";
			$conexion->cerrarConexion();

		break;	
		default:
			# code...
			break;
	}
	
?>