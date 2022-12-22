<!doctype html>
<html>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;0,700;0,900;1,300;1,500;1,700;1,900&display=swap" rel="stylesheet">

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

  <div class="top-message">
    <div class="container">
      <p>Escritório Virtual | garanta endereço fiscal, endereço comercial e gestão de correspondências no maior coworking em Curitiba! A partir de R$ 89/mês na modalidade anual (pagamento único de R$ 1.070,00) <a href="#" class="btn">Saiba Mais</a></p>
    </div>
  </div>

  <a class="menuBtn">
    <span class="lines"></span>
  </a>
  <div class="menu-mobile">
    <div class="mainContainer">
      <nav class="mainMenu">
        <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
      </nav>
    </div>
  </div>

  <header>
    <div class="container">
      <h1>EloSpace</h1>
      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </div>
  </header>