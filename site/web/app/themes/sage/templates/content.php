<section class="blog-post-row">
  <div class="img-wrap">
      <img src="http://www.n3rdbomber.com/wp-content/uploads/2015/03/Metroid.jpg"/>
  </div>
  <article <?php post_class(); ?>>
      <div class="content entry-summary clearfix">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
        <?php the_excerpt(); ?>
    </div>
  </article>
</section>
