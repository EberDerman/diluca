<?php
include("../../noticias/config/db_config.php");

$id = $_GET['id']; // Obtener el ID de la noticia desde la URL
$newsQuery = $conn->query("SELECT * FROM news WHERE id = $id");

if ($newsQuery->num_rows > 0) {
    $news = $newsQuery->fetch_assoc();
} else {
    die("Noticia no encontrada.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="./../assets/stylesheets/noticias.css">

    <title><?php echo htmlspecialchars($news['title']); ?></title>
</head>

<body>
<?php include 'header.php'; ?>
    <div class="container my-4">
        <div class="row">
            <!-- Columna izquierda: Fecha y título -->
            <div class="col-md-6">
                <h5 class="text-muted"><?php echo date('d/m/Y', strtotime($news['date'])); ?></h5>
                <h1><?php echo htmlspecialchars($news['title']); ?></h1>
            </div>
            <!-- Columna derecha: Carrusel de imágenes -->
            <div class="col-md-6">
                <?php
                $images = explode(',', $news['images']);
                if (!empty($images[0])): ?>
                    <div id="carousel<?php echo $news['id']; ?>" class="carousel slide">
                        <div class="carousel-inner">
                            <?php foreach ($images as $index => $image): ?>
                                <?php if (!empty($image)): ?>
                                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                        <img src="../noticias/assets/uploads/<?php echo htmlspecialchars($image); ?>" class="d-block w-100" alt="Imagen noticia">
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?php echo $news['id']; ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel<?php echo $news['id']; ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Contenido completo de la noticia -->
        <div class="row mt-4">
            <div class="col-12">
                <p><?php echo nl2br(htmlspecialchars($news['content'])); ?></p>
            </div>
        </div>
    </div>

    <?php
    $conn->close();
    ?>
</body>

</html>
