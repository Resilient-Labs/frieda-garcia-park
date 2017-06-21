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
      <a href="<?php echo get_field('home-top-button');?>"><?php echo get_field('home-top-button-cta');?>&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
    <a href="<?php echo get_field('home-middle-button');?>"><?php echo get_field('home-middle-button-cta');?>&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </article>
  </section>
  <section class="home row">
    <figure class="media">
      <img src="<?php echo get_field('home-bottom-image');?>">
    </figure>
    <article class="content">
      <h2><?php echo get_field('home-bottom-title');?></h2>
      <?php echo get_field('home-bottom-body');?>
      <a href="<?php echo get_field('home-bottom-button');?>"><?php echo get_field('home-bottom-button-cta');?>&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </a>
    </article>
  </section>
