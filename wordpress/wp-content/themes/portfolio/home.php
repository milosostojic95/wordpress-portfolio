<?php get_header();?>
  <section class="blog">
    <?php
      while(have_post()) {
        the_post();
      }
    ?>
  </section>
<?php get_footer(); ?>
