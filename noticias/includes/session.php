<?php
// session.php

session_start();

// Configuración de la sesión
session_regenerate_id(true); // Regenerar el ID de sesión para prevenir la fijación de sesión

// Verificar si el usuario está autenticado
function isAuthenticated() {
    return isset($_SESSION['username']);
}

// Redirigir al login si no está autenticado
function requireAuth() {
    if (!isAuthenticated()) {
        header("Location: ../login.php");
        exit();
    }
}

// Función para cerrar sesión
function logout() {
    session_unset();
    session_destroy();
    header("Location: ../noticias/login.php");
    exit();
}
?>
