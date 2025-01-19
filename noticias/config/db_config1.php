<?php
// db_config.php

// Obtener credenciales desde variables de entorno para mayor seguridad
$host = getenv('DB_HOST') ?: 'localhost';
$db = getenv('DB_NAME') ?: 'u976275358_noticias_db';
$user = getenv('DB_USER') ?: 'u976275358_diluca';
$pass = getenv('DB_PASS') ?: 'DilucaNoticias1';

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Comprobar la conexión
if ($conn->connect_error) {
    // Manejo de errores mejorado
    error_log("Conexión fallida: " . $conn->connect_error);
    die("Se ha producido un error en la conexión. Por favor, intente más tarde.");
}
?>
