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
        <h2>Sala de Reunião Elospace</h2>
        <h3> (até 5 lugares)</h3>
        <p class="preco">Período (08h) - R$300,00 | Período (04h) - R$150,00</p>
        <p><strong>Benefícios:</strong></p>
        <ul>
          <li>Televisão</li>
          <li>Ar-condicionado individual</li>
          <li>Wi-fi (internet de alta velocidade)</li>
          <li>Mobiliário ergonômico</li>
          <li>Privacidade</li>
          <li>Água</li>
          <li>Café</li>
        </ul>
      </div>
      <div class="col-2">
        <img src="https://www.elospace.com.br/wp-content/uploads/2023/01/sala-1.jpg" alt="">
      </div>

    </div>


    <div class="conteudo">
      <div class="col-1">
        <h2>Sala de Reunião Business</h2>
        <h3> (até 10 lugares)</h3>
        <p class="preco">Período (08h) - R$800,00 | Período (04h) - R$400,00</p>
        <p><strong>Benefícios:</strong></p>
        <ul>
          <li>Televisão</li>
          <li>Ar-condicionado individual</li>
          <li>Wi-fi (internet de alta velocidade)</li>
          <li>Mobiliário ergonômico</li>
          <li>Privacidade</li>
          <li>Água</li>
          <li>Café</li>
        </ul>
        <p>&nbsp;</p>
      </div>
      <div class="col-2">
        <img src="https://www.elospace.com.br/wp-content/uploads/2023/01/sala-2.jpg" alt="">
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