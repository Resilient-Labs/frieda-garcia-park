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
  <?php
 $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
 // blog query
 $blog_query = new WP_Query(array('post_type'=>'post', 'post_status'=> 'publish', 'posts_per_page'=> 3, 'paged' => $paged));
 if ( $blog_query->have_posts() ) {
   while ( $blog_query->have_posts() ) {
     $blog_query->the_post();
     get_template_part('templates/content-blog', get_post_type() );
   }
   if ($blog_query->max_num_pages > 1) : // check if the max number of pages is greater than 1 ?>
   <nav class="prev-next-posts">
     <div class="prev-posts-link">
       <?php echo get_next_posts_link( 'Older Posts', $blog_query->max_num_pages ); // display older posts link ?>
     </div>
     <div class="next-posts-link">
       <?php echo get_previous_posts_link( 'Previous Page' ); // display newer posts link ?>
     </div>
   </nav>
 <?php endif;
 }
 ?>
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
