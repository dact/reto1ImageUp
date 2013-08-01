<?php
include 'getconexion.php';
$src = "imagenes/";
$categoria = $_POST["categoria"];
$descripcion=$_POST["descripcion"];
$id=$_SESSION['id'];

foreach ($_FILES["myfile"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["myfile"]["tmp_name"][$key];
        $name = $_FILES["myfile"]["name"][$key];

        $ndescripcion =$descripcion[$key];
        $ncategoria = $categoria[$key];
        //move_uploaded_file($tmp_name, "data/$name");
        echo $name." ".$ndescripcion." ".$ncategoria;
	}
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