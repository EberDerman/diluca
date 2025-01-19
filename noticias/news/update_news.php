<?php
include '../includes/session.php'; // Incluir el archivo de sesión para verificar autenticación
requireAuth(); // Verificar si el usuario está autenticado
include '../config/db_config.php';
include '../includes/header.php';
include '../includes/head.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM news WHERE id = $id");
$news = $result->fetch_assoc();

?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shepherd.js@8.1.0/dist/css/shepherd.css">
    <script src="https://cdn.jsdelivr.net/npm/shepherd.js@8.1.0/dist/js/shepherd.min.js"></script>
</head>


<body>
    <div class="container my-4" style="padding-top: 100px;">
        <h1 class="mb-4">Editar Noticia</h1>
        <form action="update_news_action.php" method="post" enctype="multipart/form-data" id="editForm">
            <input type="hidden" name="id" value="<?php echo $news['id']; ?>">
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $news['title']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo $news['date']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenido</label>
                <textarea class="form-control" id="content" name="content" rows="4" required><?php echo $news['content']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Imágenes (dejar en blanco para mantener las actuales)</label>
                <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple>

                <div id="images-container">
                    <?php
                    $images = explode(',', $news['images']);
                    foreach ($images as $image) {
                        if (!empty($image)) {
                            echo '<div class="image-container mt-2" id="image_' . $image . '">';
                            echo '<img src="../assets/uploads/' . $image . '" alt="Imagen noticia" class="img-thumbnail" style="max-width: 200px;">';
                            echo '<button type="button" class="btn btn-danger btn-sm mt-2 delete-image" data-image="' . $image . '">Eliminar</button>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" id="updateButton">Actualizar Noticia</button>
                <button type="button" class="btn btn-secondary" id="cancelButton">Cancelar</button>
            </div>
        </form>
    </div>

    <!-- Botón de tour -->
    <button id="tour-button" style="position:fixed; bottom:20px; right:20px; z-index:1000; background-color:#007bff; color:white; border:none; border-radius:50%; width:50px; height:50px; font-size:24px;">?</button>


    <script>
        // Eliminar imagen usando event delegation
        document.getElementById('images-container').addEventListener('click', function(event) {
            if (event.target.classList.contains('delete-image')) {
                var imageName = event.target.getAttribute('data-image');
                if (confirm('¿Estás seguro de que quieres eliminar esta imagen?')) {
                    // Hacer una petición para eliminar la imagen
                    fetch('delete_image.php?id=<?php echo $news['id']; ?>&image=' + imageName)
                        .then(response => response.text())
                        .then(data => {
                            if (data === 'success') {
                                // Remover la imagen del DOM si se eliminó correctamente
                                document.getElementById('image_' + imageName).remove();
                            } else {
                                alert('No se pudo eliminar la imagen. Inténtalo de nuevo.');
                            }
                        });
                }
            }
        });

        // Confirmación antes de actualizar
        document.getElementById('updateButton').addEventListener('click', function(event) {
            if (!confirm('¿Estás seguro de que quieres actualizar esta noticia?')) {
                event.preventDefault();
            }
        });

        // Redirigir al hacer clic en Cancelar
        document.getElementById('cancelButton').addEventListener('click', function() {
            window.location.href = '../public/index.php';
        });
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

        // Paso 2: Explicar titulo
        tour.addStep({
            title: ' Modificar Titulo',
            text: 'Puedes cambiar el título que se verá reflejado en la noticia.',
            attachTo: {
                element: '#title',
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
            title: 'Modificar Fecha',
            text: 'Puedes cambiar la fecha de la noticia. Ten en cuenta que al modificar la fecha, la noticia se reordenará en la posición que corresponda, ya que se organizan de más reciente a más antigua.',
            attachTo: {
                element: '#date',
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
            title: 'Modificar Contenido',
            text: 'Puedes modificar el cuerpo de la noticia. Tenga en cuenta que solo los primeros 200 caracteres se verán debajo de las imágenes. Para leer la noticia completa, deberá hacer clic en "leer más.',
            attachTo: {
                element: '#content',
                on: 'bottom' // Cambia 'bottom' a 'top' para que aparezca encima del botón
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
            title: 'Modificar Imágenes',
            text: 'Para modificar, primero deberá controlar la cantidad de imágenes en la vista previa debajo de este botón. Si desea modificar alguna imagen, primero deberá eliminar la que corresponda y luego cargar la o las imágenes nuevas. Asegúrese de que no se superen las 5 imágenes en total, sumando las que ya están cargadas con las que desea cargar. Para cargar, haga clic en "Elegir archivos", seleccione todas las imágenes y haga clic en "Aceptar". Asegúrese de que las imágenes estén lo más comprimidas posible, que no superen los 2 MB y estén en algún formato compatible con la web (JPEG, PNG, GIF, SVG, WebP, AVIF) para optimizar el espacio de almacenamiento del servidor y evitar problemas en la visualización de las imágenes.',
            attachTo: {
                element: '#images',
                on: 'bottom' // Cambia 'bottom' a 'top' para que aparezca encima del botón
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

        // Paso 6: Explicar el botón de actualizar
        tour.addStep({
            title: 'Actualizar noticia',
            text: 'Revise todos los campos antes de actualizar la noticia. Una vez que accione el botón, la s modificaciones se cargarán en la base de datos, se verá reflejada automáticamente en la página y será redireccionado a la página de inicio.',
            attachTo: {
                element: '#updateButton',
                on: 'bottom' // Cambia 'bottom' a 'top' para que aparezca encima del botón
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

        // Paso 7: Explicar el botón de cancelar
        tour.addStep({
            title: 'Cancelar',
            text: 'Puede hacer clic en "Cancelar" para mantener la noticia en su estado original y será redireccionado a la página de inicio.',
            attachTo: {
                element: '#cancelButton',
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



        // Paso 8: Explicar el botón de tour
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