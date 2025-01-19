<?php
include '../includes/session.php'; // Incluir el archivo de sesión para verificar autenticación
requireAuth(); // Verificar si el usuario está autenticado
include '../config/db_config.php';

$id = $_POST['id'];
$title = $_POST['title'];
$date = $_POST['date'];
$content = $_POST['content'];

// Manejo de imágenes
$uploadedImages = [];
$uploadDir = '../assets/uploads/';

// Obtener imágenes actuales
$result = $conn->query("SELECT images FROM news WHERE id = $id");
$news = $result->fetch_assoc();
$currentImages = explode(',', $news['images']);

// Subir nuevas imágenes
foreach ($_FILES['images']['name'] as $key => $imageName) {
    if (!empty($imageName)) {
        $imageTmp = $_FILES['images']['tmp_name'][$key];
        $uniqueImageName = time() . '_' . basename($imageName); // Asegurarse de que los nombres de archivo sean únicos
        $imagePath = $uploadDir . $uniqueImageName;

        // Mover el archivo a la carpeta de uploads
        if (move_uploaded_file($imageTmp, $imagePath)) {
            $uploadedImages[] = $uniqueImageName; // Guardar el nombre de la nueva imagen
        }
    }
}

// Si no hay nuevas imágenes cargadas, mantenemos las actuales
if (empty($uploadedImages)) {
    $allImages = $currentImages;
} else {
    // Combinar imágenes actuales con las nuevas
    $allImages = array_merge($currentImages, $uploadedImages);
}

// Filtrar cualquier imagen vacía o eliminada
$allImages = array_filter($allImages);

// Actualizar lista de imágenes en la base de datos
$imagesList = implode(',', $allImages);

// Actualizar la noticia en la base de datos
$sql = "UPDATE news SET title = '$title', date = '$date', content = '$content', images = '$imagesList' WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    header('Location: ../public/index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
