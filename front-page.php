<?php
/*
Template Name: Homepage Custom
*/
//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>

<section class="top desktop" style="background-image: url(<?php the_field('banner_desktop'); ?>)">
  <h1><?php the_title(); ?></h1>
</section>
<section class="top mobile" style="background-image: url(<?php the_field('banner_mobile'); ?>)">
  <h1><?php the_title(); ?></h1>
</section>

<section id="principal">

  <div class="container">

    <div id="destaques">

      <div class="col-1">
        <h2>Enquanto você trabalha, nós cuidamos do escritório.</h2>
        <p>O tempo no trabalho pode ser melhor aproveitado. Escolha um ambiente inspirador, que favorece conexões verdadeiras e transforma a sua relação com o trabalho.</p>
      </div>
      <div class="col-2">
        <ul>
          <li>
            <h4>Estrutura</h4>
            <p>Vários ambientes e conexão wi-fi de alta velocidade</p>
          </li>
          <li>
            <h4>Produtividade</h4>
            <p>Vários ambientes e conexão wi-fi de alta velocidade</p>
          </li>
          <li>
            <h4>Estrutura</h4>
            <p>Vários ambientes e conexão wi-fi de alta velocidade</p>
          </li>
          <li>
            <h4>Comodidade</h4>
            <p>Vários ambientes e conexão wi-fi de alta velocidade</p>
          </li>
          <li>
            <h4>Praticidade</h4>
            <p>Vários ambientes e conexão wi-fi de alta velocidade</p>
          </li>
          <li>
            <h4>Networking</h4>
            <p>Vários ambientes e conexão wi-fi de alta velocidade</p>
          </li>
        </ul>
      </div>
    </div>

    <div id="produtos">
      <div class="produto produto-1">
        <div class="col-1">
          <h3>Espaço Compartilhado</h3>
          <p>Estações fixas de trabalho na área de coworking em contrato mensal para você e seu time. Espaços modernos e inspiradores para sua rotina de trabalho.</p>
          <ul>
            <li><b>1.</b> Autônomos e pequenos times</li>
            <li><b>2.</b> Mesas e cadeiras modernas</li>
            <li><b>3.</b> Conexões e networking</li>
            <li><b>4.</b> Internet wi-fi de alta velocidade</li>
            <li><b>5.</b> Locker e gaveteiro</li>
          </ul>
          <p><a href="#">Entre em contato</a></p>
        </div>
        <div class="col-2">
          <div class="carrossel">

          </div>
        </div>
      </div>

      <div class="produto produto-2">
        <div class="col-1">
          <h3>Salas Privativas</h3>
          <p>Nossas salas privativas mobiliadas são perfeitas para times de todos os portes, com a possibilidade de revezamento entre os membros da equipe. Mobílias modernas, armários e conexão de internet de alta velocidade.</p>
          <ul>
            <li><b>1.</b> Autônomos e pequenos times</li>
            <li><b>2.</b> Mesas e cadeiras modernas</li>
            <li><b>3.</b> Conexões e networking</li>
            <li><b>4.</b> Internet wi-fi de alta velocidade</li>
            <li><b>5.</b> Locker e gaveteiro</li>
          </ul>
          <p><a href="#">Entre em contato</a></p>
        </div>
        <div class="col-2">
          <div class="carrossel">

          </div>
        </div>
      </div>
    </div>

    <?php //the_content(); 
    ?>

  </div>
</section>


<?php get_footer(); ?>