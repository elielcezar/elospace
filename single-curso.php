<?php get_header(); ?>

<div id="masthead">
  <img src="<?php the_field('banner_topo'); ?>" alt="">
</div>

<div id="principal">
  <div class="container">
    <div class="conteudo">
      <div class="informacoes">
        <div class="col-1">
          <?php the_field('informacoes_principais'); ?>
        </div>
        <div class="col-2">
          <?php the_post_thumbnail(); ?>
        </div>
      </div>

      <div class="informacoes">
        <div class="col-1">
          <h3>Sobre o Curso</h3>
        </div>
        <div class="col-2">
          <?php the_field('sobre_o_curso'); ?>
        </div>
      </div>

      <div class="informacoes">
        <div class="col-1">
          <h3>Para quem se Destina?</h3>
        </div>
        <div class="col-2">
          <?php the_field('para_quem_se_destina'); ?>
        </div>
      </div>

      <div class="informacoes">
        <div class="col-1">
          <h3>O que você vai aprender?</h3>
        </div>
        <div class="col-2">
          <?php the_field('o_que_voce_vai_aprender'); ?>
        </div>
      </div>

      <div class="informacoes">
        <div class="col-1">
          <h3>Instrutor</h3>
        </div>
        <div class="col-2">
          <?php the_field('instrutor'); ?>
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