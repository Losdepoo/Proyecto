(function(){
    $(".boton_guardar").click(function() {
 
         var nombreCompleto = $(".nombreCompleto").val();
            numeroIdentidad= $(".numeroIdentidad").val();
            fechaNacimiento= $(".fechaNacimiento").val();
            genero= $(".genero").val();
            direccion= $(".direccion").val();
            edad= $(".edad").val();
            jornada= $(".jornada").val();
            correoElectronico= $(".correoElectronico").val();
            telefono= $(".telefono").val();

	    if (nombreCompleto == "") {
			alert("Debe ingresar el nombre del estudiante");
            $(".nombreCompleto").focus();
            return false;
        }else if(numeroIdentidad == ""){
			alert("Debe ingresar el numero de identidad");
            $(".numeroIdentidad").focus();    
            return false;
        }else if(fechaNacimiento == ""){
			alert("Debe ingresar la fecha de nacimiento");
            $(".fechaNacimiento").focus();    
            return false;
        }else if(genero == ""){
			alert("");
            $(".genero").focus();    
            return false;
        }else if(direccion == ""){
			alert("Debe ingresar la direccion");
            $(".direccion").focus();    
            return false;
        }else if(edad == ""){
			alert("Debe ingresar la edad");
            $(".edad").focus();    
            return false;
        }else if(jornada == ""){
			alert("");
            $(".jornada").focus();    
            return false;
        }else if(correoElectronico == ""){
			alert("Debe ingresar el correo electronico");
            $(".correoElectronico").focus();    
            return false;
        }else if(telefono == ""){
			alert("Debe ingresar el telefono");
            $(".telefono").focus();    
            return false;
        }else{
                // Si todo paso, aqui ira la llamada AJAX
			$('.ajaxgif').removeClass('hide');
				$('.ajaxgif').removeClass('hide');
				var datos = 'nombreCompleto='+ nombreCompleto + 
				             '&numeroIdentidad=' + numeroIdentidad + 
				             '&fechaNacimiento=' + fechaNacimiento + 
				             '&genero=' + genero+ 
				             '&direccion=' + direccion+ 
				             '&edad=' + edad+
				             '&jornada=' + jornada+
				             '&correoElectronico=' + correoElectronico+
				             '&telefono=' + telefono;

                $.ajax({
				    type: "POST",
				    url: "proceso.php",
				    data: datos,
				    success: function() {
				        $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);  
				    },
				    error: function() {
				        $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);                 
				    }
				});
				return false;
        }
    });
})();