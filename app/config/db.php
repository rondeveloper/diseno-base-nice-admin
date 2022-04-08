<?php
include_once __DIR__ . "/config.php";
$conexion = mysqli_connect($hostname_db, $username_db, $password_db);
mysqli_select_db($conexion, $database_db) or die("Ninguna DB seleccionada");
