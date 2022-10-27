<?php
$host = "localhost";
$dbuser = "root";
$dbpwd = "50bb11b76";
$db = "salvame";

$connect = mysqli_connect($host, $dbuser, $dbpwd);
if (!$connect)
	echo ("No se ha conectado a la base de datos");
else
	$select = mysqli_select_db($connect, $db);