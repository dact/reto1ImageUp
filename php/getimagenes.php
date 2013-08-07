<?php
include 'getconexion.php';
//creamos array que va a contener los dos arreglos
$arrcompleto = array();
//array que contiene  autor, ruta , categoria
$arrimagenes = array();

$sql = "SELECT 
		Usuarios.nombre,
		Usuarios.apellido,
		Imagenes.src,
		Imagenes.categoria,
		Imagenes.descripcion 
		FROM Usuarios INNER JOIN Imagenes ON 
		Usuarios.id=Imagenes.id";
$initial_query = mysql_query($sql) or die("SQL error");


while ( $row = mysql_fetch_array($initial_query)) {
     $arrimagenes = array(
    'nombre' => (String)$row[0],
    'apellido'=>(String)$row[1],
    'src'=>(String)$row[2],
    'categoria'=>(String)$row[3],
    'descripcion'=>(String)$row[4]);
    array_push($arrcompleto,$arrimagenes);
}

echo json_encode($arrcompleto, JSON_FORCE_OBJECT );

?>