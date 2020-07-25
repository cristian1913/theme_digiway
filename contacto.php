<?php
/*
Template name: Contacto
*/
include('header.php');
?>

<div class="cover_contacto_">
  <h1>Contacto</h1>
</div>

<div class="cabeza_reinventing_">
  <img src="<?php bloginfo('template_directory'); ?>/img/CONTACTO-84.png" alt="">
  <h5>Contáctanos</h5>
  <h2>Esta es la oportunidad que necesitas<br> para avanzar al mundo digital<span class="colortexto_">.</span></h5>
</div>

<div class="fondo_fomulario_total_">
  <div class="formulario_custom_">
    <div class="form_1_">
      <input type="text" name="" value="" placeholder="Nombres y Apellidos">
      <input type="text" name="" value="" placeholder="Email">
    </div>
    <div class="form_1_">
      <input type="text" name="" value="" placeholder="Empresa">
      <input type="text" name="" value="" placeholder="Teléfono">
    </div>
    <div class="form_1_">
      <input type="text" name="" value="" placeholder="Ciudad">
      <input type="text" name="" value="" placeholder="Área de negocio de interés">
    </div>
    <div class="form_3_">
      <textarea name="mensaje" rows="5" placeholder="Caso (Máxino 140 caracteres)"></textarea>
    </div>
    <div class="check_aceptar_">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Acepto la autorización sobre Protección de datos.</label><br>
      <small>Los datos consignados son privados. Ni Digiway Corp ni ningún ente externo está en la disposición Legal de divulgar esta información. Con estos datos, conformaremos el equipo comercial que te acompañará en la construcción de una propuesta a la medida de tus necesidades.</small>
    </div>
    <div class="form_4_">
      <center>
        <button type="submit" value="Buscar" id="searchsubmit">Iniciar contacto</button>
      </center>
    </div>
  </div>
</div>
<style media="screen">
  .fondo_fomulario_total_ {background-image:  none !important; padding-top: 10px;}
</style>

<div class="mapa_ubicacion_">
  <div class="_elmapa_">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="ubicaciones_">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>

<?php include('footer.php');?>
