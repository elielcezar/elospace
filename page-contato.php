<?php
/*
Template Name: Contato
*/
//the content of page.php and now you can do what you want.
?>
<?php get_header(); ?>
<div id="principal">

  <div class="container">
    <div class="coluna-1">
      <?php echo do_shortcode('[contact-form-7 id="7810" title="Contato"]'); ?>
    </div>
    <div class="coluna-2">
      <p>Você pode entrar em contato conosco pelo e-mail:</p>
      <p>escreva@litercultura.com.br</p>
      <p>Pela nossa página no Facebook:</p>
      <p><a href="http://www.facebook.com.br/litercultura">http://www.facebook.com.br/litercultura</a> </p>
    </div>
  </div>

</div>
<?php get_footer(); ?>