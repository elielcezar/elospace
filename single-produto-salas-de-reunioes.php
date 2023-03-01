<?php get_header(); ?>

<div id="masthead">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div id="principal">
  <div class="container">

    <?php        
        if( have_rows('descricao') ):            
            while( have_rows('descricao') ) : the_row();                
                $sala = get_sub_field('sala');
                $imagem = get_sub_field('imagem');                
      ?>
         <div class="conteudo">
            <div class="col-1">
              <h3><?php echo $sala; ?></h3>
            </div>
            <div class="col-2">
              <img src="<?php echo $imagem; ?>" alt="">  
            </div>
          </div>
      <?php endwhile;
        else :            
        endif;
      ?>   

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