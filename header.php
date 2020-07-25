<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(''); echo '  ';  bloginfo( 'name' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/estilos.css">
<?php wp_head(); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<?php echo get_theme_mod('cierre_head') ?>
</head>
<body <?php body_class(); ?>>
  <!-- Iconos -->
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>


  <div class="solomobile_site_">
    <h2>Importante</h2>
    <p>Este sitio no se podrá ver por ahora en una resolución pequeña (mobile) hasta no terminar todo el desarrollo en la versión Escritorio.</p>
  </div>
  <div class="solomobile_">

  <header class="encabezado_">
    <div class="centrado_">

      <div class="logo_">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php bloginfo('template_directory'); ?>/img/logo_digiway.png" alt="Logo DigiWay">
        </a>
      </div>
      <div class="menu_">
      <ul>
        <li class="menubuscador_icon_"><a href="#"><ion-icon id="toggle" name="search-outline"></ion-icon></a></li>
        <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo_sun.png" alt=""></a></li>
        <li><a href="<?php echo get_home_url(); ?>/contacto/">Contacto</a></li>
        <li><a href="<?php echo get_home_url(); ?>/blog/">Blog</a></li>
        <li><a href="<?php echo get_home_url(); ?>/portafolio/">Portafolio</a></li>
        <li class="dropdown_"><a href="#">Servicios <ion-icon name="chevron-down-outline"></ion-icon></a>
        <div class="dropdown_-content">
          <p><a href="<?php echo get_home_url(); ?>/servicios/customer-experience/">Customer Exprience</a></p>
          <p><a href="<?php echo get_home_url(); ?>/servicios/e-commerce/">e-Commerce</a></p>
          <p><a href="<?php echo get_home_url(); ?>/servicios/e-learning/">e-Learning</a></p>
          <p><a href="<?php echo get_home_url(); ?>/servicios/consultancy/">Consultancy</a></p>
        </div>
      </li>
        <li><a href="<?php echo get_home_url(); ?>/nosotros/">Nosotros</a></li>
        <li><a href="<?php echo get_home_url(); ?>">Inicio</a></li>
      </ul>
      </div>

    </div>
  </header>
  <div id="buscando" class="buscador">
    <div class="formulario_heafors_">
      <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" name="s" value="" id="s"  placeholder="Buscar...">
        <button type="submit" value="Enviar" id="searchsubmit">Buscar</button>
      </form>
    </div>
  </div>
