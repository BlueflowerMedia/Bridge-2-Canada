<?php get_header(); ?>

<!-- Banner -->
<section class="banner">
  <div class="right-top">
    <h1>Coming to Canada made simple.</h1>
  </div>
</section>

<!-- About Us -->
<section class="aboutus" id="about">
  <div class="aboutus-top" rel="aboutus">
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

<!--Objectives-new-->
<!-- <section class="objectives" id="objectives"> -->
<section class="objectives">
  <div class="objectives-top">
    <div class="separator2"><h2>Objectives</h2></div>
  </div>

<div class="row obj-height">
  <div class="content">
    <ul class="no_bullet">
      <li class="icon">To promote culture and language and goodwill
          between the new immigrants and other Canadians.</li>
      <li class="icon">To promote the cultural and linguistic heritage
          of Bangladesh among the children of Bangladeshis in Canada</li>
      <li class="icon">To organize socio-cultural activities for the
          community of Bangladeshis with emphasis on youth programmes.</li>
      <li class="icon">To promote multicultural activities and
        rapport, and cooperation with other ethnic groups</li>
    </ul>
  </div>
  <div class="image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/architecture-attraction-british-columbia-63332.jpg" alt="image">
  </div>
</div>
<div class="row obj-height">
  <div class="image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-photo-313693.jpeg" alt="image">
  </div>
  <div class="content">
    <ul class="no_bullet">
      <li class="icon">To help the new arrivals from Bangladesh towards
          socio-cultural integration in Canada</li>
      <li class="icon">To undertake the exchange of technical and educational
          knowledge between Canada and Bangladesh.</li>
      <li class="icon">To represent matters of interest relating to the
          community to concerned levels of Government
          or Organizations as and when necessary.</li>
      <li class="icon">To be a non-political, non-profit making, voluntary
          socio-cultural organization.</li>
      <li class="icon">To support and assist members in emergencies,
          such as, sudden disability, illness, death and
          other problems.</li>
    </ul>
  </div>
</div>

</section>

<!-- Contact us -->
<section class="contactus" id="contacts">
  <div class="contactus-top">
    <div class="separator3"><h2>Contact</h2></div>
  </div>

  <div class="container">
    <div class="contactus-middle">
      <p>We would love to hear from you, and we will reply to
          your email withing 48 hours.</p>
    </div>
    <div class="contactus-bottom">
      <div class="contactus-left">
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/b2c-icon-phone.png" alt="">
          <strong>(416)857-1654</strong>
        </div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/b2c-icon-fax.png" alt="">
           <strong>(416)907-3300</strong>
        </div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/b2c-icon-location.png" alt="">
          <strong>2425 Eglinton Ave East, Scarborough ON, M1K 5G8</strong>
        </div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/b2c-icon-mail.png" alt="">
          <strong>contact@bridge2canada.org</strong>
        </div>
        
      </div>
      <div class="contactus-right">
        <?php if ( shortcode_exists( 'contact-form-7' ) ) { echo do_shortcode('[contact-form-7 id="36" title="Contact form 1"]'); } ?>
      </div>
    </div>
  </div>


</section>

<?php get_footer(); ?>
