function agregararchivo(){
	var objtabla ='<div class="archivo">'+	
	    '<input type="file" name="myfile[]"> Descripcion: <input type="text" id="descripcion" name="descripcion[]">'+
	    '<input type="button" value="Eliminar" class="clseliminartabla">'+
		'</div>';

	$('#contenedorarchivos').append(objtabla);
}