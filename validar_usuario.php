
<?php
session_start();
	require("conexion.php");

	$usuario=$_POST['correo'];
	$contraseña=$_POST['contraseña'];

	$sql2=mysqli_query($conn,"SELECT * FROM credenciales WHERE correo='$usuario'");
	echo "etro 1";

	if($f2=mysqli_fetch_assoc($sql2)){
		if($contraseña==$f2['contraseñaAdmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['usuario']=$f2['usuario'];
			
            echo '<script>alert("Bienvenido.")</script>';
			//echo "<script>location.href='app/menu.php'</script>";
			echo "<script>location.href='app/lista_productos.php'</script>";
		

	   }
	}


	$sql=mysqli_query($conn,"SELECT * FROM credenciales WHERE correo='$usuario'");
	if($f=mysqli_fetch_assoc($sql)){
		if($contraseña==$f['contraseña']){
			$_SESSION['id']=$f['id'];
			$_SESSION['usuario']=$f['usuario'];
			

			echo '<script>alert("Bienvenido.")</script> ';
			//echo "<script>location.href='app/menu.php'</script>";
			echo "<script>location.href='app/lista_productos.php'</script>";

             }else{
			echo '<script>alert("Contraseña Incorrecta.")</script>';

		
			echo "<script>location.href='index.php'</script>";
		   }
	     }else{
		
		echo '<script>alert("El usuario no existe.")</script>';
		
		echo "<script>location.href='index.php'</script>";	

	}
?>

