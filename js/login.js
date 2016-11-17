$(document).ready(function(){
	$("#btn-login").click(function(){
			var parametros ="NombreUsuario=" +$("#NombreUsuario").val() + 
						"&"+"contrasena="+$("#contrasena").val();
			alert(parametros);
			$.ajax({
				url:"/Proyecto/ajax/acciones.php?accion=1",
				method: "POST",
				data: parametros,
				dataType: 'json',
				success:function(respuesta){
					$("#resultado").html(respuesta.resultado+" tipo usuario= "+respuesta.id_tipo_cuenta);
					

					if(respuesta.id_tipo_usuario =='1')
						window.location="/Proyecto/Administracion/administracion.php";
					else if(respuesta.id_tipo_usuario =='2')
						window.location="/Proyecto/Docente/docente.php";
				},

				error:function(){

				}
		});
	});	
});