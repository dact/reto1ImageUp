<?php
$_SESSION['timeout']=time();

include '../html/verificacion.php';
include 'lib/SimpleImage.php';
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

        
        $src=$src.$name;
        $auxsrc="../".$src;

        //subir imagen original
       	move_uploaded_file($tmp_name, $auxsrc);

        //subir imagen scalada(editamos)
        $image = new SimpleImage();
        $image->load($auxsrc);
        $image->resizeToWidth(250);
        $image->save('../resizeimg/'.$name);   

       	$src=$name;

        $sql = "
        INSERT INTO Imagenes(
            src,
            categoria,
            id,
            idimg,
            descripcion
            )VALUES (
            '$src',
            '$ncategoria',
            '$id',
            NULL,
            '$ndescripcion'
            )";
            mysql_query($sql); 
                      
                
        echo $src." ".$ndescripcion." ".$ncategoria." ".$id;       
	}
}          
                
?>