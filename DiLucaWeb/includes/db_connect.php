<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noticias_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener todas las noticias
$result = $conn->query("SELECT * FROM news ORDER BY date DESC");
?>