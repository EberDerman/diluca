<?php
require 'vendor/autoload.php'; // Asegúrate de que esta línea esté aquí

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendPasswordResetEmail($email, $reset_link) {
    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io'; // Cambia esto según tu configuración
        $mail->SMTPAuth = true;
        $mail->Username = 'e838eeb32e8957'; // Cambia esto
        $mail->Password = '1f766d881bbc2c'; // Cambia esto
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;

        // Remitente y destinatario
        $mail->setFrom('from@example.com', 'Your Name');
        $mail->addAddress($email); // Añade el destinatario

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Restablecer Contraseña';
        $mail->Body = "<p>Haz clic en el siguiente enlace para restablecer tu contraseña:</p>
                       <p><a href='{$reset_link}'>Restablecer Contraseña</a></p>";

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Error al enviar el correo: {$mail->ErrorInfo}");
        return false; // Devolver false si hay un error al enviar
    }
}
?>
