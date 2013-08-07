<?php
session_start();
$inactive = 600;
$session_life =  time() - $_SESSION['timeout'];
	if($session_life > $inactive){
		if(isset($_SESSION['id'])){
	          unset($_SESSION['nombre']);
			  unset($_SESSION['apellido']);
			  unset($_SESSION['id']);
			  
		   header('location: ../index.php');
		}else{
			header('location: ../index.php');
		}
	}
	else{
		if(!isset($_SESSION['id'])){
			header('location: ../index.php');
		}
	}

?>