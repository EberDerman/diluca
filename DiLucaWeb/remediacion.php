<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'php/head.php'; ?>
    <link href="./assets/stylesheets/contenidoEspecializaciones.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/stylesheets/remedicion.css">
    
    <?php include 'php/header.php'; ?>

    <style>
         p {
            text-align: justify;
        }
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

<body>
    <main>
        <div class="remedicion" id="remedicion">
            <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>
            <div class="container espec_imagenes">
                <div class="justify-content-around  row" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                    <div class="col-md-6 mb-5 " >
                        <img alt="remedicion" class="custom-width img-fluid imagen_solapa" src="./assets/images/webp2/17.webp" >
                    </div>
                    <div class="col-md-5" >
                    <div class="img-container mb-3 mt-3">
                        <img class="img-fluid w-50 object-fit-cover m-0 p-0 solapa" src="assets/images/REMEDIA.png" alt="">
                        <div class="texto_solapa">
                                <p>La remediación de suelos es el proceso de tratamiento y restauración de terrenos contaminados para eliminar o reducir los niveles de contaminantes a niveles seguros. Este proceso es fundamental para rehabilitar áreas afectadas por actividades industriales, agrícolas o accidentes ambientales. La coordinación con regulaciones ambientales y la participación de la comunidad son esenciales para el éxito de los proyectos de remediación.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-content-around  row " data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                    <div class="col-md-6 mb-5">
                        <img alt="remedicion" class="custom-width img-fluid" src="./assets/images/webp2/18.webp"  >
                    </div>
                    <div class="col-md-6 mb-5">
                        <img alt="remedicion" class="custom-width img-fluid" src="./assets/images/webp2/19.webp" >
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'php/footer.php'; ?>
</body>

</html>
