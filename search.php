<?php include('header.php');?>

<div class="pagina_pendiente">

  <div class="contenido-resultados">
    <h3><?php printf( __( '<b>Resultados de:</b> %s', 'twentyfourteen' ), get_search_query() );?></h3>
    <?php while (have_posts()) : the_post();?>
      <div class="grid">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">Publicado por: <?php the_author_posts_link(); ?> - <?php echo get_the_date(); ?> | <?php echo get_the_date('g:i a') ?></time>
      <p><?php echo the_excerpt(); ?></p>
    </div>
  <?php endwhile; ?>
  </div>

</div>

<?php include('footer.php');?>
