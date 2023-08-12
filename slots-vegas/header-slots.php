<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Asapregular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Asapmedium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Asapsemibold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Asapbold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body>
    <header class="header-block-slots">
      <a href="/">
        <img width="267" height="69" src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="Slots of Vegas Logo">
      </a>
      <div class="header-content-right">
        <div class="header-menu">
          <a href="#" class="header-menu-item">Instant Play</a>
          <a href="#" class="header-menu-item">Promotions</a>
          <a href="#" class="header-menu-item">Downloads</a>
        </div>
        <div class="header-buttons">
          <a href="#" class="btn head-slots">Login</a>
          <a href="#" class="btn head-slots">Sign up</a>
        </div>
        <div class="menu-mobile-button">
          <span class="menu-mobile-button-icon"></span>
          <span class="menu-mobile-button-icon"></span>
          <span class="menu-mobile-button-icon"></span>
        </div>
      </div>
    </header>

