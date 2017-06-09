<?php
/**
 * Template Name: Blog Template
 */
?>

<?php
// the query
$blog_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, )); ?>
<section class="blog-page">

<?php if ( $blog_query->have_posts()) : ?>
<section class="blog-page-posts">
    <!-- the loop -->
    <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
      <?php get_template_part('templates/content-blog', get_post_type());?>
    <?php endwhile; ?>
    <!-- end of the loop -->
</section>
    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<aside class="blog-sidebar">
  <strong>Stay Connected</strong>
  <?php get_template_part('templates/sidebar-social');?>
</aside>
</section>
