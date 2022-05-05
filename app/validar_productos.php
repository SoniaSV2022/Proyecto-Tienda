<?php
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$fecha=$_POST['fecha'];


  	require("../conexion.php");
    mysqli_select_db($conn, "tienda");
    $tildes =$conn->query("SET NAMES 'utf8'");


        $query=mysqli_query($conn, "INSERT INTO `tienda`.`productos` (`id`, `nombre`, `precio`,`fecha`) VALUES 
            (NULL, '$nombre', '$precio', '$fecha')");

	    if (!$query) {

            die("Invalid query: " . mysql_error());

        }else{ 
         
            echo ' <script language="javascript">alert("Producto Registrado Correctamente");</script> ';
   
            echo "<script>location.href='lista_productos.php'</script>";   
 
    } 
               mysqli_close($conn);

?>