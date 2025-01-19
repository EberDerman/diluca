<?php
// Activar la visualización de errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'config/db_config.php'; // Asegúrate de que este archivo existe y se carga correctamente
require 'send_mail.php'; // Incluir el archivo donde configuramos PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Verificar si el correo existe en la base de datos
    $stmt = $conn->prepare("SELECT username FROM users WHERE email = ?");
    if (!$stmt) {
        error_log("Error en la preparación de la consulta: " . $conn->error);
        die("Error en la consulta. Por favor, intente más tarde.");
    }
    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Generar un token único y su tiempo de expiración
        $token = bin2hex(random_bytes(50)); // Token único
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour')); // 1 hora de validez

        // Guardar el token y el tiempo de expiración en la base de datos
        $stmt = $conn->prepare("UPDATE users SET reset_token = ?, token_expiry = ? WHERE email = ?");
        $stmt->bind_param("sss", $token, $expiry, $email);
        $stmt->execute();

        // Crear el enlace de restablecimiento de contraseña
        $reset_link = "http://localhost/reset_password.php?token=" . $token;

        // Llamar a la función de PHPMailer para enviar el correo
        if (sendPasswordResetEmail($email, $reset_link)) {
            echo "Se ha enviado un enlace para restablecer la contraseña a tu correo.";
        } else {
            echo "Hubo un problema al enviar el correo.";
        }
    } else {
        echo "Este correo no está registrado.";
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <div class="reset-container">
        <form action="forgot_password.php" method="POST">
            <label for="email">Introduce tu correo electrónico:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Enviar enlace de restablecimiento</button>
        </form>
    </div>
</body>
</html>
