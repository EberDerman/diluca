<style>
  .header {
    transition: top 0.5s ease;
    /* Transición suave de 0.5 segundos */
    position: fixed;
    /* Mantiene el header en la parte superior de la página */
    width: 100%;
    /* Asegura que el header ocupe todo el ancho de la página */
    top: 0;
    /* Posición inicial del header */
    z-index: 1000;
    /* Asegura que el header esté por encima de otros elementos */
    font-family: 'Myriad Pro Bold', sans-serif;;
  }
</style>



<header id="header" class="header d-flex align-items-center">

  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a class="logo d-flex align-items-center">

      <img class="img-fluid " src="../../DiLucaWeb/assets/images/diluca-vid.webp" alt="Diluca">

    </a>
    <nav id="navbar" class="navbar">
      <ul>
        <li class="nav-item">
          <a class="nav-link" href="../public/index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../news/add_news.php">Agregar Noticia</a>
        </li>
        <li class="nav-item">
          <a><?php echo htmlspecialchars($_SESSION['username']); ?>!</a>
        </li>
        <li class="nav-item">
          <a href="../logout.php">Cerrar sesión</a>
        </li>
       
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
<script src="../public/js/script.js"></script>