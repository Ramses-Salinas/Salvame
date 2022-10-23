<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="imagenes/logo_colores.jpg" />
    <link rel="stylesheet" href="estilos/estiloregistrarse.css" />
    <title>Iniciar Sesión</title>
</head>

<body>
    <div class="ventana">
        <div class="parte-1">
            <h2>| Sálvame</h2>
            <a href="#">Inicio</a>
        </div>
        <div class="parte-2">
            <h3>REGíSTRATE</h3>
            <form action="" method="POST" class="register-form">
                <input id="correo" type="text" class="input" name="correo" placeholder="✉️ Correo electrónico" />
                <input id="input" type="password" class="input" name="password" placeholder="🔒 Contraseña" />
                <input id="input" type="password" class="input" name="password" placeholder="🔒Confirmar Contraseña" />
                <input id="nombre" type="text" class="input" name="nombre" placeholder="🙍Nombre y Apellidos" />
                <br />
                <input id="checkbox-1" type="checkbox" />
                <label for="checkbox-1">He leído y acepto los términos y condiciones de “Sálvame”</label>
                <br />
                <input id="checkbox-2" type="checkbox" />
                <label for="checkbox-2">Quiero recibir notificaciones de las alertas e información
                    relevante de la página</label>
                <br />
                <input type="submit" value="Registrarme
" />
            </form>
        </div>
    </div>
</body>

</html>