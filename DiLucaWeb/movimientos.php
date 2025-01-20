<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'php/head.php'; ?>
    <link rel="stylesheet" href="assets/stylesheets/contenidoEspecializaciones.css">

    <?php include 'php/header.php'; ?>
    <style>
        .img-cnh {
            height: 140vh;
            width: auto;
        }

        @media (max-width: 1402px) {
            .img-cnh {
                height: 130vh;
                width: auto;
            }
        }

        @media (max-width: 1366px) {
            .img-cnh {
                height: 130vh;
                width: auto;
            }
        }

        @media (max-width: 1024px) {
            .img-cnh {
                height: 130vh;
                width: auto;
            }
        }

        @media (max-width: 768px) {
            #col-1 {
                display: none;
            }

            #col-2 {
                margin: 0 auto;
            }
        }
    
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

        <section class="hidricas" id="hidricas">
            <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>
            <div class="container">
                <div class="row justify-content-between" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                    <div class="col-md-4 texto-container">
                        <h3>MOVIMIENTO DE SUELOS</h3>
                        <h4>Año 2010-2018</h4>
                        <p>Excavaciones en distintos predios ubicados en la Ciudad de Córdoba, más de 350.000m³ de excavación en subsuelos hasta 4 niveles.<br><br>Realizando logística en más de 24.000 viajes de suelo a distintos puntos autorizados en la Ciudad.<br><br>Equipos utilizados: Excavadoras sobre orugas, pala cargadora, camiones de gran envergadura con cajas volcadoras por más de 15m³.</p>
                    </div>
                    <div class="col-md-7">
                        <div class="img-container flex-column" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                            <div class="back_titulo"><span>CARDINALES</span></div>
                            <img alt="Movimiento de suelos en Córdoba" src="./assets/images/hidricas/d21.webp" class="img_centro">
                            <div class="back_texto">
                                <p>El movimiento de suelos implica la excavación, transporte, colocación y compactación de tierras y rocas para preparar el terreno para la construcción. Este proceso es fundamental para la creación de cimientos estables y el desarrollo de infraestructuras. El uso de maquinaria adecuada y la implementación de técnicas de ingeniería avanzadas son esenciales para superar estos desafíos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="catorce" id="catorce">
            <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="mb-5 col-6 d-md-block d-none" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000" id="col-1">
                        <img alt="Imagen de CNH Argentina" src="./assets/images/img/d11.webp" class="img-fluid img-cnh mb-3 h-100">
                    </div>
                    <div class="col-md-6 col-12" id="col-2">
                        <div class="img-container mb-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                            <div class="back_titulo"><span>CNH ARGENTINA S.A.</span></div>
                            <div class="back_texto" style="z-index: 2;">
                                <p>Ubicación: Ruta Nac. 9, km. 695, Ferreyra, Pcia. de Córdoba. Los rubros de obra a realizar en esta etapa se encuentran detallados en la Planilla de Cotización que se adjunta al presente, y que son los siguientes:</p>
                                <ul>
                                    <li>Retiro de capa superior de 60 cm</li>
                                    <li>Escarificación y agregado de cal.</li>
                                    <li>Relleno y compactación.</li>
                                    <li>Suelo cemento.</li>
                                </ul>
                                <h6>MOVIMIENTO DE SUELOS</h6>
                                <p>Los trabajos a ejecutar dentro de este rubro comprenden todas las áreas a ser afectadas por la construcción del edificio de las plantas nave A y nave B, más las áreas de las calles y accesos en el sector PAD y estacionamiento.</p>
                            </div>
                        </div>
                        <img alt="Imagen de proyecto en CNH" src="./assets/images/img/d5.webp" class="img-fluid mb-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                    </div>
                </div>
            </div>
        </section>



        <div class="hidricas" id="hidricas">
            <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>
            <div class="container">

                <div class="row justify-content-between responsibe">
                    <div class="col-md-4 texto-container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                        <h3>MOVIMIENTO DE SUELOS</h3>
                        <h4>Año 2010-2018</h4>
                        <p>Excavaciones en distintos predios ubicados en la Ciudad de Córdoba, más de 350.000m³ de excavación en subsuelos hasta 4 niveles.<br><br>Realizando logística en más de 24.000 viajes de suelo a distintos puntos autorizados en la Ciudad.<br><br>Equipos utilizados: Excavadoras sobre orugas, pala cargadora, camiones de gran envergadura con cajas volcadoras por más de 15m³.</p>
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                        <div class="flex-column img-container">
                            <div class="back_titulo"><span>SANATORIO ALLENDE CERRO.</span></div>
                            <img class="img_centro" src="./assets/images/img/d28.webp" alt="demolicion">
                            <div class="back_texto">
                                <p>
                                    La construcción del Sanatorio se realizó en tres etapas y en distintos años. Se iniciaron las tareas con la demolición de viejas estructuras y el desmonte arbóreo para luego la demarcación del perímetro a excavar, con un total de 115.000m3 para 2 niveles de subsuelos. La mayor cantidad del suelo retirado fue arena, generando un gran trabajo de ingeniera para contener taludes perimetrales hacia calles aledañas.
                                    Esta obra ocupo al menos 3 excavadoras, pala mecánica, camiones de gran porte con bateas de 22 a 30m3, transportando el suelo a más de 25km para su disposición final.

                                </p>
                            </div>
                        </div>

                        <div class="flex-column img-container">
                            <div class="back_titulo"><span>ECIPSA TOWER – GRUPO ECIPSA.-</span></div>
                            <img class="img_centro" src="./assets/images/img/d29.webp" alt="demolicion">
                            <div class="back_texto">

                                <p>Excavaciones de la 2da y 3ra torre del emprendimiento, aproximadamente unos 85.000m3 que dieron inicio a nuestra 3ra generación familiar.
                                    Es una obra que se ejecutó con dos excavadoras y unos 15 camiones volcadores, transportando el suelo hacia Valle Escondido (otro emprendimiento de Ecipsa).-
                                    Con una profundidad máxima de 9,00mt, constituyendo rampas y doble movimientos.
                                </p>
                            </div>
                        </div>

                        <div class="flex-column img-container">
                            <div class="back_titulo"><span>PASEO DEL JOCKEY</span></div>
                            <img class="img_centro" src="./assets/images/img/d27.webp" alt="demolicion">
                            <div class="back_texto">

                                <P>se ejecutaron demoliciones de tribunas, pavimentos, sectores comunes, caballerizas logrando el área donde se emplazó el mall comercial. Luego se avanzó con la excavación en un área de 25.000m2 a más de 7,00mt de profundidad, aproximadamente 175.000m3 en el cual se desarrolló dos subsuelos y el tercero técnico.
                                    Gran parte de este material fue dispuesto en el ovalo central de la pista de turf, ubicadas en el sector posterior al mall comercial. Nivelado con maquinaria correspondiente.
                                </P>
                            </div>
                        </div>





                        <div class="flex-column img-container">
                            <div class="back_titulo"><span>CARDINALES NUEVO SUQUÍA</span></div>
                            <img class="img_centro" alt="Cardinales Cofico GNI" src="./assets/images/img/d26.webp">
                            <div class="back_texto">

                                <P>Excavaciones en distintos predios ubicados en la Ciudad de Córdoba, más de 350.000m3 de excavación en subsuelos hasta 4 niveles. Realizando logística en más de 24.000 viajes de suelo a distintos puntos autorizados en la Ciudad.</P>

                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>


        <div class="container once" id="once" style="padding-top:100px">
        </div>




    </main>
    <?php include 'php/footer.php'; ?>
</body>

</html>