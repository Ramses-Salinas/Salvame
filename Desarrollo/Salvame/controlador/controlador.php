<?php
if(!empty($_POST["btnlogin"])){
    if(empty($_POST["usuario"])and empty($_POST["password"])){
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    }else{
      $usuario=$_POST["usuario"];
      $clave=$_POST["password"];
      $sql=$conexion->query(" select * from administrador where id_admin='$usuario' and contrasenia='$clave' ");
      if($datos=$sql->fetch_object()){
            header("location:/mapa.html");
      } else{
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
      } 
    }
}



?>