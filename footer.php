<?php wp_footer(); ?>

<footer>
  <div class="centrado_">
  <div class="cabeza_footer_">
    <h2>Suscríbete a nuestro Newslleter<span class="colortexto_">.</span></h2>
  </div>
  <div class="formuario_footer_">
    <input type="text" placeholder="Escribe tu email">
    <button class="boton_newslleter_" type="submit" form="form1" value="Submit">Suscribirme</button>
  </div>


  <div class="mods_footer_list_">
    <div class="grid_">
      <h4>Contacto</h4>
      <p><b>Bogotá, Colombia</b> <br>Carrera  24 #83A - 30</p>
    </div>
    <div class="grid_">
      <h4>.</h4>
      <p><b>Quito, Ecuador</b><br>
      Reina Victoria N25-33 y Av. Cristobal Colón, Edificio Banco Guayaquil Oficina 807.</p>
    </div>
    <div class="grid_">
      <h4>Enlaces rápidos</h4>
      <li><a href="<?php echo get_home_url(); ?>/nosotros/">Sobre nosotros</a></li>
      <li><a href="<?php echo get_home_url(); ?>/servicios/">Nuestros servicios</a></li>
      <li><a href="<?php echo get_home_url(); ?>/contactenos/">Contáctenos</a></li>
      <li><a href="<?php echo get_home_url(); ?>/blog/">Blog</a></li>
    </div>
    <div class="grid_">
      <h4>Síguenos</h4>
      <p>Descubre nuestro contenido en las redes sociales.</p>
    </div>
  </div>

  <div class="mods_footer_list_">
    <div class="grid_">
      <h3><span class="colortexto_">(+57) (1)</span> 7469081</h3>
    </div>
    <div class="grid_">
      <h3><span class="colortexto_">(+593)</span> 9999 37 365</h3>
    </div>
    <div class="grid_">

    </div>
    <div class="grid_">
      <a href="#" class="color_link_redes_"><ion-icon name="logo-facebook"></ion-icon></a>
      <a href="#" class="color_link_redes_"><ion-icon name="logo-instagram"></ion-icon></a>
      <a href="#" class="color_link_redes_"><ion-icon name="logo-twitter"></ion-icon></a>
    </div>
  </div>

</div>
</footer>

<div class="footer_end_text_">
  <div class="centrado_2_">
    <div class="grid_">
      <p>©2020 DIGIWAY TODOS LOS DERECHOS RESERVADOS.</p>
    </div>
    <div class="grid_">
      <img src="<?php bloginfo('template_directory'); ?>/img/datagran.png" alt="">
      <img src="<?php bloginfo('template_directory'); ?>/img/camara_colombiana.png" class="logocamara_" alt="">
      <h5>Aliados</h5>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!-- Buscador -->
<script type="text/javascript">
$("#toggle").click(function() {
  $(this).toggleClass("on");
  $("#buscando").slideToggle();
});
</script>
<a href="#" class="btg-button btg-button-1 btg-topRight"><ion-icon name="logo-whatsapp"></ion-icon> Contáctenos</a>

</body>
</html>
