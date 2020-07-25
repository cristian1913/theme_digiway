<?php include('header.php');?>
<div class="blog_portada_">
  <h1>
    <?php $this_category = get_category($cat);?>
    <?php echo $this_category->cat_name; ?>
    <?php if ( is_category() ) : ?>
  </h1>
</div>
<?php endif; ?>

<div class="listado_blog_">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="grid_">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <div class="date_cat">
      <time><?php echo get_the_date('g:i a') ?></time>
      <small><?php echo get_the_category_list(); ?></small>
    </div>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p>
      <?php
      $excerpt = get_the_excerpt();
      $excerpt = substr($excerpt, 0, 90);
      $result = substr($excerpt, 0, strrpos($excerpt, ' '));
      echo $result;
      ?>
    </p>
  </div>
  <?php endwhile; // end of the loop. ?>

  <!-- La navegación -->
  <div class="navegacion">
    <div class="previo"><?php next_posts_link(__( '< Anterior')) ?></div>
    <div class="siguiente"><?php previous_posts_link(__( 'Siguiente >')) ?></div>
  </div>

</div>

<?php include('footer.php');?>
