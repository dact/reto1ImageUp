<?php
session_start();
if(isset($_SESSION['id'])){
unset($_SESSION['id']);
unset($_SESSION['nombre']);
unset($_SESSION['apellido']);
}
session_destroy();
header('location: ../index.php');
?>