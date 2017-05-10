<?php
/**
 * Template Name: Park History Template
 */
?>
  <section class="hero banner">
    <h3><?php echo get_field('history-banner-body');?></h3>
    <img src="<?php echo get_field('history-banner-image');?>" />
  </section>
  <section class="home row">
    <figure class="media">
      <img src="<?php echo get_field('history-top-image');?>" alt="Frieda Garcia Park">
    </figure>
    <article class="content">
      <h2><?php echo get_field('history-top-title');?></h2>
      <?php echo get_field('history-top-body');?>
      <a href="#"><?php echo get_field('history-top-button');?><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </a>
    </article>
  </section>
  <section class="home row">
    <figure class="media">
      <img src="<?php echo get_field('history-middle-image');?>" alt="Frieda Garcia Park">
    </figure>
    <article class="content">
      <h2><?php echo get_field('history-middle-title');?></h2>
      <?php echo get_field('history-middle-body');?>
      <a href="#"><?php echo get_field('history-middle-button');?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </article>
  </section>
  <section class="home row">
    <figure class="media">
      <img src="<?php echo get_field('history-bottom-image');?>" alt="Frieda Garcia Park">
    </figure>
    <article class="content">
      <h2><?php echo get_field('history-bottom-title');?></h2>
      <?php echo get_field('history-bottom-body');?>
      <a href="#"><?php echo get_field('history-bottom-button');?><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </a>
    </article>
  </section>
