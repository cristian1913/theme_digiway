<?php include('header.php'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="single_portada_">
  <h1>
    <?php the_title(); ?>
    <div class="fecha_cat_single_">
      <time><ion-icon name="calendar-outline"></ion-icon> <?php echo get_the_date(); ?> | <?php echo get_the_date('g:i a') ?></time>
    </div>
  </h1>
</div>

<div class="single_blog_">
  <?php the_content(); ?>
</div>

<?php endwhile; else: ?>
<?php endif; ?>

<?php include('footer.php');?>
