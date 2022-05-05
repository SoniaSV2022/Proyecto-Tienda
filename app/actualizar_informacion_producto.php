<?php
session_start();
if (@!$_SESSION['usuario']) {
	header("Location:index.php");
}
?>

<!DOCTYPE html>	
<html>
	<head lang="en">
		<title>Tienda</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<link href="css/style.css"  rel="stylesheet" type="text/css"/>
          
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    		<!-- Bootstrap CSS -->
    		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  </head>
	  <body>
		     <header class="header">
			     <ul class="nav pull-right">
			        Welcome <strong><?php echo $_SESSION['usuario'];?></strong>
			      </ul>
		     </header>

		    <div class="container">
				
			    <?php
					extract($_GET);
					require("../conexion.php");

			        $id=$_GET['id'];
			        //echo $id;
				    	$sql=("SELECT productos.id, productos.nombre, productos.precio, productos.fecha FROM productos  WHERE productos.id = '$id'");
				
					$ressql=mysqli_query($conn,$sql);
					while ($row=mysqli_fetch_row ($ressql)){
					        $id=$row[0];
					        $nombre=$row[1];
					    	 $precio=$row[2];
					    	$fecha=$row[3];

					    }
					?>

		         <br><br><br>
		         <h1>EDITAR PRODUCTO</h1>

		          <div class="center">
					    <form action="actualizar_producto.php" method="post">	

							Nombre<br> 
							<input type='text' name='nombre' value='<?php echo $nombre;?>'><br>

							Precio<br> 
							<input type='text' name='precio' value='<?php echo $precio;?>'><br>

							Fecha<br> 
							<input type='text' name='fecha' value='<?php echo $fecha;?>'><br>

							<input type='hidden' name='id' value='<?php echo $id; ?>'>
					
						  	<br>
							<input class="btn btn-info" role="button" type="submit" value="Guardar">
							<a href="lista_productos.php" class="btn btn-info" role="button">Cancelar</a>
						 </form>
				 </div>
	       </div> 
	  </body>
</html> 

