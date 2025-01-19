<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'php/head.php'; ?>
  <link rel="stylesheet" href="./assets/stylesheets/quienesSomos.css">
  
  <link rel="stylesheet" href="./assets/stylesheets/contenidoEspecializaciones.css">


</head>
<style>
  .imgQuienes_background {
  position: relative;
  background-color: rgb(216, 189, 37) !important;
  color: black;
  padding-top: 40px;

  height: 90px;
  z-index: -1;
  top: -60px;
  border-radius: 20px;
  width: 150px;


  display: flex;
  /* Activa Flexbox para alinear elementos */
  justify-content: center;
  /* Alinea horizontalmente si es necesario */
  align-items: flex-end;
  /* Alinea verticalmente los elementos al fondo */

}
</style>

<body>
  <?php include 'php/header.php'; ?>


  <main>
    <div id="quienesSomos" class="quienesSomos">
      <div class="logoTitulo">
        <?php include 'php/logo.php'; ?>
      </div>
      <div class="container quienesSomos" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
        <div class="row">
          <!-- Primer contenedor (texto) -->
          <div class="texto-container col-md-6 mb-5">
            <h3>¿QUIÉNES SOMOS?</h3>
            <p>DI LUCA comienza su actividad en el año 1950 fundada por MARINO SIGNORINI, estableciéndose como empresa
              familiar, ofreciendo nuevos servicios que el mercado demandaba en esos tiempos, ya que empezaba una nueva era de
              la construcción y así se formalizarían diferentes empresas referidas al rubro.
              En la actualidad nos respaldan más de 50 años de trayectoria, siendo así, a partir de febrero del 2009, nos insertamos en un nuevo siglo para afrontar cambios dinámicos a nivel mundial: económicos, sociales, industriales y finalmente tecnológicos.
              DI LUCA posee principios y valores con basamentos en el respeto, compromiso, responsabilidad, cordialidad, calidez familiar y eficacia que radican en la confianza de nuestros clientes sostenida en el tiempo.
              El compromiso y búsqueda de la excelencia son las características que se encuentran siempre presentes en todos los miembros de la organización, para ello, contamos con un personal altamente calificado en todas las áreas llevando de esta forma calidad absoluta en la ejecución de cada obra.
            </p>
          </div>

          <!-- Segundo contenedor (imágenes) -->
          <div class="col-md-6">
            <div class="row">
              <div class="col-6 col-md-6 mb-4">
                <div class="img-container"data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                  <img class="imgPersona" src="./assets/images/personas/d1.webp" alt="Eduardo" >
                  <div class="imgQuienes_background"><span>EDUARDO</span></div>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4">
                <div class="img-container"data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                  <img class="imgPersona" src="./assets/images/personas/d2.webp" alt="Lucas">
                  <div class="imgQuienes_background"><span>LUCAS</span></div>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4">
                <div class="img-container"data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                  <img class="imgPersona" src="./assets/images/personas/d3.webp" alt="Axel">
                  <div class="imgQuienes_background"><span>AXEL</span></div>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4">
                <div class="img-container"data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                  <img class="imgPersona" src="./assets/images/personas/d4.webp" alt="Marcos">
                  <div class="imgQuienes_background"><span>MARCOS</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>






      <div id="familia" class="familia">

        <div class="logoTitulo">
          <?php include 'php/logo.php'; ?>
        </div>



        <div class="container_padre">

          <div class="contenedor_trasero"></div>

          <div class="container">

            <div class="row justify-content-between" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
              <!-- Primer contenedor (texto) -->
              <div class="texto-container col-md-6">

                <p>En el competitivo mundo de la construcción y la ingeniería civil, destacarse requiere habilidad técnica y una base sólida
                  de principios y valores como el compromiso, la responsabildad y la confianza. En este contexto, DI LUCA se ha estable-cido como un referente en varias especializaciones.
                  En el corazón de DI LUCA yace una filosofía empresarial
                  que va más allá de la mera ejecución de proyectos, funda-mentada en principios como el respeto, el compromiso, la responsabilidad, la cordialidad, la calidez familiar y la eficacia. Estos pilares guían cada acción y decisión de la
                  empresa.

                  El respeto es fundamental para DI LUCA, entendiéndose como la consideración hacia todas las partes involucradas en cada proyecto. Desde los clientes hasta los trabajadores y
                  el entorno, cada interacción se basa en el respeto mutuo, fomentando relaciones duraderas y satisfactorias.
                  El compromiso en DI LUCA implica una dedicación total a la excelencia en cada tarea. No se trata solo de cumplir con
                  las obligaciones, sino de una promesa de calidad y eficiencia que se refleja en cada detalle de las obras realizadas.
                  La responsabilidad es un valor central en la filosofía de DI LUCA. Conscientes del impacto de sus actividades en el medio ambiente y la comunidad, la empresa asume la responsabilidad de minimizar dicho impacto y contribuir al desarrollo sostenible en cada proyecto.

                </p>
              </div>

              <!-- Segundo contenedor (imágenes) -->
              <div class="col-md-6">

                <div>
                  <div class="img-container flex-column"data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">
                    <div class="back_titulo2 text-center">
                      <p>La Excelencia a través de <br> valores familiares:<br>‘El Caso de DI LUCA’</p>
                    </div>
                    <img class="img_centro" src="./assets/images/img/d5.webp" alt="">

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>





      <div id="familia2" class="familia2">

        <div class="logoTitulo">
          <?php include 'php/logo.php'; ?>
        </div>


        <div class="container_padre">

          <div class="contenedor_trasero"></div>

          <div class="container">
            <div class="row justify-content-between">
              <!-- Primer contenedor (texto) -->
              <div class="texto-container col-md-6"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">

                <p>La cordialidad y la calidez familiar distinguen el trato humano en DI LUCA. La empresa se concibe como una gran familia donde cada miembro es valorado y respetado.
                  Esta atmósfera de camaradería se refleja en las interacciones con los clientes, creando un ambiente de confianza y colabo-ración mutua.
                  La eficacia es el resultado natural de combinar estos valores.
                  En DI LUCA, la eficacia se manifiesta en la entrega puntual de los proyectos, la satisfacción del cliente y la calidad de cada obra. Este compromiso con la excelencia sostiene la reputación de la empresa, gracias a la confianza de sus clientes.
                  Para mantener su alto estándar de calidad, DI LUCA cuenta con un equipo altamente calificado en todas las áreas. La formación continua y el desarrollo profesional son pilares en la gestión de recursos humanos, garantizando la excelencia en cada etapa
                  de los proyectos.
                  DI LUCA es un ejemplo de cómo el compromiso y los valores pueden ser la clave del éxito en cualquier industria. Su enfoque garantiza la calidad de sus obras y fortalece las relaciones con sus clientes y su compromiso con la comunidad y el medio am-biente. En un mundo donde la excelencia es cada vez más
                  difícil de alcanzar, DI LUCA demuestra que es posible, siempre y cuando se tenga claro el camino a seguir.
                </p>
              </div>

              <!-- Segundo contenedor (imágenes) -->
              <div class="col-md-6 d-flex flex-column justify-content-center">


                <div class="img-container justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000" >

                  <img class="img_centro_sola" src="./assets/images/img/d6.webp" alt="">

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>






    </div>

  </main>

  <?php include 'php/footer.php'; ?>


</body>

</html>