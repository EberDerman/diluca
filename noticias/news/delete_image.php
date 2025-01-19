<?php
include '../includes/session.php'; // Verificar autenticación
requireAuth(); // Verificar si el usuario está autenticado
include '../config/db_config.php';

$id = $_GET['id'];
$image = $_GET['image'];

// Obtener las imágenes actuales de la noticia
$result = $conn->query("SELECT images FROM news WHERE id = $id");
$news = $result->fetch_assoc();
$images = explode(',', $news['images']);

// Remover la imagen seleccionada de la lista
$newImages = array_filter($images, function($img) use ($image) {
    return $img !== $image;
});

// Actualizar la base de datos
$imagesList = implode(',', $newImages);
$sql = "UPDATE news SET images = '$imagesList' WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    // Eliminar la imagen del servidor
    if (file_exists('../assets/uploads/' . $image)) {
        unlink('../assets/uploads/' . $image);
    }
    echo 'success';
} else {
    echo 'error';
}

$conn->close();
?>
