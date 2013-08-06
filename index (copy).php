<?php 
  $_SESSION['timeout']=time();
  include 'php/verificacion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />

  <script src="js/funciones.js"></script>
  <script src="js/validaciones.js"></script>
  <script src="js/conexionesajax.js"></script>

</head>
<body>

  <head>
    imageup
    <div id="login" style="display: block;">
      Correo <input type="text" id="correol">
      Contrasena<input type="text" id="contrasenal">
      <input type="button" value="Entrar"  onclick="login();">
      <input type="button" id="registrarse" onClick="mostrarFormulario()" value="Registrate">
    </div>


    <div id="mensaje">
      mensaje
    </div>
  </head>
 
 <div id="formulario" style="display: none;">

  <form id="frmregempresa"  method="post" >
                  <table border="0">
                      <tr>
                          <th>Nombre</th>
                          <td><input type="text" id="nombre"/> 
                      </tr>
                      <tr>
                          <th>Apellido</th>
                          <td><input type="text" id="apellido"/> 
                      </tr>
                      <tr>
                          <th>Correo</th>
                          <td><input type="text" id="correo"/> 
                      </tr>
                      <tr>
                          <th>Contrasena</th>
                          <td><input type="text" id="contrasena"/> 
                      </tr>
                      <tr>
                          <td colspan="2" align="center">
                            <input type="button" value="Registrarse" onClick="registrarUsuario()"/>
                            <input type="button" value="No gracias" onClick="mostrarMain()"/>
                          </td> 
                      </tr>
                  </table>
              </form>
 </div>

 <div id="main" style="display: block;">

  <div id="tabs">
    <ul>
      <li><a href="#tabs-1">Nunc tincidunt</a></li>
      <li><a href="#tabs-2">Proin dolor</a></li>
      <li><a href="#tabs-3">Aenean lacinia</a></li>
    </ul>
    <div id="tabs-1">
      <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
    </div>
    <div id="tabs-2">
      <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
    </div>
    <div id="tabs-3">
      <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
      <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
    </div>
  </div>
 </div>

 <footer>
  footer
 </footer>
<script>
setEfectoTabs();
consultarImagenes();
</script>

</body>
</html>