<?php
/*
Template Name: Homepage Custom
*/
//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>

<section class="banners top desktop carrossel">
  <?php
  $images = acf_photo_gallery('banner-desktop', $post->ID);

  if (count($images)) :
    foreach ($images as $image) :
      $full_image_url = $image['full_image_url'];
      $url = $image['url'];
  ?>
  <div class="item">
    <a href="<?php echo $url; ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
  </div>
  <?php endforeach;
  endif; ?>
</section>

<section class="banners top mobile carrossel">
  <?php
  $images = acf_photo_gallery('banner-mobile', $post->ID);
  if (count($images)) :
    foreach ($images as $image) :
      $full_image_url = $image['full_image_url'];
      $url = $image['url'];
  ?>
  <div class="item">
    <a href="<?php echo $url; ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
  </div>
  <?php endforeach;
  endif; ?>
</section>

<section id="principal">

  <div id="destaques">
    <div class="container">
      <div class="content">
        <div class="col-1">
          <h2>Nossa estrutura e localização<br />vão surpreender você</h2>
          <p>Nosso espaço é disruptivo e moderno, com escritórios premiuns, espaços compartilhados, salas de reuniões, gravação de podcast, recepção, copa, espaço zen, além de contar no condomínio com; auditório, cafés, salões de beleza, restaurante e academia no local, a fim de dar conforto e segurança para nossos clientes.</p>
          <p>Estamos localizados no condomínio Infinity Prime Offices - Torre C - Sucess, no coração do bairro Cabral, ao lado da Justiça Federal e há apenas 02 quarteirões do Terminal de Ônibus do Cabral.</p>
        </div>
        <div class="col-2">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/infinity.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div id="diferenciais">
    <div class="container">
      <ul>
        <li class="acesso24h">
          <h4>ACESSO 24h</h4>
          <p>Portaria e segurança 24h, acesso somente com cadastro e por reconhecimento facial.</p>
        </li>
        <li class="estrutura">
          <h4>ESTRUTURA</h4>
          <p>Salas Privativas, Estações de Trabalho, Salas de Reunião e Auditório.
            2 Provedores de internet de alta velocidade</p>
        </li>
        <li class="networking">
          <h4>NETWORKING</h4>
          <p>Criamos ELOS entre profissionais e empresas através de conhecimento. + 50 empresas impactadas.</p>
        </li>
        <li class="produtividade">
          <h4>PRODUTIVIDADE</h4>
          <p>Ambiente criativo e profissional com luz natural.</p>
        </li>
        <li class="beneficios">
          <h4>BENEFÍCIOS</h4>
          <p>Restaurante, Café, Academia e Salões de Beleza dentro do condominio.</p>
        </li>
        <li class="design">
          <h4>DESIGN PREMIADO</h4>
          <p>Vencedor do prêmio Projeta Archclub - Melhor Ambiente Corporativo 2021. </p>
        </li>
      </ul>
    </div>
  </div>

  <div id="produtos">
    <div class="container">
      <div class="produto produto-1">
        <div class="col-1">
          <h3>Espaço Compartilhado</h3>
          <p>Estações de trabalho na área de coworking em contrato mensal ou diário para você e seu time. Espaços modernos e inspiradores para sua produtividade aumentar.</p>
          <ul>
            <li><b>1.</b> Profissionais autônomos e empresas.</li>
            <li><b>2.</b> Mesas e cadeiras modernas</li>
            <li><b>3.</b> Conexões e networking</li>
            <li><b>4.</b> Internet wi-fi de alta velocidade</li>
            <li><b>5.</b> Locker exclusivo</li>
            <li><b>6.</b> Elos e networking</li>
          </ul>
          <p><a href="<?php echo site_url(); ?>/produto/espaco-compartilhado/" class="btn">Entre em contato <i class="fa-solid fa-right-long"></i></a></p>
        </div>
        <div class="col-2">
          <div class="carrossel">
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/espaco-1.jpg" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/espaco-2.jpg" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/espaco-3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="produto produto-2">
        <div class="col-1">
          <h3>Salas Privativas</h3>
          <p>Nossas salas privativas mobiliadas são ideais para empresas de todos os portes, privadas e amplas contam com mobiliário moderno, ar-condicionado individual, lockers e 02 provedores de internet de alta qualidade.</p>
          <ul>
            <li><b>1.</b> Acesso 24h</li>
            <li><b>2.</b> Profissionais autônomos e empresas.</li>
            <li><b>3.</b> Mesas e cadeiras modernas</li>
            <li><b>4.</b> Internet wi-fi de alta velocidade</li>
            <li><b>5.</b> Lockers Exclusivos</li>
            <li><b>6.</b> Ambientes Totalmente Personalizados</li>
            <li><b>7.</b> Elos e networking</li>
          </ul>
          <p><a href="<?php echo site_url(); ?>/produto/salas-privativas/" class="btn">Entre em contato <i class="fa-solid fa-right-long"></i></a></p>
        </div>
        <div class="col-2">
          <div class="carrossel">
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sala-1.jpg" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sala-2.jpg" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sala-3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="produto produto-3">
        <div class="col-1">
          <h3>Endereço Comercial/Fiscal</h3>
          <p>Tenha a sua empresa em um dos mais respeitados endereços da cidade de Curitiba. Localizado no Infinity Prime Offices, profissionalismo, comodidade e modernidade em um só local.</p>
          <ul>
            <li><b>1.</b> Autônomos e empresas</li>
            <li><b>2.</b> Endereço Comercial</li>
            <li><b>3.</b> Endereço Fiscal</li>
            <li><b>4.</b> Correspondência ilimitada </li>
            <li><b>5.</b> Escritório Virtual</li>
          </ul>
          <p><a href="<?php echo site_url(); ?>/produto/endereco-comercial-fiscal/" class="btn">Entre em contato <i class="fa-solid fa-right-long"></i></a></p>
        </div>
        <div class="col-2">
          <div class="carrossel">
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/comercial-1.jpg" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/comercial-2.jpg" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/comercial-3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="eventos">
    <div class="container">
      <div class="content">
        <h3>O jeito prático, inteligente e econômico de compartilhar conhecimento.</h3>
        <a href="<?php echo site_url(); ?>/eventos" class="btn">Confira nossos próximos eventos</a>
      </div>
    </div>
  </div>

  <div id="depoimentos">
    <div class="container">
      <div class="content">
        <h3>O que dizem os profissionais que já passaram por aqui</h3>
        <div class="depoimentos">
          <div class="item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-1.jpg" alt="">
            <p>Depoimento 1</p>
          </div>
          <div class="item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-2.jpg" alt="">
            <p>Depoimento 2</p>
          </div>
          <div class="item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-3.jpg" alt="">
            <p>Depoimento 3</p>
          </div>

          <div class="item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-1.jpg" alt="">
            <p>Depoimento 4</p>
          </div>
          <div class="item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-2.jpg" alt="">
            <p>Depoimento 5</p>
          </div>
          <div class="item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep-3.jpg" alt="">
            <p>Depoimento 6</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php //the_content(); 
    ?>


</section>


<?php get_footer(); ?>