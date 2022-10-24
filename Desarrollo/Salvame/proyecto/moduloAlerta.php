<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estiloIU-04.css" />
    <title>Modulo Alerta</title>
</head>

<body>
    <header>
        <div class="nav-logo">
            <img src="imagenes/logo_colores.png" alt="" />
        </div>
        <nav>
            <a class="boton" href="./IU-10.html">Registrarme</a>
            <a class="boton" href="./iniciarsesion.php">Iniciar Sesión</a>
        </nav>
    </header>
    <section>
        <h1>Módulo de Alerta</h1>
        <form action="#" class="form">
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
                        <div class="texto">Suelte el archivo aquí o
                        </div>
                        <div class="boton-archivo">
                            <label for="Capturar">
                                Capturar
                                <input type="file" id="Capturar" />
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
                            <select class="categoria" id="categoria">
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
                                    <textarea rows="15" maxlength="500" cols="40"></textarea>
                                </div>
                                <div class="campoDes">
                                    <textarea rows="15" cols="40" maxlength="500"></textarea>
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

                    </section>
                    <section class="seccion3" id="opcionesMapa">
                        <article class="opcionesMap">
                            <p>Ubicación </p>
                            <p style="color:#FCFCFC"><b>Resultado ubicación</b></p>
                        </article>
                        <article class="opcionesMap">
                            <a href="#" id="capturarUbicacion">
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
                    <a href="#" class="boton boton-siguiente">Siguiente</a>
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
                                <a href="#">
                                    <p>Anónima</p>
                                </a>
                            </div>

                            <div class="eleccion">
                                <a href="#">
                                    <p>Pública</p>
                                </a>
                            </div>
                            </a>
                            <img class="fondoDiv" id="fin" src="imagenes/fondo.png" alt="">
                        </section>
                    </div>
                </div>
                <div class="botones">
                    <a href="#" class="boton boton-anterior">Anterior</a>
                    <a href="./Index.html" class="boton boton-finalizar">Finalizar</a>
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
    <script src="IU-04.js" defer></script>
</body>

</html>