<?php get_header();?>
<?php $hero = get_field('hero');?>
  <section class="hero" style="background:url(<?php the_post_thumbnail_url();?>) !important; background-size:cover !important;
  background-position:center center !important;">
    <div class="row">
      <div class="hero-wrapper">
        <div class="social-icons">
          <a tagert="_blanc" href="https://github.com/milosostojic95"><i class="fa fa-github" aria-hidden="true"></i></a>
          <a href="https://www.facebook.com/milos.ostojic.313"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/ostoja_milos/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/milos-ostojic-a97826189/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        </div>
        <div class="hero-heading">
          <h1><?php echo $hero['main_title']; ?></h1>
        </div>
        <div class="anim-heading">
          <h2><?php echo $hero['small_title'];?></h2>
        </div>
  	    <?php if($hero['link']): ?>
          <div class="hero-btn">
            <a href="<?php echo $hero['link'];?>"><?php echo $hero['link_text'];?></a>
          </div>
        <?php endif ?>
      </div>
    </div>
  </section>
<?php get_footer();?>
