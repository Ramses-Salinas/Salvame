<?php
session_start();

require './conexion_bd.php';

if (isset($_SESSION['id_usuario'])) {
    //echo $_SESSION['id_usuario'];
    $records = $conn->prepare('SELECT id_usuario, correo, contrasenia FROM usuario WHERE id_usuario = :id_usuario');
    $records->bindParam(':id_usuario', $_SESSION['id_usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;
    /*comprobando que no esta vacio*/
    if (count($results) > 0) {
        $user = $results;
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
    <link rel="stylesheet" href="estilos/estiloinicio.css" />
    <title>Sálvame</title>
</head>

<body>

    <header>
        <div class="nav-logo">
            <img src="imagenes/logo_colores.png" alt="" />
        </div>
        <div class="menu-cambia">
            <ul class="menu">
                <?php if (!empty($user)) : ?>
                <nav>
                    <!-- <a href="./index.php"><img class="logo-Salvame" src="./imagenes/logo_colores.jpg"
                            alt="logo-salvame"></a> -->
                    <a class="boton" href="./cerrarsesion.php">Cerrar Sesion</a>
                </nav>
                <?php else : ?>
                <nav>
                    <a class="boton" href="registrarse.php">Registrarme</a>
                    <a class="boton" href="iniciarsesion.php">Iniciar Sesión</a>
                </nav>
                <?php endif; ?>
            </ul>
        </div>
    </header>
    <div class="hoja-1">
        <div class="texto-1">
            <h1 class="titulo-1">Sálvame</h1>
            <p class="parrafo-1">
                Es una plataforma de concientización sobre el tráfico ilegal de fauna
                silvestre en todo el perú
            </p>
        </div>
        <div>
            <img src="./imagenes/Salvame.png" alt="" />
        </div>
    </div>

    <div class="menu-opcion">
        <div class="menu-opcion1">
            <a class="imagen-texto" href="./bienvenido.php"><img src="./imagenes/alerta.png" alt="" /> Realizar
                Alerta</a>
            <a class="imagen-texto" href="#"><img src="./imagenes/verAlertas.png" alt="" /> Ver Alertas</a>
            <a class="imagen-texto" href="#"><img src="./imagenes/noun-documents-103655.png" alt="" /> Mis
                informes</a>
        </div>

        <div class="menu-opcion2">
            <a class="imagen-texto" href="./IU-12.php"><img src="./imagenes/noun-candidate-1127322.png" alt="" />
                Postular a
                Moderador</a>
            <a class="imagen-texto" href="#"><img src="./imagenes/noun-subscribe-3786433.png" alt="" /> ¿Por qué
                Suscribirme a Sálvame?</a>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div>
                <div class="nav-logo">
                    <img src="imagenes/logo_colores.png" alt="" />
                </div>
                <ul class="integrantes">
                    <li>Alata Gutierrez, Rodolfo</li>
                    <li>Camana Huapaya, Ariana</li>
                    <li>Ccanto Flores, Rosmeri</li>
                    <li>Mitac Saavedra, Milena Diana</li>
                    <li>Rivera Inche, Erly</li>
                    <li>Rosas Sequeiros, Fabricio</li>
                    <li>Salinas Mejías, Ramses</li>
                </ul>
                <div class="redes">
                    <a href="#"><img src="imagenes/icons8-facebook-f-24.png" alt="" /></a>
                    <a href="#"><img src="imagenes/instagram.png" alt="" /></a>
                    <a href="#"><img src="imagenes/gorjeo.png" alt="" /></a>
                </div>
            </div>
            <div>
                <h4>Nosotros</h4>
                <ul class="footer-datos">
                    <li><a href="#">¿Por qué Suscribirme a Sálvame?</a></li>
                </ul>
            </div>
            <div>
                <h4>Información</h4>
                <ul class="footer-datos">
                    <li><a href="#">Ver Alertas</a></li>
                </ul>
            </div>
            <div>
                <h4>Únete</h4>
                <ul class="footer-datos">
                    <li><a href="#">Postular a Moderador</a></li>
                </ul>
            </div>
        </div>
        <p>© 2022 Sálvame. ALL RIGHT RESERVED.</p>
    </footer>
</body>

</html>