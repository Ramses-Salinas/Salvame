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
if (!empty($_POST["Anonima"])) {
    echo '<script>console.log("boton anonimo")</script>';
}
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estiloIU-04.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Modulo Alerta</title>
</head>

<body>
    <header>
        <div class="nav-logo">
            <a class="boton-logo" href="./index.php"><img src="./imagenes/logo_colores.png" alt="" /></a>
            <!-- <button>
                <img src="imagenes/logo_colores.png" alt="" href="./index.php" />
            </button> -->
        </div>
        <!-- <nav>
            <a class="boton" href="./registrarse.php">Registrarme</a>
            <a class="boton" href="./iniciarsesion.php">Iniciar Sesión</a>
        </nav> -->
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
    <section>
        <h1>Módulo de Alerta</h1>
        <form action="./generaralertas.php" class="form" method="post" enctype="multipart/form-data">
            <!-- Barra de Progreso -->
            <div class="barraDeProgreso">
                <div class="progreso" id="progreso"></div>
                <div class="paso-progreso paso-progreso-activo" data-tittle="Evidencia"></div>
                <div class="paso-progreso" data-tittle="Información"></div>
                <div class="paso-progreso" data-tittle="Ubicación"></div>
                <div class="paso-progreso" data-tittle="Tipo"></div>
            </div>

            <!-- Pasos -->
            <!-- Paso 1  -->
            <div class="paso-formulario paso-formulario-activo">
                <div class="contenedor">
                    <div class="borde">
                        <div class="nube-contenedor">
                            <img src="imagenes/nube.png" alt="">
                        </div>
                        <div class="texto" id="nombre_archivo">Suelte el archivo aquí o
                        </div>
                        <div class="boton-archivo">
                            <label for="Capturar">
                                Capturar
                                <input type="file" id="Capturar" name="Evidencia" />
                            </label>
                        </div>
                    </div>
                    <img src="imagenes/fondo.png" alt="">
                </div>
                <div class="botones">
                    <a href="#" class="boton boton-siguiente">Siguiente</a>
                </div>
            </div>
            <!-- Paso 2  -->
            <div class="paso-formulario">
                <div class="contenedor" id="contenedor2">
                    <form>
                        <section class="categoria">
                            <h3>Selecciona una categoria</h3>
                            <select class="categoria" id="categoria" name="categoria">
                                <option>Opción 1</option>
                                <option>Opción 2</option>
                                <option>Opción 3</option>
                                <option>Opción 4</option>
                                <option>Opción 5</option>
                                <option>Opción 6</option>
                                <option>Opción 7</option>
                            </select>
                        </section>
                        <div class="solucion">
                            <section class="descripciones">
                                <div class="tituDescripcion izq">
                                    <p>Describir el animal afectado <img id="imagen1" src="imagenes/escribir.png"
                                            alt=""></p>
                                </div>
                                <div class="tituDescripcion der">
                                    <p>Describir los hechos <img id="imagen2" src="imagenes/escribir.png" alt=""></p>
                                </div>
                                <div class="campoDes">
                                    <textarea rows="15" maxlength="500" cols="40" name="dec_hechos"></textarea>
                                </div>
                                <div class="campoDes">
                                    <textarea rows="15" cols="40" maxlength="500" name="dec_animal"></textarea>
                                </div>
                                <img class="fondoDiv" src="imagenes/fondo.png" alt="">
                            </section>
                        </div>
                    </form>
                </div>
                <div class="botones">
                    <a href="#" class="boton boton-anterior">Anterior</a>
                    <a href="#" class="boton boton-siguiente">Siguiente</a>
                </div>
            </div>
            <!-- Paso 3  -->
            <div class="paso-formulario">
                <div class="contenedor" id="contenedor3">
                    <section class="seccion3" id="mapa">
                        <div id="mapDiv"></div>
                        <script>
                        let map;
                        let marker;
                        let watchID;
                        let geoLoc;
                        let latitud;
                        let longitud;

                        //const botonAnterior = document.querySelectorAll(".boton-capturar");
                        function initMap() {
                            const LatLng = {
                                lat: -12.034662170145047,
                                lng: -77.04546861557782
                            }
                            map = new google.maps.Map(document.getElementById("mapDiv"), {
                                center: LatLng,
                                zoom: 10,
                            });
                            marker = new google.maps.Marker({
                                position: LatLng,
                                map,
                                draggable: true,
                                title: "Marcador prueba"
                            });
                            getPosition();
                            // javascript_to_php();
                        }

                        function getPosition() {
                            //si el navegador soporta la geolocalizacion
                            if (navigator.geolocation) {
                                //cantidad de milisegundos en la que se tarda para ejecutar la funcion asiganda
                                var options = {
                                    tiemout: 60000
                                };
                                //devuelve un objeto geolocation que proporciona acceso web a la ubciacion del dispositivo
                                geoLoc = navigator.geolocation;
                                //watchPosition ejecuta la funcion asiganda showLocationOnMap 
                                watchID = geoLoc.watchPosition(showLocationOnMap, errorHandler, options);
                            } else {
                                alert("El navegador no soporta la geolocalización");
                            }
                        }

                        function showLocationOnMap(position) {
                            latitud = position.coords.latitude;
                            longitud = position.coords.longitude;
                            console.log("latitud: " + latitud + "Longitud: " + longitud);

                            const LatLng = {
                                lat: latitud,
                                lng: longitud
                            };
                            marker.setPosition(LatLng);
                            map.setCenter(LatLng);
                        }

                        function errorHandler() {
                            if (errorHandler.code == 1) {
                                alert("Error: Acceso denegado");
                            } else if (errorHandler.code == 2) {
                                alert("Error: No se ecnuentra la posicion");

                            }
                        }

                        function js_to_php_coords() {
                            latitud = marker.getPosition().lat();
                            longitud = marker.getPosition().lng();
                            $(document).ready(function() {
                                var latp = latitud;
                                var lonp = longitud;
                                //alert(latitud + longitud);
                                $("#dibujo").load("generaralertas.php", {
                                    latitud,
                                    longitud
                                });
                            });
                        }
                        window.initMap = initMap;
                        document.addEventListener("DOMContentLoaded", function() {
                            function capturarUbicación() {
                                latitud = marker.getPosition().lat();
                                longitud = marker.getPosition().lng();
                                var cadena = `Latitud: ${latitud}<br>Longitud: ${longitud}`;
                                document.getElementById("resultado-ubicacion").innerHTML =
                                    `<p>${cadena}</p>`;
                            }

                            document.getElementById("dibujo").onclick = function() {
                                capturarUbicación();
                                js_to_php_coords();

                            }
                        })
                        </script>

                        <script async
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFwt7lkRXa-tIUzTvzxhUlEq5nmHO_Ui0&callback=initMap"
                            defer>
                        </script>
                    </section>
                    <section class="seccion3" id="opcionesMapa">
                        <article class="opcionesMap">
                            <p>Ubicación </p>
                            <p id="resultado-ubicacion" style="color:#FCFCFC"><b>Resultado ubicación</b></p>
                        </article>
                        <article class="opcionesMap">
                            <a href="#" id="capturarUbicacion">
                                <form action="generaralertas.php" method="POST">
                                    <input type="text" name="latitud" id="latitud" value="">
                                    <input type="text" name="longitud" id="longitud" value="">

                                </form>
                                <div id="dibujo">
                                    <div class="dibujo" id="arriba"> </div>
                                    <div class="dibujo" id="centro"></div>
                                    <div class="dibujo" id="abajo"></div>
                                </div>
                            </a>
                            <p style="color:#FCFCFC"><b>CAPTURAR</b></p>
                        </article>
                        <article class="opcionesMap"></article>
                    </section>
                </div>
                <div class="botones">
                    <a href="#" class="boton boton-anterior">Anterior</a>
                    <a href="#" class="boton boton-siguiente">Siguiente
                        <!-- <input name="btncoord" class="btn" type="submit"
                            value="Siguiente" formaction="moduloAlerta.php"> -->
                    </a>

                </div>
            </div>
            <!-- Paso 4  -->
            <div class="paso-formulario">
                <div class="contenedor" id="contenedor4">
                    <div class="solucion">
                        <section class="descripciones">
                            <div id="enunciado">
                                <p>Le gustaria que su alerta sea:</p>
                            </div>

                            <div class="eleccion">
                                <p><input type="submit" value="Anonima" name="Anonima" id="Anonima"> Anonima</p>
                                <?php
                                echo '<script>alert:("entro a guardar alerta");s</script>' ?>
                            </div>

                            <div class="eleccion">
                                <a class="btn" id="priv" href="./IU-10.php">
                                    <p><input type="submit" value="Publica">Pública</p>
                                </a>
                            </div>
                            </a>
                            <img class="fondoDiv" id="fin" src="imagenes/fondo.png" alt="">
                        </section>
                    </div>
                </div>
                <div class="botones">
                    <a href="#" class="boton boton-anterior">Anterior</a>
                    <a href="./index.php" class="boton boton-finalizar">Finalizar</a>
                </div>
            </div>
        </form>

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
    <script src="./js/IU-04.js" defer></script>

    <script type="text/javascript">
    let archivo = document.querySelector('#Capturar');
    archivo.addEventListener('change', () => {
        document.querySelector('#nombre_archivo').innerText = archivo.files[0].name;
    });
    </script>

</body>

</html>