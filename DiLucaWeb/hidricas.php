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

<main>
    <div class="hidricas" id="hidricas">
        <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>
        <div class="container">

            <div class="row justify-content-between responsibe">
                <div class="col-md-4 texto-container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                    <h3>HÍDRICA</h3>
                    <h4>Año 2016-2017</h4>
                    <p>Las obras hídricas comprenden la planificación, diseño, construcción y mantenimiento de infraestructuras relacionadas con el manejo del agua. Estas infraestructuras incluyen sistemas de abastecimiento de agua, alcantarillado, drenaje pluvial, canales, embalses y plantas de tratamiento de agua asegurando el suministro de agua potable, el manejo de aguas residuales y la prevención de inunda-ciones. También son cruciales para la agricultura, la industria y la protección del medio ambiente.</p>
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                    <div class="flex-column img-container">
                        <div class="back_titulo"><span>LA ORACIÓN <BR class="">Provincia de Córdoba - Inriville.-</span></div>
                        <img alt="hidricas" src="./assets/images/hidricas/laOración.png" class="img_centro">
                        <div class="back_texto">
                            <p>Se ejecutó el proyecto en zonas 100% inundadas por excedentes hidráulicos desembocando al rio Ctalamuchita. Esta obra comprendió unos 145.700m3 de excavación en canal, la ejecución de alcantarillas pre moldeados, terraplenes de contención y estructuras de disipación.
                                Es una obra que se ejecutó con dos excavadoras de 22tn y capacidad de 2m3 en balde, pala cargadora de 3m3, camiones de gran capacidad de carga 20 – 25 m3 y un equipos de 10 personas para tareas manuales.
                                Con una profundidad máxima de 2,90mt.
                            </p>
                        </div>
                    </div>

                    <div class="flex-column img-container">
                        <div class="back_titulo"><span>EL CHAJÁ, LEONES <br>Consorcio Canalero Dante Rosano - Villa Elisa.- </span></div>
                        <img alt="demolicion" src="./assets/images/img/d22.webp" class="img_centro">
                        <div class="back_texto">

                            <p>Se ejecutó el proyecto en zonas 100% inundadas por excedentes hidráulicos desembocando al rio Ctalamuchita. Esta obra comprendió unos 125.000m3 de excavación en canal, la ejecución de alcantarillas pre moldeados, terraplenes de contención y estructuras de disipación.
                                Es una obra que se ejecutó con dos excavadoras de 22tn y capacidad de 2m3 en balde, pala cargadora de 3m3, camiones de gran capacidad de carga 20 – 25 m3 y un equipos de 10 personas para tareas manuales.
                                Con una profundidad máxima de 3,50mt.
                                Equipos utilizados: Excavadoras sobre orugas, camiones doble diferencial con cajas volcadoras por más de 20m3.
                            </p>
                        </div>
                    </div>

                    <div class="flex-column img-container">
                        <div class="back_titulo"><span>CUENCA GARIONE <br>Consorcio Canalero Marcos Juarez.- </span></div>
                        <img alt="demolicion" src="./assets/images/img/d23.webp" class="img_centro">
                        <div class="back_texto">
                            <p>Una obra emblemática en la región de Marcos Juárez, llevando soluciones a excedentes
                                hidráulicos que amenazaban a la Ciudad y producción agropecuaria. La sistematización de la
                                cuenca a lo largo de 44km de extensión. Excavando más de 180.000m3, ejecutando hormigones en
                                situ de cabezales con hormigón H21.- Además se instalaron alcantarillas de pre moldeados de
                                hormigón armado, realizamos la intervención de RN9, instalando pre moldeados y restituyendo
                                aporte de suelo y pavimentación correspondiente.
                                Es una obra que se ejecutó con dos excavadoras de 22tn y capacidad de 2m3 en balde, pala
                                cargadora de 3m3, camiones de gran capacidad de carga 20 – 25 m3 y un equipos de 10 personas
                                para tareas manuales.
                            </p>
                        </div>
                    </div>


                    <div class="flex-column img-container">
                        <div class="back_titulo"><span>LA REDENCIÓN, MARCOS PAZ <br>Consorcio Canalero Dante Rosano – Villa Elisa </span></div>
                        <img alt="hidricas" src="./assets/images/img/d24.webp" class="img_centro">
                        <div class="back_texto">
                            <p>Se ejecutó el proyecto en zonas 100% inundadas por excedentes hidráulicos desembocando
                                al rio Ctalamuchita. Esta obra comprendió unos 89.700m3 de excavación en canal, la ejecución de
                                alcantarillas pre moldeados, terraplenes de contención y estructuras de disipación.
                                Es una obra que se ejecutó con dos excavadoras de 22tn y capacidad de 2m3 en balde, pala
                                cargadora de 3m3, camiones de gran capacidad de carga 20 – 25 m3 y un equipos de 10 personas
                                para tareas manuales.
                                Con una profundidad máxima de 2,90mt.
                            </p>
                        </div>
                    </div>


                    <div class="flex-column img-container">
                        <div class="back_titulo"><span>CANALIZACIÓN SUB CUENCA IV.-<br>Provincia de Córdoba - Corral De Bustos</span></div>
                        <img alt="hidricas" src="./assets/images/hidricas/corralDeBustos.png" class="img_centro">
                        <div class="back_texto">
                            <p>Ejecución de la primer cuenca de sistematización de la zona, Sub cuenca N° 4, una obra de 10 km de extensión y otros 5km de re adecuación. Además se instalaron alcantarillas de pre moldeados de hormigón armado. Con seguimiento diario de Ingeniería.
                                Es una obra que se ejecutó con dos excavadoras de 22tn y capacidad de 2m3 en balde.
                                Con una profundidad máxima de 2,80mt en zonas de loma.
                            </p>
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

</html>