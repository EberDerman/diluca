
<style>
  .social-links a {
  position: relative;
  text-decoration: none;
  display: inline-block;
  margin: 0 10px;
}

.social-links a:hover::after {
  content: attr(data-content);
  position: absolute;
  bottom: -30px; 
  left: 50%;
  transform: translateX(-50%);
  background-color: #fff;
  color: #000;
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 8px;
  white-space: nowrap;
  font-size: 12px;
  z-index: 1;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.social-links a:hover::before {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  border-width: 6px;
  border-style: solid;
  border-color: transparent transparent #ccc transparent;
}

</style>

 <footer id="footer" class="footer">
 <div class="container">
  <div class="row gy-4">
    <div class="col-lg-12 col-md-12 footer-info text-center">
      <div class="social-links d-flex mt-4 justify-content-center">
        <!-- Ubicación -->
        <a href="https://maps.app.goo.gl/CPMuoiZvH5NByw8J7" class="location" data-content="Rufino Cuervo 1085 piso 2 of 23 - Las Rosas Plaza, Córdoba, Argentina">
          <i class="bi bi-geo-alt"></i>
        </a>
        <!-- Instagram -->
        <a href="https://instagram.com/diluca.constructora" class="instagram" data-content="diluca.constructora">
          <i class="bi bi-instagram"></i>
        </a>
        <!-- Correo Electrónico -->
        <a href="mailto:tucorreo@dominio.com" class="email" data-content="dilucaobrasyservicios@gmail.com">
          <i class="bi bi-envelope"></i>
        </a>
        <!-- Sitio Web -->
        <a href="https://www.dilucaconstructora.com" class="website" data-content="www.dilucaconstructora.com">
          <i class="bi bi-globe"></i>
        </a>
        <!-- Teléfono -->
        <a href="tel:+549-351-903-7342" class="phone" data-content="+549-351-903-7342">
          <i class="bi bi-telephone"></i>
        </a>
      </div>
    </div>
  </div>
</div>



</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>


<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


<script src="assets/javascripts/main.js"></script>

<script src="assets/javascripts/aos-manager.js"></script>