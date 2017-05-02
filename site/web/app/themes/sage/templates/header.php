 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo ('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  <head>
  <body <?php body_class(); ?>>
    <header id="top">
      <figure>
        <a href="<?php echo home_url(); ?>"><img src="http://frieda-garcia-park.dev/app/uploads/2017/05/fgp_logo.png" alt="Logo"></a>
      </figure>
      <nav>
        <?php
          $args = array(
            'theme_location' => 'primary'
          );
        ?>
        <?php wp_nav_menu(); ?>
      </nav>
    </header>
