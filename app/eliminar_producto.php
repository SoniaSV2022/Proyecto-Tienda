<?php

require("../conexion.php");
	  $id = $_GET['id'];
	  echo $id;



	  $query = mysqli_query($conn, "DELETE FROM productos WHERE id='$id'");


	   if (!$query) {

            die("Invalid query: " . mysql_error());

        }

        else{ 
         
            echo ' <script language="javascript">alert("Producto Eliminado Correctamente");</script> ';
   
            echo "<script>location.href='lista_productos.php'</script>";   
 
    } 
            mysqli_close($conn);
	    

?>