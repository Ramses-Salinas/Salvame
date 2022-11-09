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
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>
    <link rel="stylesheet" href="estilos/estiloIU-03.css">
    <title>Bienvenido</title>
</head>

<body>
    <header>
        <div class="nav-logo">
            <a class="boton-logo" href="./index.php"><img src="./imagenes/logo_colores.png" alt="" /></a>
        </div>
        <div class="menu-cambia">
            <ul class="menu">
                <?php if (!empty($user)) : ?>
                <nav>
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
        <nav>
            <a class="boton" href="#">Iniciar Sesión</a>
        </nav>
    </header>

    <section>
        <h1>¡Bienvenido al módulo de alerta!</h1>
        <p>Sálvame le agradece su iniciativa de contribuir contra el tráfico
            ilegal de animales silvestres en el Perú, con su ayuda podremos
            disminuir estos actos ilícitos, impulsar y concientizar a los
            demás pero sobre todo darles la libertad que merecen estos animales </p>
        <div class="container">
                <div class="col-md-12 heroSlider-fixed">
                    <div class="overlay">
                    </div>
                    <div class="slider responsive">
                        <div>
                            <div class="cuadro">
                                <img src="/imagenes/GalleriaLoro.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="cuadro">
                                <img src="/imagenes/GalleriaZorro.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="cuadro">
                                <img src="/imagenes/standard_SERFOR_tráfico de monos_MG_0536.jpg.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="cuadro">
                                <img src="/imagenes/GalleriaLoro.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="cuadro">
                                <img src="/imagenes/GalleriaZorro.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="cuadro">
                                <img src="/imagenes/standard_SERFOR_tráfico de monos_MG_0536.jpg.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="anterior">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </div>
                    <div class="siguiente">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </div>
                </div>
            
        </div>


        <div class="boton">Vamos</div>
    </section>

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

    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
    <script src="/IU-03.js"></script>
</body>

</html>