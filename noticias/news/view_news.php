<?php
include '../includes/session.php'; // Incluir el archivo de sesión para verificar autenticación
requireAuth(); // Verificar si el usuario está autenticado
include '../config/db_config.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM news WHERE id = $id");
$news = $result->fetch_assoc();
?>
<?php include '../includes/navbar.php'; ?>

<body>
    <div class="container my-4">
        <h1 class="mb-4"><?php echo htmlspecialchars($news['title']); ?></h1>
        <div id="carousel<?php echo $news['id']; ?>" class="carousel slide">
            <div class="carousel-inner">
                <?php
                $images = explode(',', $news['images']);
                foreach ($images as $index => $image):
                    if (!empty($image)): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <img src="../assets/uploads/<?php echo htmlspecialchars($image); ?>" class="d-block w-25" alt="Imagen noticia">
                        </div>
                <?php endif;
                endforeach;
                ?>
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
        <p class="mt-4"><?php echo nl2br(htmlspecialchars($news['content'])); ?></p>
        <a href="update_news.php?id=<?php echo $news['id']; ?>" class="btn btn-warning" onclick="return confirm('¿Estás seguro de que quieres actualizar esta noticia?');">Editar</a>
        <a href="delete_news.php?id=<?php echo $news['id']; ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta noticia?');">Borrar</a>
    </div>
    <?php include "../includes/footer.php" ?>
</body>

</html>