<?php
/*
Template Name: Contato
*/
//the content of page.php and now you can do what you want.
?>
<?php get_header(); ?>
<div id="principal">

  <div class="container">
    <div class="col-1">
      <h3>Quer saber mais sobre os planos e serviços?</h3>
      <p>Você pode entrar em contato conosco pelo e-mail:</p>
      <p>contato@elospace.com.br</p>
      <p>ou se preferir, pelo whatsapp: 41 98785-1957</p>
    </div>
    <div class="col-2">
      <?php echo do_shortcode('[contact-form-7 id="14" title="Formulário de contato"]'); ?>
    </div>
  </div>

</div>
<?php get_footer(); ?>