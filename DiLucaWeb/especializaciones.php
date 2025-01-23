<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'php/head.php'; ?>
    <link href="./assets/stylesheets/especializaciones.css" rel="stylesheet">
    <?php include 'php/header.php'; ?>
</head>

<body>
    <main>
        <div class="especializaciones" id="especializaciones">
            <div class="logoTitulo"><?php include 'php/logo.php'; ?></div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-5 d-md-block d-none">
                        <div class="row">
                            <div class="col-6 col-md-12 mb-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                                <div class="img-container">
                                    <img alt="Máquina 1" class="imgMaquina" src="./assets/images/webp2/13.webp">
                                </div>
                            </div>
                            <div class="col-6 col-md-12 mb-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                                <div class="img-container">
                                    <img alt="Máquina 2" class="imgMaquina" src="./assets/images/webp2/14.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 lista-container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000" id="lista-container">
                        <h3>NUESTRAS ESPECIALIZACIONES</h3>
                        <ul>
                            <li><a href="demolicion.php">*DEMOLICIÓN</a></li>
                            <li><a href="hidricas.php">*HÍDRICAS</a></li>
                            <li><a href="hormigonado.php">*HORMIGONADO</a></li>
                            <li><a href="movimientos.php">*MOVIMIENTO DE SUELOS</a></li>
                            <li><a href="remediacion.php">*REMEDIACIÓN DE SUELOS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'php/footer.php'; ?>
</body>

</html>
