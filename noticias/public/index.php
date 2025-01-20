<?php
include '../config/db_config.php';
include '../includes/session.php'; // Incluir el archivo de sesión para verificar autenticación
requireAuth(); // Verificar si el usuario está autenticado

include '../includes/head.php';
include '../includes/header.php';

// Obtener todas las noticias
$result = $conn->query("SELECT * FROM news ORDER BY date DESC");
?>

<head>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shepherd.js@8.1.0/dist/css/shepherd.css">
    <script src="https://cdn.jsdelivr.net/npm/shepherd.js@8.1.0/dist/js/shepherd.min.js"></script>
</head>


<main style="padding-top: 150px;">

    <!-- Header -->
    <header class="bg-dark text-white py-3">
        <div class="container text-center">
            <h1>Últimas Noticias</h1>
        </div>
    </header>

    <!-- Sección de noticias -->
    <div class="container my-5">
        <div class="row">
            <?php while ($news = $result->fetch_assoc()): ?>
                <div class="col-md-4 mb-4 cardTour">
                    <div class="card h-100" style="background-color: white; border: solid 2px white;">
                        <?php
                        $images = explode(',', $news['images']);
                        if (!empty($images[0])): ?>
                            <div id="carousel<?php echo $news['id']; ?>" class="carousel slide">
                                <div class="carousel-inner">
                                    <?php foreach ($images as $index => $image): ?>
                                        <?php if (!empty($image)): ?>
                                            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                                <img src="../assets/uploads/<?php echo htmlspecialchars($image); ?>" class="d-block w-100" alt="Imagen noticia" style="max-height: 50vh;">
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
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title"><?php echo htmlspecialchars($news['title']); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo date('d/m/Y', strtotime($news['date'])); ?></h6>
                            </div>

                            <!-- Contenedor para el contenido de la noticia -->
                            <p class="card-text" id="content-<?php echo $news['id']; ?>">
                                <?php echo nl2br(htmlspecialchars(substr($news['content'], 0, 200))) . '...'; ?>
                            </p>
                            <a href="javascript:void(0);" id="btn-readmore-<?php echo $news['id']; ?>" class="btn btn-primary leerMas" onclick="showFullText(<?php echo $news['id']; ?>)">Leer más</a>
                            <a href="javascript:void(0);" id="btn-close-<?php echo $news['id']; ?>" class="btn btn-danger" style="display:none;" onclick="showSummary(<?php echo $news['id']; ?>)">Cerrar</a>
                            <a href="../news/update_news.php?id=<?php echo $news['id']; ?>" class="btn btn-warning editar">Editar</a>
                            <a href="../news/delete_news.php?id=<?php echo $news['id']; ?>" class="btn btn-danger borrar" onclick="return confirm('¿Estás seguro de que quieres eliminar esta noticia?');">Borrar</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <!-- Cerrar conexión -->
    <?php $conn->close(); ?>
    <!-- Botón de tour -->
    <button id="tour-button" style="position:fixed; bottom:20px; right:20px; z-index:1000; background-color:#007bff; color:white; border:none; border-radius:50%; width:50px; height:50px; font-size:24px;">?</button>


</main>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- Script para mostrar y ocultar texto completo de la noticia -->
<script>
    function showFullText(id) {
        const contentElement = document.getElementById(`content-${id}`);
        const btnReadMore = document.getElementById(`btn-readmore-${id}`);
        const btnClose = document.getElementById(`btn-close-${id}`);

        fetchFullText(id)
            .then(fullContent => {
                contentElement.innerHTML = fullContent; // Mostrar el contenido completo
                btnReadMore.style.display = 'none'; // Ocultar el botón "Leer más"
                btnClose.style.display = 'inline-block'; // Mostrar el botón "Cerrar"
            })
            .catch(error => {
                console.error('Error al cargar el texto completo:', error);
            });
    }

    function showSummary(id) {
        const contentElement = document.getElementById(`content-${id}`);
        const btnReadMore = document.getElementById(`btn-readmore-${id}`);
        const btnClose = document.getElementById(`btn-close-${id}`);

        fetchSummaryText(id)
            .then(summaryContent => {
                contentElement.innerHTML = summaryContent; // Mostrar solo el resumen
                btnReadMore.style.display = 'inline-block'; // Mostrar el botón "Leer más"
                btnClose.style.display = 'none'; // Ocultar el botón "Cerrar"
            })
            .catch(error => {
                console.error('Error al cargar el resumen:', error);
            });
    }

    function fetchFullText(id) {
        return new Promise((resolve, reject) => {
            switch (id) {
                <?php
                $result->data_seek(0); // Volver al primer resultado
                while ($news = $result->fetch_assoc()) {
                    $fullContent = json_encode(nl2br(htmlspecialchars($news['content'])));
                    echo "case {$news['id']}:
                                resolve($fullContent);
                                break;\n";
                }
                ?>
                default:
                    reject('Noticia no encontrada');
            }
        });
    }

    function fetchSummaryText(id) {
        return new Promise((resolve, reject) => {
            switch (id) {
                <?php
                $result->data_seek(0); // Volver al primer resultado
                while ($news = $result->fetch_assoc()) {
                    $summaryContent = json_encode(nl2br(htmlspecialchars(substr($news['content'], 0, 200))) . '...');
                    echo "case {$news['id']}:
                                resolve($summaryContent);
                                break;\n";
                }
                ?>
                default:
                    reject('Noticia no encontrada');
            }
        });
    }
</script>




<!-- Definir el tour -->
<script>
    // Botón para reiniciar el tour
    document.getElementById('tour-button').addEventListener('click', () => {
        // Desplazarse suavemente al inicio de la página
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Esto hará que el scroll sea suave
        });

        // Cancelar cualquier tour en curso
        if (tour.isActive()) {
            tour.cancel(); // Cancela el tour anterior
        }

        // Iniciar el tour después de un pequeño retraso
        setTimeout(() => {
            tour.start();
        }, 500); // Ajusta el tiempo si es necesario
    });

    // Definir el tour
    const tour = new Shepherd.Tour({
        defaultStepOptions: {
            cancelIcon: {
                enabled: true
            },
            classes: 'shadow-md bg-purple-dark',
            scrollTo: {
                behavior: 'smooth',
                block: 'center'
            }
        }
    });

    // Paso 1: Explicar el Navbar
    tour.addStep({
        title: 'Navegación',
        text: 'Este es el menú de navegación. Desde aquí puedes ir a la página de inicio, agregar nuevas noticias o cerrar la sesión. Una vez cerrada la sesión, serás redireccionado al inicio de sesión, donde deberás ingresar nuevamente tu usuario y contraseña.',
        attachTo: {
            element: window.innerWidth <= 768 ? '.mobile-nav-toggle.mobile-nav-show' : '#navbar', // Cambia el elemento según el tamaño de la ventana
            on: 'bottom'
        },
        buttons: [{
            text: 'Siguiente',
            action: () => tour.next()
        }]
    });

    // Paso 2: Explicar las noticias
    tour.addStep({
        title: 'Noticias',
        text: 'Aquí puedes ver el contenido de las noticias cargadas, tal como se verán reflejadas en la sección de noticias de la página web.',
        attachTo: {
            element: '.cardTour',
            on: 'bottom'
        },
        buttons: [{
                text: 'Atrás',
                action: () => tour.back()
            },
            {
                text: 'Siguiente',
                action: () => tour.next()
            }
        ]

    });

    // Paso 3: Explicar el carrusel
    tour.addStep({
        title: 'Carrusel',
        text: 'El carrusel mostrará todas las imágenes cargadas en la noticia. Para verlas, deberá hacer clic en las flechas ubicadas a cada lado de la imagen.',
        attachTo: {
            element: '.carousel-control-prev-icon',
            on: 'bottom'
        },
        buttons: [{
                text: 'Atrás',
                action: () => tour.back()
            },
            {
                text: 'Siguiente',
                action: () => tour.next()
            }
        ]

    });

    // Paso 4: Explicar los botones de acción
    tour.addStep({
        title: 'Acción Leer más',
        text: 'En la página principal se mostrará el botón "Leer más", donde podrás hacer clic para ver el contenido completo de la noticia.',
        attachTo: {
            element: '.leerMas',
            on: 'top' // Cambia 'bottom' a 'top' para que aparezca encima del botón
        },
        buttons: [{
                text: 'Atrás',
                action: () => tour.back()
            },
            {
                text: 'Siguiente',
                action: () => tour.next()
            }
        ]

    });

    // Paso 5: Explicar el botón de Editar
    tour.addStep({
        title: 'Acción Editar',
        text: 'Este botón "Editar" solo se mostrará en esta página. Al accionarlo, te redirigirá a una página llamada "Editar noticias", donde podrás modificar el texto e imágenes pertenecientes a esta noticia.',
        attachTo: {
            element: '.editar',
            on: 'top' // Cambia 'bottom' a 'top' para que aparezca encima del botón
        },
        buttons: [{
                text: 'Atrás',
                action: () => tour.back()
            },
            {
                text: 'Siguiente',
                action: () => tour.next()
            }
        ]

    });

    // Paso 6: Explicar el botón de Borrar
    tour.addStep({
        title: 'Acción Borrar',
        text: 'El botón "Borrar" solo se mostrará en esta página. Al accionarlo, se desplegará una alerta de confirmación. Una vez aceptada, la noticia completa, incluidas las fotos, será eliminada de la base de datos. Es muy importante que las fotos se almacenen con nombres diferentes para evitar que, al eliminar una noticia, se eliminen imágenes de otras noticias. Si solo deseas eliminar fotos o modificar parte del texto, debes hacer clic en "Editar".',
        attachTo: {
            element: '.borrar',
            on: 'top' // Cambia 'bottom' a 'top' para que aparezca encima del botón
        },
        buttons: [{
                text: 'Atrás',
                action: () => tour.back()
            },
            {
                text: 'Siguiente',
                action: () => tour.next()
            }
        ]

    });

    // Paso 7: Explicar el botón de tour
    tour.addStep({
        title: 'Ayuda',
        text: 'Si necesitas volver a ver este tour, haz clic en el ícono de ayuda en la parte inferior derecha.',
        attachTo: {
            element: '#tour-button',
            on: 'left'
        },
        buttons: [{
                text: 'Atrás',
                action: () => tour.back()
            },
            {
                text: 'Finalizar',
                action: () => tour.complete()
            }
        ]
    });
</script>



</body>

</html>