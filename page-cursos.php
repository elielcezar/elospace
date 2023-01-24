<?php
/*
Template Name: Cursos
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
      'post_type' => 'curso',
      'order'    => 'ASC'
    ));
    if ($loop->have_posts()) :
      while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="curso">
      <div class="col-1">
        <h2><?php the_title(); ?></h2>
        <p><strong>Quando:</strong> <?php the_field('quando'); ?></p>
        <p><strong>Local:</strong> <?php the_field('local'); ?></p>
      </div>
      <div class="col-2">
        <p><strong>Instrutor:</strong> <?php the_field('instrutor'); ?></p>
      </div>
    </div>
    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </div>
</div>

<?php get_footer(); ?>