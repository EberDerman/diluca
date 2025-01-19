<?php
include '../includes/session.php'; // Incluir el archivo de sesión para verificar autenticación
requireAuth(); // Verificar si el usuario está autenticado
include '../config/db_config.php';

// Verifica si se ha proporcionado un ID para la noticia
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $news_id = intval($_GET['id']);

    // Obtén la lista de imágenes asociadas a la noticia
    $stmt = $conn->prepare("SELECT images FROM news WHERE id = ?");
    $stmt->bind_param("i", $news_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $news = $result->fetch_assoc();

    if ($news) {
        // Elimina la noticia de la base de datos
        $stmt = $conn->prepare("DELETE FROM news WHERE id = ?");
        $stmt->bind_param("i", $news_id);
        $stmt->execute();

        // Obtén la lista de imágenes
        $images = explode(',', $news['images']);
        foreach ($images as $image) {
            $imagePath = "../assets/uploads/" . $image;
            // Verifica si el archivo existe y elimínalo
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        
        // Redirige al usuario con un mensaje de éxito
        header("Location: ../public/index.php?message=noticia_eliminada");
        exit();
    } else {
        echo "No se encontró la noticia.";
    }
} else {
    echo "ID de noticia no proporcionado.";
}
?>
