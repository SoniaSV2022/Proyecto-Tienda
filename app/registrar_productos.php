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

	<h1>Registrar Producto</h1>

	<div class="center">
	<form action="validar_productos.php" method="post">
		Nombre<br> 
		
		<input type="text" name="nombre" required/><br>

		Precio<br>
		<input type="text" name="precio" required/><br>
		
		Fecha<br>
		<input type="date" name="fecha" required/><br><br>

        <input  class="btn btn-info" role="button" type="submit" value="Aceptar">
        <a href="lista_productos.php" class="btn btn-info" role="button">Cancelar</a>
	</form>
	</div>

</body>
</html>