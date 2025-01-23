<style>
  .header {
    transition: top 0.5s ease;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
  }
  @font-face {
  font-family: 'Arial Narrow Bold Italic';
  src: url('../assets/fonts/arial-narrow-bold-italic.ttf') format('truetype');
  font-weight: bold;
  font-style: normal;
}


a,
p,
span,
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: 'Arial Narrow Bold Italic';
}

</style>



<header id="header" class="header d-flex align-items-center">

  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="https://dilucaconstructora.com/" class="logo d-flex align-items-center">

      <img class="img-fluid " src="./assets/images/diluca-vid.webp" alt="Diluca">

    </a>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="inicio.php">Inicio</a></li>
        <li><a href="quienesSomos.php">¿Quiénes somos?</a></li>

        <li class="dropdown"><a href="especializaciones.php"><span>Nuestras especializaciones</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="demolicion.php">Demolición</a></li>
            <li><a href="hidricas.php">Hídricas</a></li>
            <li><a href="hormigonado.php">Hormigonado</a></li>
            <li><a href="movimientos.php">Movimientos de suelos</a></li>
            <li><a href="remediacion.php">Remediación de suelos</a></li>
          </ul>
        </li>
        <li><a href="infinito.php">Infinito Open</a></li>
        <li><a href="enMedios.php">En medios</a></li>
        <li><a href="noticias.php">Noticias</a></li>
        <li><a href="clientes.php">Clientes</a></li>
      </ul>
    </nav><!-- .navbar -->


    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header><!-- End Header -->
<!-- End Header -->


<script>
  let lastScrollTop = 0; // Posición inicial del scroll

  window.addEventListener("scroll", function() {
    const header = document.getElementById("header");
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      // Si se desplaza hacia abajo, oculta el header
      header.style.top = "-100px"; // Ajusta el valor según el tamaño de tu header
    } else {
      // Si se desplaza hacia arriba, muestra el header
      header.style.top = "0";
    }

    lastScrollTop = scrollTop; // Actualiza la posición del scroll
  });
</script>