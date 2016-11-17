$(document).ready(function(){
	$("#btn-login").click(function(){
			var parametros ="NombreUsuario=" +$("#NombreUsuario").val() + 
						"&"+"contrasena="+$("#contrasena").val();
			alert(parametros);
			$.ajax({
				url:"/Proyecto/ajax/acciones.php?accion=1",
				method: "POST",
				data: parametros,
				
				success:function(respuesta){
					$("#resultado").html(respuesta);
					if(respuesta.id_tipo_usuario=='1')
						window.location="/Proyecto/Administracion/administracion.php";
					//else if(respuesta.id_tipo_usuario =='2')
						//window.location="/Proyecto/Docente/docente.php";
				},

				error:function(){

				}
		});
	});	
});