<?php
include '../includes/session.php'; // Incluir el archivo de sesión para verificar autenticación
requireAuth(); // Verificar si el usuario está autenticado
include '../config/db_config.php';



$title = $_POST['title'];
$date = $_POST['date'];
$content = $_POST['content'];

$uploadedImages = [];
$uploadDir = '../assets/uploads/';

foreach ($_FILES['images']['name'] as $key => $imageName) {
    $imageTmp = $_FILES['images']['tmp_name'][$key];
    $imagePath = $uploadDir . basename($imageName);
    if (move_uploaded_file($imageTmp, $imagePath)) {
        $uploadedImages[] = $imageName;
    }
}

$imagesList = implode(',', $uploadedImages);

$sql = "INSERT INTO news (title, date, content, images) VALUES ('$title', '$date', '$content', '$imagesList')";
if ($conn->query($sql) === TRUE) {
    header('Location: ../public/index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>