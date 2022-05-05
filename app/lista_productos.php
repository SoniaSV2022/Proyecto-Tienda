<?php
session_start();
if (@!$_SESSION['usuario']) {
	header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tienda</title>
		<meta charset="utf-8">
          
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="css/style.css"  rel="stylesheet" type="text/css"/>

		<header>
         	<div class="botonsesion">
               
                Welcome <strong><?php echo $_SESSION['usuario'];?></strong>
                  <a href="desconectar.php" class="btn btn-info" role="button">Salir</a>
              
            </div>
        </header> 
   			
        <nav>

            <div class="container">
                <a href="registrar_productos.php" class="btn btn-info" role="button">Registrar Productos</a>  
            </div>
        </nav>
	</head>
	<body>
		<h1>LISTA DE PRODUCTOS</h1>

		<?php
		require("../conexion.php");

		$query = "SELECT * FROM productos";

		$resultado=mysqli_query($conn,$query);
		echo"<table>";
			echo"<th>Nombre</th>";
			echo"<th>Precio</th>";
			echo"<th>Fecha</th>";
			echo "<th>Editar</th>";
			echo "<th>Eliminar</th>";
            while($fila=mysqli_fetch_array($resultado)){
                echo "<tr>";
                       echo "<td>$fila[1]</td>";
                       echo "<td>$fila[2]</td>";
                       echo "<td>$fila[3]</td>";

                       echo "<td><a href='actualizar_informacion_producto.php?id=$fila[0]'>
                       <img id='imgprimaria' src='img/edit.png'></a></td>";

                       echo "<td><a href='eliminar_producto.php?id=$fila[0]'>
                       <img id='imgprimaria'src='img/delete.png'/></a></td>";
   
                echo "</tr>";
             
            }
		echo"</table>";
		?>	
	</body>
</html>
