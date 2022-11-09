<?php
$conn = mysqli_connect("localhost", "root", "50bb11b76", "salvame");
if (isset($_POST['enviar'])) {
    $generateid = 1;
    $imgData = addslashes(file_get_contents($_FILES['Evidencia']['tmp_name']));
    $images = "INSERT INTO prueba (id, imagen) VALUE ('$generateid','{$imgData}')";
    $result = mysqli_query($conn, $images);
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="Evidencia">
        <input type="submit" name="enviar">
    </form>
</body>

</html>