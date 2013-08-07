
function validarlogin(){
	$(function(){
       $('#frmlogin').validate({
           rules: {    
		   'correo':{required:true,email:true},
		   'contrasena':'required',
             },
       messages: {
       		'correo':{required: 'Debe ingresar un correo electrónico', 
             		  email: 'Formato incorrecto. ejemplo: pepito@dominio.com'},
            'contrasena':'Debe ingresar su contraseña',		   
         		 },
       debug: true,
       /*errorElement: 'div',*/
       //errorContainer: $('#errores'),
       submitHandler: function(form){
           login();
       }
    });
});
}