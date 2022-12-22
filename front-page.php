<?php
/*
Template Name: Homepage Custom
*/
//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>

<section class="top desktop" style="background-image: url(<?php the_field('banner-desktop'); ?>)">
  <h1><?php the_title(); ?></h1>
</section>
<section class="top mobile" style="background-image: url(<?php the_field('banner-desktop'); ?>); ?>)">
  <h1><?php the_title(); ?></h1>
</section>

<section id="principal">

  <div class="container">

    <div id="destaques">

      <div class="col-1">
        <h2>Nossa estrutura e localização<br />vão surpreender você</h2>
        <p>Nosso espaço é disruptivo e moderno, com escritórios premiuns, espaços compartilhados, salas de reuniões, sala para audiência, recepção, copa, espaço zen, além de contar com auditório, restaurantes e academia no local, a fim de dar conforto e segurança para nossos clientes.</p>

        <p>Estamos ao lado da Justiça Federal, do Fórum Criminal, Juizados Cíveis, próximo à sede da OAB/PR e a menos de 2 km do Tribunal de Justiça.</p>
      </div>
      <div class="col-2">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/infinity.jpg" alt="">
      </div>
    </div>

    <div id="diferenciais">
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
          <p><a href="#" class="btn">Entre em contato</a></p>
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
          <p><a href="#" class="btn">Entre em contato</a></p>
        </div>
        <div class="col-2">
          <div class="carrossel">

          </div>
        </div>
      </div>

      <div class="produto produto-3">
        <div class="col-1">
          <h3>Endereço Comercial/Fiscal</h3>
          <p>Nossas salas privativas mobiliadas são perfeitas para times de todos os portes, com a possibilidade de revezamento entre os membros da equipe. Mobílias modernas, armários e conexão de internet de alta velocidade.</p>
          <ul>
            <li><b>1.</b> Autônomos e pequenos times</li>
            <li><b>2.</b> Mesas e cadeiras modernas</li>
            <li><b>3.</b> Conexões e networking</li>
            <li><b>4.</b> Internet wi-fi de alta velocidade</li>
            <li><b>5.</b> Locker e gaveteiro</li>
          </ul>
          <p><a href="#" class="btn">Entre em contato</a></p>
        </div>
        <div class="col-2">
          <div class="carrossel">

          </div>
        </div>
      </div>
    </div>

    <div id="eventos">
      <h3>O jeito prático, inteligente e econômico de compartilhar conhecimento.</h3>
      <a href="#" class="btn">Conheça nossa área de cursos e eventos</a>
    </div>

    <div id="depoimentos">
      <h3>O que dizem os profissionais que já passaram por aqui</h3>
      <div class="depoimentos">

        <div class="item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-1.jpg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-2.jpg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-3.jpg" alt="">
        </div>

        <div class="item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-1.jpg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-2.jpg" alt="">
        </div>
        <div class="item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-3.jpg" alt="">
        </div>

      </div>
    </div>

    <?php //the_content(); 
    ?>

  </div>
</section>


<?php get_footer(); ?>