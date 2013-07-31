<?php
include 'getconexion.php';
                        
$nombre  = $_POST["nombre"];
$apellido  = $_POST["apellido"];
$correo = $_POST["correo"];
$password = $_POST["contrasena"];

$sql = "select count(correo) from Usuarios where correo='$correo'";
$initial_query = mysql_query($sql) or die("SQL error");
$num_sql = mysql_fetch_array($initial_query);
$numrows = $num_sql[0];

mysql_free_result($initial_query);

if ($numrows!= 0)
{
    $arr = array('error' => 'Usuario ya existe');
    echo json_encode($arr);
}
else
{
    $sql = "
    INSERT INTO Usuarios(
        id, 
        nombre, 
        apellido, 
        correo, 
        password) 
VALUES (
    NULL,
    '$nombre',
    '$apellido',
    '$correo',
    '$password'
    )";
    mysql_query($sql);                  
    //header('location: registrationsuccess.php');
    $arr = array('error' => 'Usuario REGISTRADO');
    echo json_encode($arr);
    
}

                
?>
