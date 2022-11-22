<?php
function ultimaALERTA()
{
    $conexion = mysqli_connect("localhost", "root", "50bb11b76", "salvame");
    $sql = "INSERT INTO alerta(id_marcador) VALUE ('46')";
    $result1 = mysqli_query($conexion, $sql);
    $last_id = $conexion->insert_id;
    $sql2 = "DELETE FROM alerta WHERE id_alerta='{$last_id}'";
    $result2 = mysqli_query($conexion, $sql2);
    $last_id = $last_id - 1;
    return $last_id;
}
if (!empty($_POST['añadir'])) {
    $conexion = mysqli_connect("localhost", "root", "50bb11b76", "salvame");
    $idalerta = ultimaALERTA();
    $nombre = $_POST['Nombres'] . " " . $_POST['Apellidos'];
    $dni = $_POST['dni'];
    $correo = $_POST['correo'];
    // if (isset($_POST['notificaciones']) && $_POST['notificaciones'] == "1") {
    //     $notificaciones = '1';
    // } else {
    //     $notificaciones = '0';
    // }
    $sql2 = "UPDATE alerta set nombre='{$nombre}', dni='{$dni}',correo='{$correo}' where id_alerta='{$idalerta}'";
    $result2 = mysqli_query($conexion, $sql2);
    header('./index.php');
}
?>
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
            <form action="" method="post">
                <input type="text" name="correo" id="user" placeholder="✉️ Correo electrónico" />
                <select name="" id="">
                    <option value=""> 📄Tipo de documento</option>
                    <option value="DNI">DNI</option>
                    <option value="Carnet">Carnet de extranjería</option>
                </select>
                <input type="text" name="dni" id="dni" placeholder="📄 Número de documento" />
                <button type="button" id="buscar" class="btn btn-dark">Buscar</button>
                <input type="text" name="Nombres" id="Nombres" />
                <input type="text" name="Apellidos" id="Apellidos" />
                <br />
                <input id="checkbox-1" type="checkbox" />
                <label for="checkbox-1">He leído y acepto los términos y condiciones de “Sálvame”</label>
                <br />
                <input id="checkbox-2" type="checkbox" name="notificaciones" />
                <label for="checkbox-2">Quiero recibir notificaciones de las alertas e información
                    relevante de la página</label>
                <br />
                <input type="submit" name="añadir">
                <!-- <input type="submit" value="Añadir" href="./index.php" />-->
                </input>
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