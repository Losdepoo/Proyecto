<?php
	include_once("../class/class_conexion.php");
	session_start();
	
	switch ($_GET["accion"]) {
		case '1': //Acceder
			
			$nombre =$_POST["NombreUsuario"];
			$contrasena= $_POST["contrasena"];

			$conexion= new conexion;

			$codigo = $conexion->ejecutarInstruccion('SELECT id_cuenta, id_tipo_cuenta, nombre_cuenta, contrasena_cuenta FROM tbl_cuentas WHERE 											contrasena_cuenta ='."'".$contrasena."'".' AND nombre_cuenta ='."'".$nombre."'");
			
			$cantidad = $conexion->cantidadRegistros($codigo);
			$fila = $conexion->obtenerFila($codigo);
			$conexion->liberarResultado($codigo);
			
			if ($cantidad == 0 || !$cantidad){  
				echo "No existen registros en la base de datos."."<br>";
			} else {
				echo "Bienvenido señor"."<br>";
				echo $fila["nombre_cuenta"]."<br>";
				$_SESSION["id_cuenta"] = $fila["id_cuenta"];
				$_SESSION["nombre_cuenta"] = $fila["nombre_cuenta"];
				$_SESSION["id_tipo_cuenta"] = $fila["id_tipo_cuenta"];
				json_encode($fila);
			}

			$conexion->cerrarConexion();
			
			
			//echo ($fila["id_tipo_cuenta"]);
			break;
		default:
			# code...
			break;
	}
	
?>