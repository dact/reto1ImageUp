<?php
include 'getconexion.php';
$src = "imagenes/";

$descrpcion=$_POST["descripcion"];

foreach ($_FILES["myfile"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["myfile"]["tmp_name"][$key];
        $name = $_FILES["myfile"]["name"][$key];

        $descripcion =
        //move_uploaded_file($tmp_name, "data/$name");
        echo $name;
}


// $sql = "
// INSERT INTO Imagenes(
//     src,
//     categoria,
//     id,
//     idimg,
//     descripcion
//     )VALUES (
//     NULL,
//     '$src',
//     '$categoria',
//     '$id',
//     'NULL',
//     '$descripcion'
//     )";
//     mysql_query($sql);                  
                
?>