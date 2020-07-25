<?php
/*
Template name: Single Tempral Portafolio
*/

include('header.php');
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="portafolio_portada_">
  <center><h1><?php the_title(); ?></h1></center>
</div>

<div class="single_portafolio_">
  <?php the_content(); ?>
</div>

<?php endwhile; else: ?>
<?php endif; ?>


<?php include('footer.php');?>
