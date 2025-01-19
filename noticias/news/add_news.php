<?php
include '../includes/session.php'; // Incluir el archivo de sesión para verificar autenticación
requireAuth(); // Verificar si el usuario está autenticado
include '../config/db_config.php';
include '../includes/header.php';
include '../includes/head.php';
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shepherd.js@8.1.0/dist/css/shepherd.css">
    <script src="https://cdn.jsdelivr.net/npm/shepherd.js@8.1.0/dist/js/shepherd.min.js"></script>
</head>

<body>

    <div class="container my-4" style="padding-top: 80px;">
        <h1 class="mb-4">Agregar Noticia</h1>
        <form action="upload_news.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenido</label>
                <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Imágenes (hasta 5)</label>
                <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Noticia</button>
        </form>
    </div>

    <!-- Botón de tour -->
    <button id="tour-button" style="position:fixed; bottom:20px; right:20px; z-index:1000; background-color:#007bff; color:white; border:none; border-radius:50%; width:50px; height:50px; font-size:24px;">?</button>



    <script>
        // Establecer la fecha actual en el campo de fecha
        document.addEventListener('DOMContentLoaded', function() {
            const dateInput = document.getElementById('date');
            const today = new Date().toISOString().split('T')[0];
            dateInput.value = today;
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
            title: 'Titulo',
            text: 'Titulo que se vera reflejado en la noticia.',
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
            title: 'Fecha',
            text: 'Fecha que se vera reflejada en la noticia la cual sera utilizada para ordenar de mas reciente a mas antigua. En el caso de habr olvidado publicar una noticia, con la fecha se ordenara automaticamente donde corresponda.',
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
            title: 'Contenido',
            text: 'Cuerpo de la noticia: tenga en cuenta que solo los primeros 200 caracteres se verán debajo de las imágenes. Para leer la noticia completa, deberá hacer clic en "leer más.',
            attachTo: {
                element: '#content',
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
            title: 'Imágenes',
            text: 'Para cargar, haga clic en "Elegir archivos", seleccione todas las imágenes y haga clic en "Aceptar". Solo podrá cargar 5 imágenes. Asegúrese de que las imágenes estén lo más comprimidas posible, que no superen los 2 MB y estén en algún formato compatible con la web (JPEG, PNG, GIF, SVG, WebP, AVIF) para optimizar el espacio de almacenamiento del servidor y evitar problemas en la visualización de las imágenes.',
            attachTo: {
                element: '#images',
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
            title: 'Agregar noticia',
            text: 'Revise todos los campos antes de agregar la noticia. Una vez que accione el botón, la noticia se cargará en la base de datos y se verá reflejada automáticamente en la página.',
            attachTo: {
                element: '.btn-primary',
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