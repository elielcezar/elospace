<?php
/*
Template Name: Eventos
*/
//the content of page.php and now you can do what you want.
?>
<?php get_header(); ?>

<div id="masthead">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div id="principal">

  <div class="container">
    <?php
    $loop = new WP_Query(array(
      'post_type' => 'evento',
      'order'    => 'ASC'
    ));
    if ($loop->have_posts()) :
      while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="curso">
          <div class="col-1">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
            </a>
          </div>
          <div class="col-2">
            <h2><?php the_title(); ?></h2>
            <p><strong>Data:</strong> <?php the_field('data'); ?></p>
            <p><strong>Horário:</strong> <?php the_field('horario'); ?></p>
            <p><strong>Local:</strong> <?php the_field('local'); ?></p>            
            <p><?php the_field('infos_adicionais'); ?></p>
            <p><a href="<?php the_permalink(); ?>" class="btn">
                Saiba mais <i class="fa-solid fa-right-long"></i>
              </a></p>
          </div>
        </div>
    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </div>
</div>

<?php get_footer(); ?>