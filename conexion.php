<?php
	
	//Conexion Local
	$conn = mysqli_connect("localhost", "root", "root","tienda");
	

	// Check connection
	if (!$conn) {
	  die('error de conexion:('.mysqli_connect_errno().')'.mysqli_error());
	}
	    //echo "Connected successfully";

?>