<?php get_header(); ?>

<div id="masthead">
  <img src="<?php the_field('banner_topo'); ?>" alt="">
</div>

<div id="principal">
  <div class="container">
    <div class="conteudo">

      <div class="informacoes top">
        <div class="col-1">
          <h2>Sobre o Evento</h2>
          <p><strong>Data:</strong> <?php the_field('data'); ?></p>
          <p><strong>Local:</strong> <?php the_field('local'); ?></p>
          <p><strong>Valor:</strong> <?php the_field('valor'); ?></p>
          <p><?php the_field('infos_adicionais'); ?></p>
        </div>
        <div class="col-2">
          <div class="inscrevase">
            <h2>Ficou interessado? Então entre em contato agora mesmo e garanta sua vaga!</h2>
            <?php echo do_shortcode('[contact-form-7 id="125" title="Cadastro Curso"]'); ?>
          </div>
        </div>
      </div>

      <div class="informacoes">
        <div class="col-1">
          <h3>O que é?</h3>
        </div>
        <div class="col-2">
          <?php the_field('diferenciais'); ?>
        </div>
      </div>

      <div class="informacoes professor">
        <div class="col-1">
          <h3>Como Funciona?</h3>
        </div>
        <div class="col-2">
          <div class="img">
            <img src="<?php the_field('foto_professor'); ?>" alt="">
          </div>
          <div class="info">
            <?php the_field('professor'); ?>
          </div>
        </div>
      </div>

      <div class="informacoes empresa">
        <div class="col-1">
          <h3>Benefícios para as empresas participantes:</h3>
        </div>
        <div class="col-2">
          <div class="img">
            <img src="<?php the_field('logo_empresa'); ?>" alt="">
          </div>
          <div class="info">
            <?php the_field('empresa'); ?>
          </div>
        </div>
      </div>

      <div class="informacoes clientes">
        <div class="col-1">
          <h3>Fornecedores:</h3>
        </div>
        <div class="col-2">
          <?php
          $images = acf_photo_gallery('clientes', $post->ID);

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

      <div class="informacoes">
        <div class="col-1">
          <h3>Qual é o conteúdo programático do Workshop? </h3>
        </div>
        <div class="col-2">
          <?php the_field('conteudo_programatico'); ?>
        </div>
      </div>


    </div>
  </div>
</div>


<?php get_footer(); ?>