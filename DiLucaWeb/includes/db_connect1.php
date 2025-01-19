<?php
$servername = "localhost";
$username = "u976275358_diluca";
$password = "DilucaNoticias1";
$dbname = "u976275358_noticias_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener todas las noticias
$result = $conn->query("SELECT * FROM news ORDER BY date DESC");
?>


z