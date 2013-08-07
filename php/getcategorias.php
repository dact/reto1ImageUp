<?php
include 'getconexion.php';
$sql = "select categoria from Categorias where 1";
$initial_query = mysql_query($sql) or die("SQL error");
$arrcategorias = array();
$i=0;
while ( $row = mysql_fetch_array($initial_query)) {
    array_push($arrcategorias,$row[0]);
    $i++;
}

// output them, encoded as a javascript object
echo json_encode($arrcategorias,JSON_FORCE_OBJECT );

?>