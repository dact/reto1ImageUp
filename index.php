<?php
  $_SESSION['timeout']=time();
  include 'php/verificacion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Tabs - Default functionality</title>
<!--   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <!-- <link rel="stylesheet" href="/resources/demos/style.css" /> -->
  <link rel="stylesheet" href="css/estilo.css" />

  <script src="js/funciones.js"></script>
  <script src="js/validaciones.js"></script>
  <script src="js/jquery_validate.js"></script>
  <script src="js/conexionesajax.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/carousel.css" rel="stylesheet">

</head>
<body>  

  <header>
    <div id="logo">
      <img src="logo.jpg">
    </div>
   <div id="contlogin">
    <div id="login" style="display: block;">
    <div id="mensaje" class="error"></div>
      <form id="frmlogin" action="php/login.php" method="post">
        <table>
          <tr>
            <td>
              <input type="text" id="correol" name="correo" placeholder="Correo"><br>
            </td>
            <td>
              <input type="password" id="contrasenal" name="contrasena" placeholder="Contrasena"><br>
            </td>
          </tr>
        </table>    
              <input type="submit" value="Entrar">
              <input type="button" id="registrarse" onClick="mostrarFormulario()" value="Registrate">
      </form>
    </div>
    </div>
  </header>
 
 <div id="formulario" style="display: none;">

  <form id="frmregusuario"  method="post">
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
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" >
      <div id="main" class="container marketing">

      </div>   

    <!-- FOOTER -->
       <footer>
         <p class="pull-right"><a href="#">Back to top</a></p>
         <p>&copy; Duban Cano. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
       </footer> 

    </div><!-- /.row -->

<script>
consultarImagenes();
validarlogin();
</script>
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
  </body>
</html>
