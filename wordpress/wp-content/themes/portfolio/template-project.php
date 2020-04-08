<?php
  /*
    Template Name: Project
  */
  get_header();
?>
  <section class="project">

      <?php while(have_posts()): the_post();?>
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
      <?php endwhile; ?>

  </section>

<?php get_footer();?>
