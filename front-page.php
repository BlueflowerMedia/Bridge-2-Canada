<?php get_header(); ?>

<!-- Banner -->
<section class="banner">
  <div class="right-top">
    <p><strong>Coming to Canada <br> made simple.</strong></p>
  </div>
</section>

<!-- About Us -->
<section class="aboutus">
  <div class="aboutus-top">
    <div class="separator"><h2>About Us</h2></div>
  </div>
  <div class="aboutus-bottom">
    <p>Bride to Canada is a Non-Profit Organization that helps
people from all over the world move to Canada. Whether
you are looking to come to Canada to work, study or just
live, our organization can guide you through what you need
to know.</p>
  </div>
</section>

<!-- Objectives -->
<section class="objectives">
  <div class="objectives-top">
    <div class="separator2"><h2>Objectives</h2></div>
  </div>
  <div class="objectives-bottom">
    <div class="image-1-description">
      <ul>
        <li>To promote culture and language and goodwill
            between the new immigrants and other Canadians.</li>
        <li>To promote the cultural and linguistic heritage
            of Bangladesh among the children of Bangladeshis in Canada</li>
        <li>To organize socio-cultural activities for the
            community of Bangladeshis with emphasis on youth programmes.</li>
        <li>To promote multicultural activities and rapport, and cooperation with other ethnic groups</li>
      </ul>
    </div>
    <div class="image-1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/architecture-attraction-british-columbia-63332.jpg" alt="image">
    </div>
    <div class="image-2">
      <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-photo-313693.jpeg" alt="image">
    </div>
    <div class="image-2-description">
      <ul>
        <li>To help the new arrivals from Bangladesh towards
            socio-cultural integration in Canada</li>
        <li>To undertake the exchange of technical and e</li>
        <li>To represent matters of interest relating to the
            community to concerned levels of Government or Organizations as and when necessary.</li>
        <li>To be a non-political, non-profit making, voluntary
            socio-cultural organization.</li>
        <li>To support and assist members in emergencies,
            such as, sudden disability, illness, death and other problems.</li>
      </ul>
    </div>
  </div>
</section>

<!-- Contact us -->
<section class="contactus">
  <div class="contactus-top">
    <div class="separator3"><h2>Contact</h2></div>
  </div>
  <div class="contactus-middle">
    <p>We would love to hear from you, and we will reply to
        your email withing 48 hours.</p>
  </div>
  <div class="contactus-bottom">
    <div class="contactus-left">
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/b2c-icon-phone.png" alt="image"><strong>(416) 123-1234</strong></p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/b2c-icon-location.png" alt="image"> <strong>123 Danforth Ave, Scarborough ON</strong></p>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/b2c-icon-mail.png" alt="image"><strong>bridge2ca@gmail.com</strong></p>
    </div>
    <div class="contactus-right">
      <?php if ( shortcode_exists( 'contact-form-7' ) ) { echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); } ?>
    </div>
  </div>

</section>

<?php get_footer(); ?>
