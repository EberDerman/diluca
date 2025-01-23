<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'php/head.php'; ?>
    <link rel="stylesheet" href="assets/stylesheets/contenidoEspecializaciones.css">

    <?php include 'php/header.php'; ?>
    <style>
        p {
            text-align: justify;
        }

        .texto-container {
            max-height: 80vh;
        }

        .col-md-4.texto-container {
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .back_titulo {
            max-width: 50vw;
            height: 16vh;

        }

        @media (max-width: 1367px) {
            .back_titulo {
                max-width: 50vw;
                height: 24vh;

            }
        }

        @media (max-width: 991px) {
            .texto-container {
                max-height: 105vh;
            }

            .back_titulo {
                max-width: 50vw;
                font-size: x-small;
                height: 15vh;

            }

        }



        /* Media Query para pantallas pequeñas */
        @media (max-width: 767px) {

            .texto-container {
                max-height: none;
                /* Elimina la restricción de altura en pantallas pequeñas */


            }

            .col-md-4.texto-container {
                position: static;
                /* Anula la posición sticky en pantallas pequeñas */
                z-index: auto;
                /* Restaura el valor del z-index */
            }

            .responsibe {
                margin: 20px 0px;
            }

            .back_titulo {
                max-width: 50vw;
                font-size: x-small;
            }

        }

        @media (max-width:530px) {
            .responsibe {
                margin: 15px 0px;
            }

            .back_titulo {
                max-width: 50vw;
                font-size: x-small;
                height: 15vh;

            }

        }

        @media (max-width:425px) {
            .responsibe {
                margin: 10px 0px;
            }

            .back_titulo {
                max-width: 50vw;
                font-size: x-small;

            }

        }
    </style>

</head>


<body>

    <main>
        <div id="demolicion " class="demolicion">

            <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>
            <div class="container">

                <div class="row justify-content-between responsibe ">
                    <div class="col-md-4 texto-container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                        <h3>DEMOLICIÓN:</h3>
                        <h4>Año 2018</h4>
                        <p> La demolición es el proceso de desmantelar, derribar o destruir estructuras existentes para dar paso a nuevas construcciones o para liberar terrenos para otros usos. Este proceso puede incluir la demolición de edificios residenciales, comerciales, indus-triales, puentes y otras estructuras.
                            Además, es esencial para eliminar estructuras peligrosas o no funcionales, mejorar la seguridad pública y cumplir con los requisitos de planificación y desarrollo.</p>
                    </div>


                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000" style="margin-top: 70px;">
                        <div class="flex-column img-container">

                            <img class="img_centro" src="./assets/images/webp/PAPELERA KRAFT.webp" alt="demolicion">
                            <div class="back_texto">

                                <p> Demolición de instalación de la papelera Kraft, más de 38.500m2 de mampostería con estructura metálicas, hormigones, cabreadas, me-
                                    tálicas, playones de hormi-gón, cisternas.
                                    Seguimiento con personal idóneo, manteniendo secto-
                                    res y recuperando objetos
                                    de patrimonio cultural que serán expuestos en el futu-
                                    ro emprendimiento.
                                    Equipos utilizados: Excavadoras sobre orugas, herramientas eléctricas y gas de corte, martillo hidráulico INDECO 2500 ( 1500kg). Camiones de gran porte para el retiro del material resul-tante.
                                </p>
                            </div>
                        </div>


                        <div class="flex-column img-container">

                            <img class="img_centro" src="./assets/images/webp/CARDINALES NUEVA SUQUIA.webp" alt="demolicion">
                            <div class="back_texto">

                                <P>Demolición de la bodega existente, mas de 25.000m2 de hormigón armado con hierro del 25, paredes de hormigón encontradas, cisternas, bodegas, bases y pilotes.</P>

                            </div>
                        </div>



                        <div class="flex-column img-container">

                            <img class="img_centro" src="./assets/images/webp/PASEO DEL JOCKEY copia.webp" alt="demolicion">
                            <div class="back_texto">

                                <P> Demolición de las viejas tribunas y sectores comunes del Jockey Club, más de 50.000m2 intervenidos, demoliendo espacios con estructura metálicas, hormigones, cabreadas metálicas, playones de estacionamientos, salones, boleterías, baños públicos, cisternas.
                                    Seguimiento con personal idóneo, manteniendo sectores y recuperando objetos de patrimonio cultural que serán expuestos en el futuro emprendimiento.
                                </P>
                            </div>
                        </div>



                        <div class="flex-column img-container">

                            <img class="img_centro" src="./assets/images/webp/EX BATALLON.webp" alt="demolicion">
                            <div class="back_texto">

                                <P>Demolición de los cuarteles de batallón 141, más de 45.000m2 de mampostería con estructura metálicas, cabreadas metálicas, playones de hormigón, cisternas.
                                    Seguimiento con geólogo por resolución de derechos humanos.
                                </P>
                            </div>
                        </div>


                    </div>

                    <div class="container nueve" id="nueve" style="padding-top: 100px;">

                    </div>


                </div>
            </div>
        </div>




    </main>

    <?php include 'php/footer.php'; ?>

</body>

</html>