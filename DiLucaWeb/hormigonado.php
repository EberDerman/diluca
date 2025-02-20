<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'php/head.php'; ?>
    <link href="./assets/stylesheets/contenidoEspecializaciones.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/stylesheets/hormigonado.css">

    <?php include 'php/header.php'; ?>
    <style>
        @media (max-width: 767px) {
            .espec_imagenes .row:first-of-type .col-md-6:first-child {
                order: 2;
                /* Mueve la primera imagen debajo de la segunda columna */
            }

            .espec_imagenes .row:first-of-type .col-md-6:nth-child(2) {
                order: 1;
                /* Mueve la segunda columna (texto) arriba */
            }

        }
    </style>
</head>
<main>
    <div class="hormigonado" id="hormigonado">
        <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>

        <div class="container espec_imagenes">
            <div class="row justify-content-around" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                <div class="col-md-6 mb-5">
                    <img alt="hormigonado" src="./assets/images/webp2/20.webp" class="custom-width img-fluid imagen_solapa">
                </div>
                <div class="col-md-6 col-12" id="col-2">
                <div class="img-container mb-3 mt-3">
                        <img class="img-fluid w-50 object-fit-cover m-0 p-0 solapa" src="assets/images/HORMIGONADO.png" alt="">
                        <div class="texto_solapa">
                            <p>El hormigonado es el proceso de mezcla, vertido y curado del hormigón para la construcción de diversas estructuras, como ci-mientos, muros, pavimentos y puentes. El hormigón es una mez-cla de cemento, agua, arena, grava y, a veces, aditivos para mejorar sus propiedades. El hormigonado requiere una planificación cuidadosa para evitar problemas como fisuras, contracción y defectos superficiales. La calidad de los materiales, las condiciones climáticas y los méto-dos de curado son factores críticos que afectan el resultado final. Además, la sostenibilidad en el uso del hormigón, incluyendo el reciclaje y el uso de materiales alternativos, es una consideración creciente en la industria.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class=" justify-content-around row" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                <div class="col-md-6 mb-5">
                    <img alt="hidricas" src="./assets/images/webp2/21.webp" class="custom-width img-fluid">
                </div>
                <div class="col-md-6 mb-5">
                    <img alt="hidricas" src="./assets/images/webp2/22.webp" class="custom-width img-fluid">
                </div>
            </div>
        </div>

        <div class="dieciocho" id="dieciocho">
            <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>
            <div class="mb-5 container_padre">
                <div class="contenedor_trasero"></div>

                <div class="container">


                    <div class="row justify-content-between" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">

                        <div class="col-md-6  texto-container">

                            <h6>Provincia de Córdoba – Rio Negro Viedma</h6>
                            <h6>Emprendimiento: Hormigones – Obras de Arte.</h6>
                            <h6>Año: 2015 – 2019</h6>
                            <p>Tarea: Ejecución de hormigones H17 – H21, en distintas obras. Desde hace 4 años venimos trabajando estas obras sumando experiencia y afrontando desafíos mayores. Nuestro equipo técnico, conformado por Ingenieros y personal con mano de obra calificada logramos los objetivos de cada desafío.</p>
                            <p>Las imágenes forman parte de obras parciales entre las que podemos enunciar tareas de alcantarillas in situ de Hormigón Armado, cámaras de inspección de obras de remediación de suelos contaminados, estaciones de lavado de camiones y retención de suelos. Bases de distintas obras y alcantarillas puente sobre canales.</p>
                            <p>Alcantarillas de pre moldeados, ejecutando cruce de rutas nacionales y provinciales con las habilitaciones y exigencias cumplimentadas.</p>
                            <p>Estructuras de disipación (gaviones y colchonetas) que se utilizan como contenedor de excesos hídricos que se generan en zonas de altas napas freáticas.</p>
                        </div>



                        <div class="col-md-6  d-flex flex-column justify-content-center align-content-center">

                            <div class="img-container  d-flex flex-column justify-content-center align-content-center ms-xxl-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                                <img class="img-fluid w-100 h-100 object-fit-cover pb-xxl-5" alt="" src="./assets/images/webp2/7.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<?php include 'php/footer.php'; ?>