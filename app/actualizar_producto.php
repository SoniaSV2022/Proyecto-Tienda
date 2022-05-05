<?php
extract($_POST);
require("../conexion.php");

        $query = ("UPDATE productos SET nombre='$nombre', precio='$precio', fecha='$fecha' 
            WHERE id='$id'");

        $resent = mysqli_query($conn,$query);

        if($resent==null){

            echo '<script>alert("Error de procesamiento, no se actulizaron los datos")</script>';
            header("location: lista_productos.php");
            echo "<script>location.href='lista_productos.php'</script>";
    
        }else{
            echo '<script>alert("Producto Actualizado")</script> ';
            echo "<script>location.href='lista_productos.php'</script>";  
        }
            $resent = mysqli_query($conn,$query) or exit(mysqli_errno($conn) . ': ' . mysqli_error($conn));

?>