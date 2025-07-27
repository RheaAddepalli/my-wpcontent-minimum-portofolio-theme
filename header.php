<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <nav>
    <h2 class="site-title"><?php bloginfo('name'); ?></h2>
    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
  </nav>

  <button id="toggle-theme">🌙</button>
</header>
