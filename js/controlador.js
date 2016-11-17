function agregarDocente(){
	var cursosSeleccionados = "";
		$("input[name='chkcursos[]']:checked").each(function(){
			cursosSeleccionados+="cursos[]="+$(this).val()+"&";
		});
	var parametros ="inputNombre=" +$("#inputNombre").val() + 
						"&"+"inputNumeroIdentidad="+$("#inputNumeroIdentidad").val()+
						"&"+"inputEdad"=$("#inputEdad").val()+
						"&"+"slcGenero="+$("#slcGenero").val()+
						"&"+cursosSeleccionados+
						"&"+"slcAsignaturas"+$("#slcAsignaturas").val()+
						"&"+"textAreaObservacionesMedicas"+$("#textAreaObservacionesMedicas").val();
			alert(parametros);
			$.ajax({
				url:"/Proyecto/ajax/acciones.php?accion=2",
				method: "POST",
				data: parametros,
				
				success:function(respuesta){
					$("#resultado").html(respuesta);
				},
				error:function(){
				}
}