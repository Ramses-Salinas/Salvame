<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="imagenes/logo_colores.jpg" />
    <link rel="stylesheet" href="estilos/estiloiniciarsesion.css" />
    <title>Iniciar Sesión</title>
</head>

<body>
    <div class="ventana">
        <div class="parte-1">
            <h2>| Sálvame</h2>
            <a href="#">Inicio</a>
        </div>
        <div class="parte-2">
            <h3>INICIAR SESIÓN</h3>
            <?php 
        include("./modelo/conexion_bd.php");
        include("./controlador/controlador.php");
        ?>
            <form class="login-form" method="post" action="">
                <input id="usuario" type="text" class="input" name="usuario" placeholder="✉️ Correo electrónico" />
                <input id="input" type="password" class="input" name="password" placeholder="🔒 Contraseña" />
                <input name="btnlogin" class="btn" type="submit" value="Ingresar" />
            </form>
        </div>
    </div>
</body>

</html>