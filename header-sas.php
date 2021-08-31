<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo-icon.png"; ?>" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PHD6MGN');</script>
<!-- End Google Tag Manager -->
</head>

<body>
<!--TELA DE CARREGAMENTO -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHD6MGN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="preloader">
  <div class="sk-three-bounce">
    <div class="sk-child sk-bounce1"></div>
    <div class="sk-child sk-bounce2"></div>
    <div class="sk-child sk-bounce3"></div>
  </div>
</div>
<div id="header" class="sas">
  <nav id="menu" class="navbar navbar-expand-md navbar-dark wow animated fadeIn">
    <a class="navbar-brand mr-md-5" href="<?php echo home_url( '/home' ); ?>">
      <img width="151" class="img-fluid e-claro logo" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/07/logotipo-portabilis-azul.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <?php
      wp_nav_menu(array(
      'menu'            => 'primary',
      'theme_location'  => 'primary',
      'container'       => 'div',
      'container_class' => 'navbar-nav mr-auto',
      'menu_id'         => false,
      'menu_class'      => 'navbar-nav',
      'depth'           => 2,
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker()
      ));
      ?>
      <?php
      wp_nav_menu(array(
      'menu'            => 'secondary',
      'theme_location'  => 'secondary',
      'container'       => 'div',
      'menu_id'         => false,
      'menu_class'      => 'navbar-nav',
      'depth'           => 2,
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker()
      ));
      ?>
      <a href="<?php echo esc_url( home_url( '/fale-conosco' ) ); ?>" class="btn-base btn-white ml-md-5" title="Fale conosco">Fale conosco</a>
    </div>
  </nav>
</div>

