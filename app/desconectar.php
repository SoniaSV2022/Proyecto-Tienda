<?php
	//session_start — Iniciar una nueva sesión o reanudar la existente
	session_start();
	if($_SESSION['usuario']){	
		session_destroy();
		header("location:../index.php");
	}
	else{
		header("location:../index.php");
	}
?>