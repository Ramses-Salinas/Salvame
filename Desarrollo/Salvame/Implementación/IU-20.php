<?php
session_start();

require './conexion_bd.php';
if (isset($_SESSION['id_usuario'])) {
  $records = $conn->prepare('SELECT id_usuario, correo, contrasenia FROM usuario WHERE id_usuario = :id_usuario');
  $records->bindParam(':id_usuario', $_SESSION['id_usuario']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  $user = null;
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
    <link rel="stylesheet" href="estilos/estiloIU-20.css" />
    <title>Sálvame</title>
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
    </header>
    <main>
        <div class="main-title">Informes</div>
        <section class="main-section-uno">
            <div class="select">
                <select name="" id="seleccionar" onchange="seleccionarOpcion();">
                    <option value="Familia">Familia</option>
                    <option value="Nombre">Nombre</option>
                    <option value="Zona">Zona</option>
                </select>
            </div>

            <div class="main-browser">
                <span class="icon-search"></span>
                <input class="main-browser__input" type="text" id="buscador" placeholder="Filtrar por nombre" />
            </div>
            <!-- <button class="boton boton-buscar" id="btn">Buscar</button> -->
        </section>

        <section class="main-section-dos">
            <div class="card">
                <a class="link" href="IU-21-1.php"><img src="imagenes/RanaPortada.jpg" alt="" />
                    <div class="card-description">
                        <div class="card__title">Rana gigante del lago Titicaca</div>
                        <div class="card__datos">
                            <div class="card__especie">Telmatobiinae</div>
                            <div class="card__fecha">
                                <div class="card__zona">Puno/Puno</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a class="link" href="IU-21-2.php"><img src="imagenes/DelfinRosado.jpg" alt="" />
                    <div class="card-description">
                        <div class="card__title">Delfín rosado</div>
                        <div class="card__datos">
                            <div class="card__especie">Iniidae</div>
                            <div class="card__fecha">
                                <div class="card__zona">Iquitos/Loreto</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a class="link" href="IU-21-3.php"><img src="imagenes/MonoChoro.jpg" alt="" />
                    <div class="card-description">
                        <div class="card__title">Mono choro de cola amarilla</div>
                        <div class="card__datos">
                            <div class="card__especie">Atelidae</div>
                            <div class="card__fecha">
                                <div class="card__zona">Moyobamba/San Martín</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a class="link" href="IU-21-4.php"><img src="imagenes/ZorroRunRun.jpg" alt="" />
                    <div class="card-description">
                        <div class="card__title">Zorro andino "run run"</div>
                        <div class="card__datos">
                            <div class="card__especie">Atelidae</div>
                            <div class="card__fecha">
                                <div class="card__zona">Cajamarca/Cajamarca</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a class="link" href="IU-21-5.php"><img src="imagenes/Gibon.jpg" alt="" />
                    <div class="card-description">
                        <div class="card__title">Gibón plateado</div>
                        <div class="card__datos">
                            <div class="card__especie">Hylobatidae</div>
                            <div class="card__fecha">
                                <div class="card__zona">Chachapoyas/Amazonas</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a class="link" href="IU-21-6.php"><img src="imagenes/Felino.jpg" alt="" />
                    <div class="card-description">
                        <div class="card__title">Jaguar</div>
                        <div class="card__datos">
                            <div class="card__especie">Felidae</div>
                            <div class="card__fecha">
                                <div class="card__zona">Iquitos/Loreto</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a class="link" href="IU-21-7.php"><img src="imagenes/Tortuga.jpg" alt="" />
                    <div class="card-description">
                        <div class="card__title">Tortugas motelo</div>
                        <div class="card__datos">
                            <div class="card__especie">Testudinidae</div>
                            <div class="card__fecha">
                                <div class="card__zona">Chachapoyas/Amazonas</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a class="link" href="IU-21-8.php"><img src="imagenes/Loro.jpg" alt="" />
                    <div class="card-description">
                        <div class="card__title">Cotorra de Hocking</div>
                        <div class="card__datos">
                            <div class="card__especie">Psittacidae</div>
                            <div class="card__fecha">
                                <div class="card__zona">Chachapoyas/Amazonas</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <img src="./imagenes/TortugasInformes.jpg" alt="" />
                <div class="card-description">
                    <div class="card__title">leon</div>
                    <div class="card__datos">
                        <div class="card__especie">Reptiles</div>
                        <div class="card__fecha">
                            <div class="card__zona">Puno/Tumbes</div>
                            <div>17/10/2022</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <p id="mensaje"> NO SEENCONTRO NINGUN ELEMENTO CON ESOS ATRIBUTOS </p> -->
    </main>
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
    <script src="js/IU-20.js"></script>
</body>

</html>