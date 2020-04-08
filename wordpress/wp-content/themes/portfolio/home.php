<?php get_header();?>
  <section class="blog">
    <?php if(have_posts()) :?>
    <?php while(have_posts()) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <p><?php the_content();?></p>
  <?php endwhile; ?>
    <?php endif;?>
  </section>
<?php get_footer(); ?>
