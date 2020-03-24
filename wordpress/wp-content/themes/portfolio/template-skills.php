<?php
  /*
    Template Name: Skills
  */
  get_header();
?>
<?php $skills = get_field('skills_page');?>
  <section class="skills">
    <div class="row">
      <h1><?php the_title(); ?></h1>
      <div class="skills-wrapper">
        <div class="left-part-skills">
          <h2>Every Day is a New Challenge</h2>
          <p>
            <?php echo $skills['skill_text']; ?>
          </p>
          <div class="contact-btn">
            <a href="<?php echo site_url('/contact');?>" class="btn">Contact Me</a>
          </div>
        </div>
        <div class="right-part-skills">
          <div class="progress">
            <h4>Html5</h4>
            <div class="progress-value">
              100%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress">
            <h4>Css</h4>
            <div class="progress-value">
              100%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress" style="width:70%">
            <h4>JavaScript</h4>
            <div class="progress-value">
              70%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress" style="width:80%">
            <h4>WordPress</h4>
            <div class="progress-value">
              80%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress" style="width:80%">
            <h4>PhotoShop</h4>
            <div class="progress-value">
              80%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress">
            <h4>Webpack</h4>
            <div class="progress-value">
              100%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress">
            <h4>Vagrant</h4>
            <div class="progress-value">
              100%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress">
            <h4>Git</h4>
            <div class="progress-value">
              100%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress" style="width:80%">
            <h4>Magento</h4>
            <div class="progress-value">
              80%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress" style="width:80%">
            <h4>CraftCMS</h4>
            <div class="progress-value">
              80%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress" style="width:30%">
            <h4>Php</h4>
            <div class="progress-value">
              30%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress">
            <h4>jQuery</h4>
            <div class="progress-value">
              100%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress">
            <h4>Sass</h4>
            <div class="progress-value">
              100%
            </div>
            <div class="progress-bar"></div>
          </div>
          <div class="progress">
            <h4>Bootstrap</h4>
            <div class="progress-value">
              100%
            </div>
            <div class="progress-bar"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer();?>
