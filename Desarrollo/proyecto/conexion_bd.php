<?php
$server = 'localhost';
$username = 'root';
$password = '50bb11b76';
$database = 'salvame';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    //echo '<script language="javascript">alert("Conexion establecida");</script>';
} catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
}