function login () {
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

					var count=0;
					for ( property in obj)          // should return 2
					{
					   if(obj.hasOwnProperty(property))
					   {
					      count++;
					   }
					}

					//ciclo para extraer direccion de las imagees
					var strresultado="";

					strresultado=strresultado+'<div class="row">';

					var row=0;
					var i=0;

					for (i = 0; i < count; i++) {

						if(row==3){
							strresultado=strresultado+'</div><div class="row">';
							row=0;
						}else{
							
						}

					strresultado = strresultado+
					'<div class="col-lg-4">'+
					'<img class="img-circle" data-src="holder.js/140x140" src="resizeimg/'+obj[i].src+'">'+
					'<h2>'+obj[i].src+'</h2>'+
					'<p>Categoria: '+obj[i].categoria+'<br>'+
					'Descripcion: '+obj[i].descripcion+'<br>'+
					'Autor: '+obj[i].nombre+obj[i].apellido+'<br>'+
					'<a href="imagenes/'+obj[i].src+'" target="_blank" download>Descargar</a>'+
					'</p>'+
					'</div>';

					row++;

					}

					if(i==count){
						if (count%3) {
							//se cerro bn el div fila
						}else{
							strresultado=strresultado+'</div>';
						}
					}

					$('#main').html(strresultado);
					
					}
					  
        ); 

}