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
        <img src="imagenes/logo_colores.png" alt="" />
      </div>
      <nav>
        <a class="boton" href="#">Registrarme</a>
        <a class="boton" href="#">Iniciar Sesión</a>
      </nav>
    </header>
    <main>
      <div class="main-title">Informes</div>
      <section class="main-section-uno">

        <div class="select">
          <select name="" id="seleccionar" onchange="seleccionarOpcion();">
            <option value="Familia" >Familia</option>
            <option value="Especie" >Especie</option>
            <option value="Zona" >Zona</option>
          </select>
        </div>

        <div class="main-browser">
          <span class="icon-search"></span>
          <input
            class="main-browser__input"
            type="text"
            id="buscador" 
            placeholder="Filtrar por nombre"
          />
        </div>
        <!-- <button class="boton boton-buscar" id="btn">Buscar</button> -->
      </section>

      <section class="main-section-dos">
        <div class="card">
          <img src="./imagenes/TortugasInformes.jpg" alt="" />
          <div class="card-description">
            <div class="card__title">camello</div>
            <div class="card__datos">
              <div class="card__especie">Gusanos</div>
              <div class="card__fecha">
                <div class="card__zona">Arequipa/Tumbes</div>
                <div>17/10/2022</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="./imagenes/TortugasInformes.jpg" alt="" />
          <div class="card-description">
            <div class="card__title">mono</div>
            <div class="card__datos">
              <div class="card__especie">Reptiles</div>
              <div class="card__fecha">
                <div class="card__zona">Ayacucho/Tumbes</div>
                <div>17/10/2022</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="./imagenes/TortugasInformes.jpg" alt="" />
          <div class="card-description">
            <div class="card__title">tortuga</div>
            <div class="card__datos">
              <div class="card__especie">Mamíferos</div>
              <div class="card__fecha">
                <div class="card__zona">Tumbes/Tumbes</div>
                <div>17/10/2022</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="./imagenes/TortugasInformes.jpg" alt="" />
          <div class="card-description">
            <div class="card__title">cangrejo</div>
            <div class="card__datos">
              <div class="card__especie">Reptiles</div>
              <div class="card__fecha">
                <div class="card__zona">Tacna/Tumbes</div>
                <div>17/10/2022</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="./imagenes/TortugasInformes.jpg" alt="" />
          <div class="card-description">
            <div class="card__title">toro</div>
            <div class="card__datos">
              <div class="card__especie">Insectos</div>
              <div class="card__fecha">
                <div class="card__zona">Cajamarca/Tumbes</div>
                <div>17/10/2022</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="./imagenes/TortugasInformes.jpg" alt="" />
          <div class="card-description">
            <div class="card__title">caballo</div>
            <div class="card__datos">
              <div class="card__especie">Peces</div>
              <div class="card__fecha">
                <div class="card__zona">Cusco/Tumbes</div>
                <div>17/10/2022</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="./imagenes/TortugasInformes.jpg" alt="" />
          <div class="card-description">
            <div class="card__title">sapo</div>
            <div class="card__datos">
              <div class="card__especie">Arañas</div>
              <div class="card__fecha">
                <div class="card__zona">Lima/Tumbes</div>
                <div>17/10/2022</div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="./imagenes/TortugasInformes.jpg" alt="" />
          <div class="card-description">
            <div class="card__title">salamandra</div>
            <div class="card__datos">
              <div class="card__especie">Aves</div>
              <div class="card__fecha">
                <div class="card__zona">Loreto/Tumbes</div>
                <div>17/10/2022</div>
              </div>
            </div>
          </div>
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
            <a href="#"
              ><img src="imagenes/icons8-facebook-f-24.png" alt=""
            /></a>
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
