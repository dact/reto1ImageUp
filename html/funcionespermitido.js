function agregararchivo(){
	var objtabla ='<div class="archivo">'+	
	    '<input type="file" name="myfile[]">'+
	    'Descripcion: <input type="text" id="descripcion" name="descripcion[]">'+
	    'Categoria: <select class="categoria" name="categoria[]" id="categoria">'+
						  '<option value="natural">Natural</option>'+
						  '<option value="juridica">Juridica</option>'+
		'</select>'+
	    '<input type="button" value="Eliminar" class="clseliminartabla">'+
		'</div>';

	$('#contenedorarchivos').append(objtabla);
}

function getsetcategorias(){
	        $.post('../php/getcategorias.php',
			{
            },
            function (data,status) {
            		//contando array
				var obj = JSON.parse(data);
				var count=0;
				for ( property in obj )          // should return 2
				{
				    if(obj.hasOwnProperty(property))
				    {
				    count++;
				    }
				}
				//creando las opciones
				var stropciones="";
				for (var i = 0; i < count; i++) {
					alert(obj[i]);
				}						

			}     
        );   
