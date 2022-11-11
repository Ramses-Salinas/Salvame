<?php
session_start();


require 'conexion_bd.php';
$message = '';
$fecha = '2000-12-15';
if (!empty($_POST["enviarSolicitud"])) {
    echo 'entro 1';
    if (empty($_POST["nombre"])             and empty($_POST["apellido"]) 
        and empty($_post["numDocumento"])   and empty($_post["distrito"])
        and empty($_POST["correo"])         and empty($_POST["celular"]) 
        and empty($_POST["sexo"])           and empty($_POST["archivoDNI"]) 
        and empty($_POST["archivoONG"]) ) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        echo 'entro 2';
         $sql = "INSERT INTO postulante(nombre,apellido_Pat,apellido_Mat, dni,direccion,fecha_Nac,sexo,correo,celular,archivo_dni,archivo_ong)
        values( :nombre, :apellido_pat, :apellido_mat ,:dni , :direccion, :fecha_nac, :sexo, :correo, :celular, :archivo_dni, :archivo_ong)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':apellido_pat', $_POST['apellido']);
        $stmt->bindParam(':apellido_mat', $_POST['apellido']);
        $stmt->bindParam(':dni', $_POST['numDocumento']);
        $stmt->bindParam(':direccion', $_POST['distrito']);
        $stmt->bindParam(':fecha_nac', $fecha);
        $stmt->bindParam(':sexo', $_POST['sexo']);
        $stmt->bindParam(':correo', $_POST['correo']);
        $stmt->bindParam(':celular', $_POST['celular']);
        $stmt->bindParam(':archivo_dni', $_POST['archivoDNI']);
        $stmt->bindParam(':archivo_ong', $_POST['archivoONG']);
        if ($stmt->execute()) {
            echo 'entro 3';
            echo '<div class="alert alert-danger">REGISTRO EXITOSO</div>';
            header('Location: ./index.php');
        } else {
            $message = 'Ocurrio un error en el registro del usuario';
            echo '<div class="alert alert-danger">Fallido</div>';
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
    <link rel="stylesheet" href="estilos/estilos-IU-12.css" />
    <title>Postular</title>
</head>

<body>
    <div class="ventana">

        <div class="parte-1">
            <h2>| Sálvame</h2>
            <a href="./index.php">Inicio</a>
            <!--SE PUDE MEHJORAR-->
            <div class="foto-perfil">
                <img id="view-new-upload-image" width="100%" height="100%" src="./imagenes/img-subir-foto.png" />
            </div>
        </div>

        <div class="parte-2">
            <form action="IU-12.php" method="POST" class="postular-form">
                <!-- IU-11 -->
                <div class="pagina movPag">
                    <h3>REGíSTRATE</h3>
                    <input type="text" name="nombre" id="user" placeholder="🙍 Nombre" />
                    <input type="text" name="apellido" id="user" placeholder="🙍 Apellido" />

                    <select name="" id="">
                        <option value=""> 📄 Tipo de documento</option>
                        <option value="DNI">DNI</option>
                        <option value="Carnet">Carnet de extranjería</option>
                    </select>
                    <input type="text" name="numDocumento" id="user" placeholder="#️⃣ Número de documento" />
                    <input type="text" name="distrito" id="user" placeholder="📍 Distrito" />
                    <input type="text" name="dirección" id="user" placeholder="🏠 Dirección" />
                    <input type="text" name="correo" id="user" placeholder="✉️ Correo electrónico" />
                    <input type="text" name="celular" id="user" placeholder="📞 Teléfono/Celular" />
                    <select name="sexo" id="">
                        <option value=""> ⚥ Sexo</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                    <input type="date" id="start" name="trip-start" min="1900-01-01" max="2004-12-31">
                    <input type="file" class="btn-img" name="avatar" id="avatar" />
                    <br />
                    <input type="button" class="sigPag2" value="Siguiente" />
                </div>

                <!-- IU-12 DOC DE IDENTIDAD -->
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
                        <input type="file" id="archivo" name="archivoDNI" placeholder=" Seleccionar archivo..." />
                        <!--ESTO SI SE WARDA A LA BD-->
                    </div>

                    <br>
                    <input type="button" class="antPag1" value="Anterior"
                        style="background-color: rgba(54,50,10,65%)" />
                    <input type="button" class="sigPag3" value="Siguiente" />
                </div>

                <!-- IU-13 CERTIFICADO ONG -->
                <div class="pagina">
                    <h3>CERTIFICADO ONG</h3>
                    <label for="nombre-doc">Nombre</label>
                    <input type="text" name="" id="nombre-doc" placeholder=" Certificado ONG" readonly />
                    <br>
                    <label for="desc-doc">Descripción</label>
                    <input type="text" id="desc-doc" placeholder=" Certificado original de evidencia"
                        readonly />

                    <div class="clase-archivo">
                        <div class="clase-nombre-archivo">
                            <p id="nombre-archivo-ong">Seleccionar archivo...</p>
                        </div>
                        <label id="label-archivo" for="archivo-ong">📁 Archivo</label>
                        <input type="file" name="archivoONG" id="archivo-ong" placeholder=" Seleccionar archivo..." />
                        <!--ESTO SI SE WARDA A LA BD-->
                    </div>
                    <br>
                    <input type="button" class="antPag2" value="Anterior"
                        style="background-color: rgba(54,50,10,65%)" />
                    <a href="#"> <input name="enviarSolicitud" type="submit" value="📤 Enviar Solicitud" /></a>
                </div>

            </form>

        </div>
    </div>
    <!-- para el archivo doc identidad -->
    <script type="text/javascript">
    let archivo = document.querySelector('#archivo');
    archivo.addEventListener('change', () => {
        document.querySelector('#nombre-archivo').innerText = archivo.files[0].name;
    });
    </script>
    <!-- para el archivo crtificado ONG -->
    <script type="text/javascript">
    let archivoOng = document.querySelector('#archivo-ong');
    archivoOng.addEventListener('change', () => {
        document.querySelector('#nombre-archivo-ong').innerText = archivoOng.files[0].name;
    });
    </script>
    <!-- para la foto de usuario -->
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
    <!--llamada del script movimiento-->
    <script src="./js/movimiento.js"></script>

</body>

</html>