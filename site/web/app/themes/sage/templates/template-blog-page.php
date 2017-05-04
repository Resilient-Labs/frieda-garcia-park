<?php
/**
 * Template Name: Blog Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
    <section class="ad clearfix">
    <aside>
     <h2>Stay Connected</h2>
     <div class="social-media-embed">
     <!-- INCLUDE FACEBOOK EMBED https://developers.facebook.com/docs/plugins/embedded-posts
-->
      </div>
    </aside>
  </section>
    <section class="blog-post-row">
      <section class="media">
        <img class="thumbnail" src="img/ffgp_location.jpg" alt="" />
        <div class="img-wrap"></div>
      </section>
      <section class="content clearfix">
        <h2>Title</h2>
        <h5>Date</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet lectus sit amet nibh vestibulum dignissim. Sed dignissim, mauris ac molestie vestibulum, risus sapien euismod lorem, vel consequat lectus velit sit amet lacus. Cras neque metus, vestibulum et eros eu, consectetur consectetur est. Mauris ac dapibus mi, vel egestas mi. </p>
      </section>
    </section>
    <section class="blog-post-row">
      <section class="media">
        <img class="thumbnail" src="img/ffgp_location.jpg" alt="" />
        <div class="img-wrap"></div>
      </section>
      <section class="content clearfix">
        <h2>Title</h2>
        <h5>Date</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet lectus sit amet nibh vestibulum dignissim. Sed dignissim, mauris ac molestie vestibulum, risus sapien euismod lorem, vel consequat lectus velit sit amet lacus. Cras neque metus, vestibulum et eros eu, consectetur consectetur est. Mauris ac dapibus mi, vel egestas mi. </p>
      </section>
    </section>
    <section class="blog-post-row">
      <section class="media">
        <img class="thumbnail" src="img/ffgp_location.jpg" alt="" />
        <div class="img-wrap"></div>
      </section>
      <section class="content clearfix">
        <h2>Title</h2>
        <h5>Date</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet lectus sit amet nibh vestibulum dignissim. Sed dignissim, mauris ac molestie vestibulum, risus sapien euismod lorem, vel consequat lectus velit sit amet lacus. Cras neque metus, vestibulum et eros eu, consectetur consectetur est. Mauris ac dapibus mi, vel egestas mi. </p>
      </section>
    </section>
    <section class="blog-post-row">
      <section class="media">
        <img class="thumbnail" src="img/ffgp_location.jpg" alt="" />
        <div class="img-wrap"></div>
      </section>
      <section class="content clearfix">
        <h2>Title</h2>
        <h5>Date</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet lectus sit amet nibh vestibulum dignissim. Sed dignissim, mauris ac molestie vestibulum, risus sapien euismod lorem, vel consequat lectus velit sit amet lacus. Cras neque metus, vestibulum et eros eu, consectetur consectetur est. Mauris ac dapibus mi, vel egestas mi. </p>
      </section>
    </section>
<?php endwhile ?>
