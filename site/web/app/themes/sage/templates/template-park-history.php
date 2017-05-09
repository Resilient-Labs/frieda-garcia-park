<?php
/**
 * Template Name: Park History Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <section class="hero banner">
    <h3>
      The mission of the Friends of Frieda Garcia Park is to care
      for the park and to provide programming that welcomes children and
      residents of the rich, diverse backgrounds of Boston's neighborhoods.
    </h3>
    <img src="../assets/ffgp_hero.jpg" alt="kids" />
  </section>
  <section class="home row">
    <figure class="media">
      <img src="../assets/ffgp_frieda.jpg" alt="Frieda Garcia Park">
    </figure>
    <article class="content">
      <h2>FRIEDA GARCIA</h2>
      <p>
        Frieda Garcia Park was built in honor of Frieda Garcia, a
        renowned community activist recognized for her decades of
        leadership in the South End and Roxbury.
      </p>
      <a href="#">Meet Frieda<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </a>
    </article>
  </section>
  <section class="home row">
    <figure class="media">
      <img src="../assets/ffgp_afh.jpg" alt="Frieda Garcia Park">
    </figure>
    <article class="content">
      <h2>Community Build</h2>
      <p>
        Featuring equipment for active, social, and self-directed play,
        the park serves as a significant buffer against the adjacent lanes
        of the Massaschussetts turnpike. John Hancock Financial covered the costs
        of the development of the park, and donated it to the city upon completion.
      </p>
      <a href="#">Get Involved <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </article>
  </section>
  <section class="home row">
    <figure class="media">
      <img src="../assets/ffgp_park.jpg" alt="Frieda Garcia Park">
    </figure>
    <article class="content">
      <h2>Family Fun</h2>
      <p>
        Frieda Garcia Park is a 12,000-square foot park and playground created for
        the families of Boston's South End. Designed by Halvorson Design Partnership
        in consultation with the community, this urban oasis features custom-designed
        play equipment and livery art for youth of all ages.
      </p>
      <a href="#">Host An Event <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </a>
    </article>
  </section>
<?php endwhile; ?>
