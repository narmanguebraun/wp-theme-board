<!DOCTYPE html>
<html lang="en">
<head>
  <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
  <meta charset="UTF-8">
  <!--[if lt IE 9]>
  <script src="<?php bloginfo('template_url'); ?>/assets/html5/html5.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/html5/innershiv.min.js"></script>
  <![endif]-->
  <title>
    <?php
      global $page, $paged;
      wp_title(' &mdash; ', true, 'right');
      bloginfo('name');
      $site_description = get_bloginfo('description', 'display');
      if ( $site_description && ( is_home() || is_front_page()))
          echo " &mdash; $site_description";
      if ($paged >= 2 || $page >= 2)
          echo ' &mdash; ' . sprintf( __('Page %s'), max($paged, $page));
    ?>
  </title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favico.png" type="image/x-icon" />
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/assets/css/reset.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/assets/css/pushy.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/style.css" />
    <!-- Js -->
  <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-latest.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/pushy.min.js"></script>  
  <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.imagesloaded.min.js"></script>
  <script>
    $(function() {
      $( ".wrapper" ).resizable();
    });
  </script>
  <!-- GA -->
  <?php wp_head(); ?>
</head>

<body>
  
<div id="menu">
  <div class="block25 tright"><div class="menu-btn">&#9776;</div></div>
  <div class="block75 tleft"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1></div>
</div>

<nav id="index" class="pushy pushy-left">
  <div>
    <figure><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Logo" /></figure>
    <p>Name Lastname<br/>
      Mobile. +33 600 000 000<br/>
      Email. <a href="mailto:photo@namelastname.com">photo@namelastname.com</a><br/>
      Website. <a href="http://www.namelastname.com">www.namelastname.com</a><br/>
      Instagram. <a href="http://www.instagram.com/namelastname">@namelastname</a>
    </p>
    <nav><?php wp_nav_menu(array('menu' => 'First', 'theme_location' => 'First', 'depth' => 1, 'container_class' => 'menu1')); ?>
    </nav>
  </div>
</nav>

<div class="site-overlay"></div>

<div id="container">
<div class="wrap">
