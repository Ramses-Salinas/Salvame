<?php
session_start();

if (isset($_SESSION['id_usuario'])) {
    header('Location: ./index.php');
}
require 'conexion_bd.php';
$message = '';
$fecha = '2000-12-15';
if (!empty($_POST["btnregister"])) {
    if (empty($_POST["correo"]) and empty($_POST["password"]) and empty($_post["password2"]) and empty($_post["nombre"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    } else if ($_POST["password"] != $_POST["password2"]) {
        echo '<div class="alert alert-danger">LAS CONTRASEÑAS NO COINCIDEN</div>';
    } else if (isset($_POST["checkbox-terminos"]) && $_POST["checkbox-terminos"] != "1") {
        echo '<div class="alert alert-danger">ACEPTA LOS TERMINOS Y CONDICIONES</div>';
    } else {
        if (isset($_POST["checkbox-terminos"]) && $_POST["checkbox-terminos"] == "1") {
            $notificaciones = '1';
        } else {
            $notificaciones = '0';
        }
        $sql = "INSERT INTO usuario(nombre,correo,contrasenia,fecha_nac,notificacion)
        values( :nombre, :correo, :password2 ,:fecha_nac , :notificacion)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':correo', $_POST['correo']);
        $stmt->bindParam(':password2', $_POST['password2']);
        $stmt->bindParam(':fecha_nac', $fecha);
        $stmt->bindParam(':notificacion', $notificaciones);
        if ($stmt->execute()) {
            echo '<div class="alert alert-danger">REGISTRO EXITOSO</div>';
            header('Location: ./index.php');
        } else {
            $message = 'Ocurrio un error en el registro del usuario';
        }
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
    <link rel="stylesheet" href="estilos/estiloregistrarse.css" />
    <title>Registrarse</title>
</head>

<body>
    <div class="ventana">
        <div class="parte-1">
            <h2>| Sálvame</h2>
            <a href="./index.php">Inicio</a>
        </div>
        <div class="parte-2">
            <h3>REGíSTRATE</h3>
            <form action="registrarse.php" method="POST" class="register-form">
                <input id="correo" type="text" class="input" name="correo" placeholder="✉️ Correo electrónico" />
                <input id="password" type="password" class="input" name="password" placeholder="🔒 Contraseña" />
                <input id="password2" type="password" class="input" name="password2"
                    placeholder="🔒Confirmar Contraseña" />
                <input id="nombre" type="text" class="input" name="nombre" placeholder="🙍Nombre y Apellidos" />
                <br />
                <input id="checkbox-terminos" type="checkbox" name="checkbox-terminos" value="1" />
                <label for="checkbox-terminos">He leído y acepto los términos y condiciones de “Sálvame”</label>
                <br />
                <input id="checkbox-notificaciones" type="checkbox" name="checkbox-notificaciones" value="1" />
                <label for="checkbox-notificaciones">Quiero recibir notificaciones de las alertas e información
                    relevante de la página</label>
                <br />
                <input name="btnregister" class="btn" type="submit" value="Registrarme
" />
                <?php
                if (!empty($message)) : ?>
                <p><?= $message ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>

</html>