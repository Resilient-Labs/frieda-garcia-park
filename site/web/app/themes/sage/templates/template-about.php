<?php
/**
 * Template Name: About Template
 */
?>

  <section class="container-about clearfix">
    <article>
      <h2><?php echo get_field('about-top-title'); ?></h2>
      <?php echo get_field('about-top-body'); ?>
    </article>
    <aside>
      <img src="<?php echo get_field('about-top-image'); ?>"/>
      <blockquote>
        <span>&ldquo;</span><?php echo get_field('about-top-quote'); ?>&rdquo;
      </blockquote>
    </aside>
  </section>
  <section class="container-about clearfix">
    <article>
      <h2><?php echo get_field('about-middle-title'); ?></h2>
      <?php echo get_field('about-middle-body'); ?>
    </article>
    <aside>
      <img src="<?php echo get_field('about-middle-image'); ?>"/>
      <blockquote>
        <span>&ldquo;</span><?php echo get_field('about-middle-quote'); ?>&rdquo;
      </blockquote>
    </aside>
  </section>
  <section class="container-about clearfix">
    <article>
      <h2><?php echo get_field('about-bottom-title'); ?></h2>
      <?php echo get_field('about-bottom-body'); ?>
    </article>
    <aside>
      <img src="<?php echo get_field('about-bottom-image'); ?>"/>
      <blockquote>
        <span>&ldquo;</span><?php echo get_field('about-bottom-quote'); ?>&rdquo;
      </blockquote>
    </aside>
  </section>
