<html>
<head>
	<title></title>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="../js/conexionesajax.js"></script>
	<script src="funcionespermitido.js"></script>

	<style>
	body { padding: 30px }
	form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }

	.progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
	.bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
	.percent { position:absolute; display:inline-block; top:3px; left:48%; }
	</style>

</head>
<body>
	<head>
aqui se suben las imagenes
<?php
$_SESSION['timeout']=time();
include 'verificacion.php';
echo "Bienvenido ".$_SESSION['nombre']." ".$_SESSION['apellido']."<br>";
echo "<input type=\"button\" value=\"Salir\" onClick=\"salir()\">";
?>
</head>

<div>

	<form action="../php/subirimagen.php" method="post" enctype="multipart/form-data">

		<div id="contenedorarchivos">

		<div class="archivo">	
	    <input type="file" name="myfile[]"> Descripcion: <input type="text" id="descripcion" name="descripcion[]">
	    <input type="button" value="Eliminar" class="clseliminartabla">
		</div>
	    
	    </div>

	    <input type="submit" value="Upload File to Server">
	    <input type="button" value="agregar archivo" onClick="agregararchivo()">
	</form>
	
	<div class="progress">
	    <div class="bar"></div >
	    <div class="percent">0%</div >
	</div>
	
	<div id="status"></div>
	
	
	Categoria:

</div>

<script src="http://malsup.github.com/jquery.form.js"></script>
<script>
(function() {
    
var bar = $('.bar');
var percent = $('.percent');
var status = $('#status');
   
$('form').ajaxForm({
    beforeSend: function() {
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
		//console.log(percentVal, position, total);
    },
    success: function() {
        var percentVal = '100%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
	complete: function(xhr) {
		status.html(xhr.responseText);
	}
}); 

})();       
</script>
<script>
  	//eliminar tabla
  	$(document).on('click','.clseliminartabla',function(){
  		var objtabla=$(this).parents().get(0);
  		//bajamos la opacacidad de la tabla hasta que desaparezca
  		$(objtabla).animate({'opacity':0},500,function(){
  			$(objtabla).remove();
  		});

  	});
function salir(){
	window.location ="../php/logout.php";
}
</script>
</body>
</html>