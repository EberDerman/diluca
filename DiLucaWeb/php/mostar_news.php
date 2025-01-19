<?php
include("../../noticias/config/db_config.php");

// Obtener todas las noticias
$result = $conn->query("SELECT * FROM news ORDER BY date DESC");
?>

<body>
    <div class="container my-4">
        <h1 class="mb-4">Noticias</h1>
        <?php while ($news = $result->fetch_assoc()): ?>
            <div class="card mb-4" style="background-color: var(---color--primary); border: solid 2px white; border-radius: 30px; padding: 5px;">
                <div class="row g-0">
                    <?php
                    $images = explode(',', $news['images']);
                    if (!empty($images[0])): ?>
                        <div id="carousel<?php echo $news['id']; ?>" class="carousel slide col-md-4"  >
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
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($news['title']); ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo date('d/m/Y', strtotime($news['date'])); ?></h6>
                            <p id="content-<?php echo $news['id']; ?>" class="card-text">
                                <?php echo nl2br(htmlspecialchars(substr($news['content'], 0, 150))) . '...'; ?>
                            </p>
                            <a href="javascript:void(0);" id="btn-<?php echo $news['id']; ?>" class="btn btn-primary" onclick="showFullText(<?php echo $news['id']; ?>)">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <script>
        function showFullText(id) {
            const contentElement = document.getElementById(`content-${id}`);
            const btnElement = document.getElementById(`btn-${id}`);
            <?php
            // Generar el script dinámico para cada noticia
            $result->data_seek(0); // Volver al primer resultado
            while ($news = $result->fetch_assoc()) {
                $fullContent = json_encode(nl2br(htmlspecialchars($news['content'])));
                echo "if(id == {$news['id']}) {
                        contentElement.innerHTML = $fullContent;
                        btnElement.style.display = 'none'; // Ocultar el botón al mostrar el texto completo
                    }\n";
            }
            ?>
        }
    </script>

    <?php
    $conn->close();
    ?>
</body>

</html>
