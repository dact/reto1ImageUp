function login (argument) {
	        $.post('php/login.php',
			{
                correo: $('#correol').val(),
                contrasena  : $('#contrasenal').val()
            },
            function (data,status) {
					var obj = JSON.parse(data);
					if (obj.usuarioincorrecto) {
						//ponemos el div de registro
						mostrarFormulario();
						$('#mensaje').html(obj.usuarioincorrecto);
					}else{
						if(obj.error) {
							var msg = obj.error;
							$('#mensaje').html(msg);
						}else{
							//salto a la usuario registrado
							var header_location = obj.location;
							window.location = header_location;
							}
							
						}   

					}
					  
        );     
}

function registrarUsuario (argument) {
	        $.post('php/registrarusuario.php',
			{
                nombre: $('#nombre').val(),
                apellido: $('#apellido').val(),
                correo: $('#correo').val(),
                contrasena:$('#contrasena').val()
            },
            function (data,status) {
					var obj = JSON.parse(data);
						if(obj.error) {
							var msg = obj.error;
							$('#mensaje').html(msg);
						}else{
							//var header_location = obj.location;
							//window.location = header_location;
							$('#mensaje').html("registradi");
							}
							
						   

					}
					  
        );     
}

function consultarImagenes(){

	        $.post('php/getimagenes.php',
			{
            },
            function (data,status) {
					var obj = JSON.parse(data);
						if(obj.error) {
							var msg = obj.error;
							$('#main').html(msg);
						}else{
							//var header_location = obj.location;
							//window.location = header_location;
						}

					}
					  
        ); 

}