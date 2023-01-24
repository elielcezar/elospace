<?php get_header(); ?>

<div id="masthead">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div id="principal">
  <div class="container">
    <div class="conteudo">
      <div class="col-1">
        <?php the_content(); ?>
      </div>
      <div class="col-2">
        <div class="carrossel">
          <?php
          $images = acf_photo_gallery('galeria-de-imagens', $post->ID);

          if (count($images)) :
            foreach ($images as $image) :
              $full_image_url = $image['full_image_url'];
          ?>
          <div class="item">
            <img src="<?php echo $full_image_url; ?>" alt="">
          </div>
          <?php endforeach;
          endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="contato">
  <div class="container">
    <div class="col-1">
      <h2>Ficou interessado? Então entre em contato agora mesmo!</h2>
    </div>
    <div class="col-2">
      <?php echo do_shortcode('[contact-form-7 id="14" title="Formulário de contato"]'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>