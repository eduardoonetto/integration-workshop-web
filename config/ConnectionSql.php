<?php

$config = require('config.php');


// Crear una conexión a la base de datos
$conexion = mysqli_connect($config['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'], $config['DB_NAME']);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}else{
    return $conexion;
}