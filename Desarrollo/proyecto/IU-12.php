<?php

session_start();
/* Si la $_SESSION tiene un id dentro
entonces nos dirige al index*/
if (!isset($_SESSION['id_usuario'])) {
}










?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="imagenes/logo_colores.jpg" />
    <link rel="stylesheet" href="estilos/estilos-IU-12.css" />
    <title>Postular</title>
</head>

<body>
    <div class="ventana">

        <div class="parte-1">
            <h2>| Sálvame</h2>
            <a href="./index.php">Inicio</a>
        </div>


        <div class="parte-2">
            <form action="">
                <!-- DIV DE ARIANAAA-->
                <div class="pagina movPag">
                    <h3>REGíSTRATE</h3>
                    <input type="text" name="" id="user" placeholder="🙍 Nombre" />
                    <input type="text" name="" id="user" placeholder="🙍 Apellido" />

                    <select name="" id="">
                        <option value=""> 📄 Tipo de documento</option>
                        <option value="DNI">DNI</option>
                        <option value="Carnet">Carnet de extranjería</option>
                    </select>
                    <input type="text" name="" id="user" placeholder="#️⃣ Número de documento" />
                    <input type="text" name="" id="user" placeholder="📍 Distrito" />
                    <input type="text" name="" id="user" placeholder="🏠 Dirección" />
                    <input type="text" name="" id="user" placeholder="✉️ Correo electrónico" />
                    <input type="text" name="" id="user" placeholder="📞 Teléfono/Celular" />
                    <select name="" id="">
                        <option value=""> ⚥ Sexo</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                    <input type="date" id="start" name="trip-start" min="1900-01-01" max="2004-12-31">
                    <input type="file" class="btn-img" name="avatar" id="avatar" />
                    <br />
                    <input type="button" class="sigPag2" value="Siguiente" />
                </div>

                <!-- PARA DOCUMENTO DE IDENTIDAD -->
                <div class="pagina">
                    <h3>DOCUMENTO DE IDENTIDAD</h3>
                    <label id="label-nombre" for="nombre-doc">Nombre</label>
                    <input type="text" name="" id="nombre-doc" placeholder=" Documento de Identidad" readonly />
                    <br>
                    <label for="desc-doc">Descripción</label>
                    <input type="text" name="" id="desc-doc" placeholder=" Documento Nacional de Identidad" readonly />

                    <div class="clase-archivo">
                        <div class="clase-nombre-archivo">
                            <p id="nombre-archivo">Seleccionar archivo...</p>
                        </div>
                        <label id="label-archivo" for="archivo">📁 Archivo</label>
                        <input type="file" id="archivo" placeholder=" Seleccionar archivo..." />
                        <!--ESTO SI SE WARDA A LA BD-->
                    </div>

                    <br>
                    <input type="button" class="antPag1" value="Anterior"
                        style="background-color: rgba(54,50,10,65%)" />
                    <input type="button" class="sigPag3" value="Siguiente" />
                </div>

                <!-- PARA CERTIFICADO ONG -->
                <div class="pagina">
                    <h3>CERTIFICADO ONG</h3>
                    <label for="nombre-doc">Nombre</label>
                    <input type="text" name="" id="nombre-doc" placeholder=" Certificado ONG" readonly />
                    <br>
                    <label for="desc-doc">Descripción</label>
                    <input type="text" name="" id="desc-doc" placeholder=" Certificado original de evidencia"
                        readonly />

                    <div class="clase-archivo">
                        <div class="clase-nombre-archivo">
                            <p id="nombre-archivo-ong">Seleccionar archivo...</p>
                        </div>
                        <label id="label-archivo" for="archivo-ong">📁 Archivo</label>
                        <input type="file" id="archivo-ong" placeholder=" Seleccionar archivo..." />
                        <!--ESTO SI SE WARDA A LA BD-->
                    </div>
                    <br>
                    <input type="button" class="antPag2" value="Anterior"
                        style="background-color: rgba(54,50,10,65%)" />
                    <a href=""><input type="submit" value="📤 Enviar Solicitud" /></a>
                </div>

            </form>

        </div>
    </div>
    <script type="text/javascript">
    let archivo = document.querySelector('#archivo');
    archivo.addEventListener('change', () => {
        document.querySelector('#nombre-archivo').innerText = archivo.files[0].name;
    });
    </script>
    <script type="text/javascript">
    let archivoOng = document.querySelector('#archivo-ong');
    archivoOng.addEventListener('change', () => {
        document.querySelector('#nombre-archivo-ong').innerText = archivoOng.files[0].name;
    });
    </script>
    <script>
    function openFileSelector() {
        let inputFile = document.getElementById("avatar");

        if (inputFile) {
            inputFile.click();
        }
    }

    function changeImagePreview() {
        let inputFile = document.getElementById("avatar");
        let showImage = document.getElementById("view-new-upload-image");
        if (inputFile) {
            let reader = new FileReader();

            reader.onload = function() {
                showImage.src = reader.result;
            };

            if (inputFile && inputFile.files && inputFile.files.length) {
                reader.readAsDataURL(inputFile.files[0]);
            }
        }
    }

    function assignImageChangeInput(idImg, idInput, idBtn = null) {
        let inputFile = document.getElementById(idInput);
        let showImage = document.getElementById(idImg);
        inputFile.addEventListener("change", changeImagePreview);
        showImage.addEventListener("click", openFileSelector);
        if (idBtn) {
            let btn = document.getElementById(idBtn);
            btn.addEventListener("click", openFileSelector);
        }
    }
    window.document.addEventListener("DOMContentLoaded", () => {
        assignImageChangeInput(
            "view-new-upload-image",
            "avatar",
            "btn-open-file-selector"
        );
    });
    </script>
    <script src="./js/movimiento.js"></script>

</body>

</html>