<?php
  /*
    Template Name: Contact
  */
  get_header();
?>
  <section class="contact">
    <div class="row">
      <h1>Get In Touch</h1>
      <div class="contact-wrapper">
        <div class="contact-items">
          <div class="item">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <h4>Belgrade, Serbia</h4>
          </div>
          <div class="item">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <h4>+381 63/624-005</h4>
          </div>
          <div class="item">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <h4>milosostojic95@gmail.com</h4>
          </div>
          <div class="item">
            <i class="fa fa-comments" aria-hidden="true"></i>
            <h4>Facebook</h4>
          </div>
        </div>
        <div class="social-media">
          <h2>Let's Connect</h2>
          <a href=""><span><i class="fa fa-linkedin" aria-hidden="true"></i></span>Linkedin<span></span></a>
          <a href=""><span> <i class="fa fa-github" aria-hidden="true"></i></span>Github<span></span></a>
          <a href=""><span><i class="fa fa-facebook" aria-hidden="true"></i></span>Facebook<span></span></a>
          <a href=""><span> <i class="fa fa-instagram" aria-hidden="true"></i></span>Instagram<span></span></a>
          <a href=""><span> <i class="fa fa-skype" aria-hidden="true"></i></span>Skype<span></span></a>
        </div>
        <div class="contact-form">
          <h2>Send Me a Message</h2>
          <form method="post" id="contact-form">
            <div class="form-group form">
              <label for="">Name*</label>
              <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group form">
              <label for="">Email*</label>
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="subject form">
              <label for="">Subject*</label>
              <input type="email" name="subject" class="form-control" placeholder="Subject" required>
            </div>
            <div class="form-message form">
              <label for="">Message*</label>
              <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Text Message" required></textarea>
            </div>
            <button type="submit" class="send-btn" id="form-contact-submit">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php get_footer();?>
