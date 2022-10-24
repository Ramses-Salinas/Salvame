<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="imagenes/logo_colores.jpg" />
    <link rel="stylesheet" href="estilos/estiloIU-10.css" />
    <title>Datos Personales</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="ventana">
        <div class="parte-1">
            <h2>| Sálvame</h2>
            <a href="./index.php">Inicio</a>
        </div>
        <div class="parte-2">
            <h3>DATOS PERSONALES</h3>
            <form action="">
                <input type="text" name="" id="user" placeholder="✉️ Correo electrónico" />
                <select name="" id="">
                    <option value=""> 📄Tipo de documento</option>
                    <option value="DNI">DNI</option>
                    <option value="Carnet">Carnet de extranjería</option>
                </select>
                <input type="text" name="" id="dni" placeholder="📄 Número de documento" />
                <button type="button" id="buscar" class="btn btn-dark">Buscar</button>
                <input type="text" name="" id="Nombres" />
                <input type="text" name="" id="Apellidos" />
                <br />
                <input id="checkbox-1" type="checkbox" />
                <label for="checkbox-1">He leído y acepto los términos y condiciones de “Sálvame”</label>
                <br />
                <input id="checkbox-2" type="checkbox" />
                <label for="checkbox-2">Quiero recibir notificaciones de las alertas e información
                    relevante de la página</label>
                <br />
                <br />
                <a class="añadir" href="./index.php">Añadir
                    <!-- <input type="submit" value="Añadir" href="./index.php" />-->
                </a>
            </form>
        </div>
    </div>
</body>
<script>
$('#buscar').click(function() {
    dni = $('#dni').val();
    $.ajax({
        type: 'post',
        url: 'controlador/consultadni.php',
        data: 'dni=' + dni,
        dataType: 'json',
        success: function(r) {
            if (r.numeroDocumento == dni) {
                $('#Apellidos').val(r.apellidoPaterno + " " + r.apellidoMaterno);
                $('#Nombres').val(r.nombres);
            } else {
                alert('error');
            }
        }
    });
});
</script>

</html>