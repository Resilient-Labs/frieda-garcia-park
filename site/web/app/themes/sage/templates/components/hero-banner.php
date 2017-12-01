<?php if( have_rows('hero_banner') ): ?>
  <?php while ( have_rows('hero_banner') ) : the_row(); ?>
    <section class="hero-banner">
      <img src="<?php the_sub_field('banner-image'); ?>"/>
      <p><?php the_sub_field('banner-text'); ?></p>
    </section>
 <?php endwhile; ?>
<?php endif; ?>
