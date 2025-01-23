<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'php/head.php'; ?>
    <link href="./assets/stylesheets/contenidoEspecializaciones.css" rel="stylesheet">

    <style>
        .texto-entretenimiento {
            border: solid 2px #fff;
            border-radius: 30px;
            padding: 30px;
            background-color: rgb(40, 40, 75);
            margin: 0 auto;
            max-width: calc(100% - 40px);
        }


        p {
            text-align: justify;

        }

        @media (max-width: 767px) {
            .responsibeImg {
                scale: 1.3;

            }
            .responsibeImg img:nth-child(1) {

                padding-top: 50px;
            }
          
        }
    </style>
    <?php include 'php/header.php'; ?>
</head>
<main>
    <div class="infinito" id="infinito">
        <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>
        <div class="mb-5 container_padre">
            <div class="contenedor_trasero2"></div>
            <div class="container ">
                <div class="align-items-center justify-content-between row m-1" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                    <div class="align-items-center d-flex flex-column justify-content-center texto-container2 col-md-6">
                        <img alt="" src="./assets/images/infinitoOpen.webp" height="130vh" width="130wh">
                        <p>La obra más importante de los últimos 40 años en el sector de ENTRETENIMIENTO Y TURISMO, más de 400.000 m2 intervenidos, 350.000 m3 de suelo movido, ejecución actual de pavimentos y obras de infraestructura.</p>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <div class="img-container align-items-end d-flex flex-column">

                                <img alt="" src="./assets/images/webp2/INFINITO.webp" class="img-fluid w-100 h-100 object-fit-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>
        <div class="container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000" style="color: #ff0;">
            <div class="align-items-center d-flex flex-column justify-content-center texto-container2 m-1 mb-5">
                <p>“INFINITO OPEN” NO SÓLO SE DISTINGUE POR SU IMPRESIONANTE ESCALA, ABARCANDO MÁS DE 400.000M2, SINO TAMBIÉN POR LA COMPLEJIDAD DE SU EJECUCIÓN, QUE IMPLICA EL MOVIMIENTO DE 350.000M3 DE SUELO Y LA IMPLEMENTACIÓN DE AVANZADAS OBRAS DE PAVIMENTACIÓN E INFRAESTRUCTURA. ESTE PROYECTO SERÁ UN TESTIMONIO DE LA CAPACIDAD HUMANA PARA TRANSFORMAR PAISAJES Y CREAR AMBIENTES QUE OFRECEN EXPERIENCIAS INOLVIDABLES A MILLONES DE VISITANTES ANUALMENTE.</p>
            </div>
        </div>

        <div class="veintidos" id="veintidos">
            <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>
            <div class="container_padre">
                <div class="contenedor_trasero"></div>
                <div class="container flex-column-reverse">
                    <div class="flex-column-reverse flex-md-row justify-content-between m-5 row" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                        <div class="img-container col-md-6 responsibeImg">
                            <img alt="" src="./assets/images/webp2/23.webp" class="img-fluid w-100 h-100 object-fit-cover mb-5">
                            <img alt="" src="./assets/images/webp2/24.webp" class="mb-5 img-fluid w-100 h-100 object-fit-cover">
                        </div>
                        <div class="mb-5 align-content-center col-md-6 text-center texto-container2">
                            <p>En el sector de entretenimiento y turismo, los últimos 40 años han sido testigos de transformaciones monumentales que han redefinido la experiencia del visitante y han revolucionado las infraestructuras de ocio a nivel mundial.</p>
                            <p>Entre las obras más destacadas en este periodo se encuentra "Infinito Open", un proyecto que marcará un antes y un después en la manera de concebir y desarrollar espacios destinados al entretenimiento y al turismo.</p>
                            <p>Uno de los aspectos más destacados de "Infinito Open" es su compromiso con la innovación y la tecnología. Desde su concepción, el proyecto incorporará soluciones tecnológicas avanzadas para mejorar la experiencia del visitante y la eficiencia operativa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'php/footer.php'; ?>