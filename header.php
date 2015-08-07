<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Italy Source</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/wp.css" />
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,700,700italic,600,600italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>

<!-- START Canvas Menu -->
<div class="off-canvas-wrap" data-offcanvas>
<div class="inner-wrap">
<!-- Off Canvas Menu -->
<aside class="left-off-canvas-menu">
  <?php wp_nav_menu(array( 'container' => '' )) ?>
</aside>
<!-- END Canvas Menu -->

<header>
  <div class="gradient-bg">
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo-italy-source.png" alt="Italy Source Logo" id="site-logo"></a>
    <div class="site-description">
      <?php bloginfo('description'); ?>
    </div>

    <nav class="mobile-button hide-for-large-up">
      <a class="left-off-canvas-toggle" href="#" ><i class="fa fa-bars"></i></a>
    </nav>

    <nav class="desktop show-for-large-up">
    <?php wp_nav_menu(array( 'container' => '' )) ?>
    </nav>

    <ul class="logo-array header-array show-for-large-up">
      <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo-asta.png"></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo-bbb.png"></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo-fb.png"></a></li>
    </ul>

  </div>
</header>