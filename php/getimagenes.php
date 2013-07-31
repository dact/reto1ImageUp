<?php
include 'getconexion.php';
//creamos array que va a contener los dos arreglos
$arrcompleto = array();
//array que contiene que tipos de categorias que hay
$arrcategorias = array();
//array que contiene  autor, ruta , categoria
$arrimagenes = array();

$sql = "select * from Categorias";
$initial_query = mysql_query($sql) or die("SQL error");
$arrcategorias = mysql_fetch_array($initial_query);

$sql = "select * from Categorias";
$initial_query = mysql_query($sql) or die("SQL error");
$arrcategorias = mysql_fetch_array($initial_query);


?>