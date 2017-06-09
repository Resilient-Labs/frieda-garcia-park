<?php
/**
 * Template Name: Home Template
 */
?>
  <section class="hero banner">
    <h3><?php echo get_field('home-banner-body');?></h3>
    <img src="<?php echo get_field('home-banner-image');?>" />
  </section>
  <section class="home row">
    <figure class="media">
      <img src="<?php echo get_field('home-top-image');?>">
    </figure>
    <article class="content">
      <h2><?php echo get_field('home-top-title');?></h2>
      <?php echo get_field('home-top-body');?>
      <a href="http://frieda-garcia-park.com/about/"><?php echo get_field('home-top-button');?><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </a>
    </article>
  </section>
  <section class="home row">
    <figure class="media">
      <img src="<?php echo get_field('home-middle-image');?>">
    </figure>
    <article class="content">
      <h2><?php echo get_field('home-middle-title');?></h2>
      <?php echo get_field('home-middle-body');?>
      <a href="http://frieda-garcia-park.com/get-involved/"><?php echo get_field('home-middle-button');?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </article>
  </section>
  <section class="home row">
    <figure class="media">
      <img src="<?php echo get_field('home-bottom-image');?>">
    </figure>
    <article class="content">
      <h2><?php echo get_field('home-bottom-title');?></h2>
      <?php echo get_field('home-bottom-body');?>
      <a href="http://frieda-garcia-park.com/host-an-event/"><?php echo get_field('home-bottom-button');?><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </a>
    </article>
  </section>
