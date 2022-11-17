<?php
session_start();
/* Si la $_SESSION tiene un id dentro
entonces nos dirige al index*/
if (isset($_SESSION['id_usuario'])) {
    header('Location: ./index.php');
}
/*requiere la conexion a la bd para confirmar las credenciales*/
require './conexion_bd.php';
/*verifica que no este vacio lo que se envia*/
if (!empty($_POST['correo']) && !empty($_POST['contrasenia'])) {
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];
    $records = $conn->prepare('SELECT id_usuario, correo, contrasenia FROM usuario WHERE correo = :correo');
    $records->bindParam(':correo', $_POST['correo']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = ' ';
    // echo $results['contrasenia'];
    // echo $_POST['contrasenia'];
    if (!empty($results) && (strcmp($_POST['contrasenia'], $results['contrasenia'])) == 0) {
        $_SESSION['id_usuario'] = $results['id_usuario'];
        header("Location: ./index.php");
    } else {
        $message = 'Lo sentimos, esas credenciales no coinciden';
    }
}

?>

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
    <?php require 'partials/header.php' ?>
    <div class="ventana">
        <div class="parte-1">
            <h2>| Sálvame</h2>
            <a href="./index.php">Inicio</a>
        </div>
        <div class="parte-2">
            <h3>INICIAR SESIÓN</h3>
            <?php
            if (!empty($message)) : ?>
            <p><?= $message ?></p>
            <?php endif; ?>
            <form class="login-form" method="post" action="iniciarsesion.php">
                <input id="correo" type="text" class="input" name="correo" placeholder="✉️ Correo electrónico" />
                <input id="contrasenia" type="password" class="input" name="contrasenia" placeholder="🔒 Contraseña" />
                <input name="btnlogin" class="btn" type="submit" value="Ingresar" />
            </form>
        </div>
    </div>
</body>

</html>