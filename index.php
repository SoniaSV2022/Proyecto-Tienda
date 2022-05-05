<!DOCTYPE html>
<html>
    <head>
        <title>Tienda</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="css/style.css"  rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <h2>Iniciar sesión</h2>
        <div class="center">
            <table>
                <form action="validar_usuario.php" method="post">                
                    <label>Correo:</label>
                    <input class="login" type="correo" name="correo" required placeholder="Correo">

                    <label>Contraseña:</label>
                    <input class="login" type="password" name="contraseña" required placeholder="Contraseña">

                    <input  class="btn btn-info" role="button" type="submit" value="Aceptar">                                               
                </form>
            </table>
        </div>
    </body>
</html>
