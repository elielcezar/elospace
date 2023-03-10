<!doctype html>
<html>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-THQSFGG');
  </script>
  <!-- End Google Tag Manager -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/css/all.css" rel="stylesheet">

  <link href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THQSFGG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="menu-mobile">
    <nav class="mainMenu">
      <a class="menuBtn mobile">
        <span class="lines"></span>
      </a>
      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </nav>
  </div>

  <div class="top-message">
    <div class="container">
      <p>Escrit??rio Virtual - Endere??o Fiscal e Endere??o Comercial no melhor coworking em Curitiba! A partir de R$ 79/m??s* na modalidade anual (pagamento ??nico de R$ 950,00*). <a href="<?php echo site_url(); ?>/contato" class="btn">Saiba Mais</a></p>
    </div>
  </div>

  <header>
    <div class="container">
      <h1><a href="<?php echo site_url(); ?>">EloSpace</a></h1>

      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
      <?php wp_nav_menu(array('theme_location' => 'secundario'));
      ?>

      <a class="menuBtn header">
        <span class="lines"></span>
      </a>

    </div>
  </header>