<?php
/**
 * Template Name: Host Event Template
 */
?>
  <section class="generic-row">
    <section class="content">
      <h2><?php echo get_field('host-event-title'); ?></h2>
      <?php echo get_field('host-event-body');?>
    </section>
      <figure class="generic-row-media">
        <img src="<?php echo get_field('host-event-image');?>">
      </figure>
  </section>
  <section class="generic-row">
    <h2><?php echo get_field('rules-title'); ?></h2>
    <section class="host-event-card">
      <figure>
        <img src="<?php echo get_field('rule-one-image'); ?>">
      </figure>
      <div>
      <?php echo get_field('rule-one'); ?>
    </div>
    </section>
    <section class="host-event-card">
      <figure>
        <img src="<?php echo get_field('rule-two-image'); ?>">
      </figure>
      <div>
      <?php echo get_field('rule-two'); ?>
    </div>
    </section>
    <section class="host-event-card">
      <figure>
        <img src="<?php echo get_field('rule-three-image'); ?>">
      </figure>
      <div>
      <?php echo get_field('rule-three'); ?>
    </div>
    </section>
    <section class="host-event-card">
      <figure>
        <img src="<?php echo get_field('rule-four-image'); ?>">
      </figure>
      <div>
      <?php echo get_field('rule-four'); ?>
    </div>
    </section>
  </section>
