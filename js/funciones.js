function setEfectoTabs(argument) {
	$(function() {
    $( "#tabs" ).tabs();
  });
}

function mostrarMain(){
	$('#formulario').css("display", "none");
	$('#main').css("display", "block");
}

function mostrarFormulario(){
	$('#formulario').css("display", "block");
	$('#main').css("display", "none");
}

