<?php
/*
Template Name: Contato
*/
//the content of page.php and now you can do what you want.
?>
<?php get_header(); ?>

<!--div id="masthead">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div-->

<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.020543105398!2d-49.259560584372835!3d-25.404122938093735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce7862b294883%3A0xb9d6d460b0f2a8a4!2sInfinity%20Prime%20Offices!5e0!3m2!1spt-BR!2sbr!4v1674129631414!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div id="principal">

  <div class="container">
    <div class="col-1">
      <h3>Quer saber mais sobre os planos e serviços?</h3>
      <p>Você pode entrar em contato conosco pelo e-mail:</p>
      <p>comercial@elospace.com.br</p>
      <p>ou se preferir, pelo whatsapp: 41 98785-1957</p>
    </div>
    <div class="col-2">
      <?php echo do_shortcode('[contact-form-7 id="14" title="Formulário de contato"]'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>