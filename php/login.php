<?php
//manejo de sesiones
session_start();
$_SESSION['timeout']=time();

include 'getconexion.php';

  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

 //conexiones a BD

 	$sql = "select count(correo) from Usuarios where correo='$correo'";
 	$initial_query = mysql_query($sql) or die("SQL error");
 	$cantidad = mysql_fetch_array($initial_query);

 	if($cantidad[0]==1){

 		    $sql = "select * from Usuarios where correo='$correo'";
 		    
 		    $initial_query = mysql_query($sql) or die("SQL error");
 		    $num_sql = mysql_fetch_array($initial_query);	

 		    $query = $num_sql['password'];

 		    if($query==$contrasena)
 		    {		
 		    	//variable de session
 		    	$_SESSION['nombre'] = $num_sql['nombre'];
				$_SESSION['apellido'] = $num_sql['apellido'];
				$_SESSION['id'] = $num_sql['id'];


 				$arr = array('location' => 'html/permitido.php');
 				echo json_encode($arr);
 		        
 		    }
 		    else{
 		        $arr = array('error' => 'contraseña incorrecta');
 				echo json_encode($arr);
 		    }
 	}
 	else{
 		$arr = array('usuarioincorrecto' => 'Usuario incorrecto');
		echo json_encode($arr);
 	}



?>