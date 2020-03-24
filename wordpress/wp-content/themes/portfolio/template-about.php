<?php
  /*
    Template Name: About
  */
  get_header();
?>
<?php $about = get_field('about_hero');?>
<section class="about">
  <div class="row">
    <h1><?php the_title(); ?></h1>
    <div class="about-wrapper">
      <div class="left-part-about">
  	    <img src="<?php echo get_template_directory_uri();?>/assets/man1.jpeg" alt="">
      </div>
      <div class="right-part-about">
        <h2>Hello There</h2>
        <p>
        <?php echo $about['about_text']; ?>
        </p>
        <div class="info">
  	      <div class="part">
            <h3>Name:</h3>
            <p>Milos Ostojic</p>
          </div>
          <div class="part">
            <h3>Phone:</h3>
            <p>+381 63/624-005</p>
          </div>
          <div class="part">
            <h3>Email:</h3>
            <p>milosostojic95@gmail.com</p>
          </div>
        </div>
        <div class="contact-btn">
          <a href="<?php echo site_url('/contact');?>" class="btn">Contact Me</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>
