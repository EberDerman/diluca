<?php
require '../config/db_config.php'; // Archivo que contiene las credenciales de la base de datos

// Definir el nombre de usuario y la contraseña
$username = 'admin';
$password = '1234'; // Contraseña en texto plano

// Crear el hash de la contraseña
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Preparar la consulta para insertar el usuario
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed_password);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Usuario admin creado exitosamente.";
} else {
    echo "Error al crear el usuario: " . $stmt->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>
