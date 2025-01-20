<?php
session_start(); // Asegúrate de iniciar la sesión

require 'config/db_config.php'; // Archivo que contiene las credenciales de la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verificar la contraseña
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header("Location: public/index.php"); // Redirigir a la página de bienvenida
            exit();
        } else {
            header("Location: login.php?error=incorrect_password");
            exit();
        }
    } else {
        header("Location: login.php?error=incorrect_username");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset=UTF-8>
    <meta content="IE=edge" http-equiv=X-UA-Compatible>
    <meta content="width=device-width,initial-scale=1" name=viewport>
    <meta name="theme-color" content="#ffffff">
    <meta name="title" content="Di Luca">
    <meta name="description" content="DI LUCA es una empresa familiar fundada en 1950 por Marino Signorini, destacándose en el sector de la construcción e ingeniería civil. Con más de 50 años de experiencia, la empresa ha evolucionado para adaptarse a los cambios económicos, sociales, industriales y tecnológicos desde 2009. Su filosofía empresarial se basa en principios como el respeto, compromiso, responsabilidad, cordialidad y eficacia, lo que les ha permitido establecer relaciones duraderas con clientes y colaboradores. DI LUCA se destaca por su búsqueda constante de la excelencia y el impacto positivo en la comunidad y el medio ambiente a través de proyectos sostenibles.">
    <link rel="icon" href="../DiLucaWeb/assets/images/iconos/icodiluca.ico" type="image/x-icon">
    <link rel="icon" href="../DiLucaWeb/assets/images/iconos/icodiluca.png" type="image/png">
    <link rel="apple-touch-icon" href="../DiLucaWeb/assets/images/iconos/icodiluca.png">
 

    <title>Diluca Noticias</title>
    <link rel="stylesheet" href="public/css/styles.css">

</head>

<body>
    <div class="login-container">
        <form action="login.php" method="POST">
            <img class="img-fluid" src="../DiLucaWeb/assets/images/DiLucaLogo.webp" alt="Diluca">
            <label for="username">Nombre de Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Iniciar Sesión</button>

            <?php if (isset($_GET['error'])): ?>
                <div class="error">
                    <?php
                    if ($_GET['error'] == 'incorrect_username') {
                        echo "Nombre de usuario incorrecto.";
                    } elseif ($_GET['error'] == 'incorrect_password') {
                        echo "Contraseña incorrecta.";
                    }
                    ?>
                </div>
            <?php endif; ?>
        </form>

        <!-- Enlace a la recuperación de contraseña -->
        <!-- <p><a href="forgot_password.php">¿Olvidaste tu contraseña?</a></p>-->

    </div>
</body>

</html>