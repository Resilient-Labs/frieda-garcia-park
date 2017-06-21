<header class="clearfix">
  <nav class="clearfix">
    <a href="<?php echo home_url();?>" class="logo">
      <img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" alt="ffgp-logo"/>
    </a>
    <?php wp_nav_menu(); ?>
    <div class="hamburger-menu">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>
  <div class="hamburger-nav">
    <?php wp_nav_menu(); ?>
  </div>
</header>
