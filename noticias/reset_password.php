<?php
require 'config/db_config.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verificar si el token es válido
    $stmt = $conn->prepare("SELECT username, token_expiry FROM users WHERE reset_token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($username, $token_expiry);
        $stmt->fetch();

        // Verificar si el token no ha expirado
        if (new DateTime() < new DateTime($token_expiry)) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

                // Actualizar la contraseña y borrar el token
                $stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL, token_expiry = NULL WHERE reset_token = ?");
                $stmt->bind_param("ss", $new_password, $token);
                $stmt->execute();

                echo "Tu contraseña ha sido restablecida.";
            }
        } else {
            echo "El enlace ha expirado.";
        }
    } else {
        echo "Token inválido.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Token faltante.";
}
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
    <div class="reset-password-container">
        <form action="" method="POST">
            <label for="new_password">Nueva Contraseña:</label>
            <input type="password" id="new_password" name="new_password" required>
            <button type="submit">Restablecer Contraseña</button>
        </form>
    </div>
</body>
</html>
