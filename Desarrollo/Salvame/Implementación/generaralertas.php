<?php

//$longitud = $_posT['longp'];
require './conexion_bd.php';
$latitud = $_REQUEST['latitud'];
$longitud = $_REQUEST['longitud'];
// Ahora podemos operar con estas variables como con cualquier variable de PHP
if (!empty($latitud)) {
    $sql = "INSERT INTO marcador(latitud, longitud) VALUES (:latitud,:longitud)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':latitud', $latitud);
    $stmt->bindParam(':longitud', $longitud);
    if ($stmt->execute()) {
        // echo '<div class="alert alert-danger">ENVIO COORDS CORRECTO</div>';
        // header('Location: ./index.php');
    }
}
// if (!empty($categoria)) {
//     echo '<script>
// alert:("entro a guardar alerta");
// </script>';
//     guardaralertaanonima();
// }
// function recuperarIDMarcador()
// {
//     require './conexion_bd.php';
//     $sql = "SELECT MAX(id_marcador) AS ultimo FROM marcador";
//     $stmt = $conn->prepare($sql);
//     $invNum = $stmt->fetch(PDO::FETCH_ASSOC);
//     $idmarcador = $invNum['ultimo'];
// }
// function guardaralertaanonima()
// {
//     recuperarIDMarcador();
//     require './conexion_bd.php';
//     $sql = "INSERT INTO alerta(id_marcador,video_prueba,nombre_animal,
//     categoria_animal,fecha,descri_animal,descri_hechos) 
//     VALUES (:idmarcador,:evidencia,:nombre,:categoria,:fecha,:dec_hechos,:dec_animal,)";
//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(':idmarcador', $idmarcador);
//     $stmt->bindParam(':evidencia', $evidencia);
//     $stmt->bindParam(':nombre', $nombre);
//     $stmt->bindParam(':categoria', $categoria);
//     $stmt->bindParam(':fecha', $fecha);
//     $stmt->bindParam(':dec_hechos', $dec_hechos);
//     $stmt->bindParam(':dec_animal', $dec_animal);
// }
// // echo "<script>alert('${latitud}')</script>";;
// // 