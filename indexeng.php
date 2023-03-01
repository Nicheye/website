<?php
/*
Template Name: ggeng
*/


?>
<?php get_header('eng');?> 
    <!-- end of header -->

    <!-- detail section -->
    <section class = "detail">
      <div class = "container">
        <div class = "row">
          <div class = "detail-item wow animate__animated animate__fadeInLeft animate__slow">
            
            <h2>Our Business</h2>
            <div class = "line"></div>
            <p class = "text">The company's activities include financial support and a full range of logistics 4 PL for our partners looking for legal ways to interact with counterparties from CIS countries</p>
          </div>

          <div class = "detail-item wow animate__animated animate__fadeInUp animate__s">
            
            <h2>For Partners</h2>
            <div class = "line"></div>
            <p class = "text">Our approach of maximum openness in our work, is designed to provide a synergy effect in the compilation of common competencies in joint projects.</p>
          </div>

          
        </div>
      </div>
    </section>
    <!-- end of detial section -->
    
    <!-- features section -->
    <section class = "feature" id = "feature">
      <div class = "container">
        <div class = "row">
          <div class = "feature-left wow animate__animated animate__fadeInUp animate__slow">
            <img src = '<?php bloginfo('template_url') ?>/assets/assets/logisticks.jpg' alt = "logisticks">
          </div>
          <div class = "feature-right wow animate__animated animate__fadeInUp animate__slow">
            <div class = "title">
              <h2>Our Services</h2>
              <p class = "text">The company's business includes financial support and a full range of 4 PL logistics for our partners looking for legitimate ways to interact with counterparties from CIS countries</p>
            </div>

            <!-- <div class = "feature-item">
              <span><i class = "fas fa-tablet-alt"></i></span>
              <div>
                <h3>что там</h3>
                <p class = "text">о чем-то там .</p>
              </div>
            </div> -->

            
          </div>
        </div>
      </div>
    </section>
    <!-- end of features section -->

  

    <!-- partners section -->
    
    <section class = "team"  id = "team">
      <div class = "container">
        <div class = "title">
          <h2 class = "wow animate__animated animate__bounceIn animate__slow">The Partners</h2>
          <p class = "text"></p><!--если какой-слоган надо будет еще подписать-->
        </div>

        <div class = "row owl-carousel owl-theme wow animate__animated animate__fadeInUp animate__slow">
          <div class = "team-item">
            <div class = "team-img">
              <img src = "<?php bloginfo('template_url') ?>/assets/assets/sponsor1.png" height="150" width="75" alt = "jjmotors">
              <div class = "team-icons">
                
              </div>
            </div>
            <div class = "team-info">
              <!-- <h3>Full Name Here</h3>
              <span></span> --> <!--если что-то нужно будет лого подписать- о партнере-->
            </div>
          </div>

          <div class = "team-item">
            <div class = "team-img">
              <img src = "<?php bloginfo('template_url') ?>/assets/assets/sponsor2.png"  height="150" width="150" alt = "yellow">
              <div class = "team-icons">
                
              </div>
            </div>
            <div class = "team-info">
              <!-- <h3>Full Name Here</h3>
              <span></span> --> <!--если что-то нужно будет лого подписать- о партнере-->
            </div>
          </div>

          <div class = "team-item">
            <div class = "team-img">
              <img src = "<?php bloginfo('template_url') ?>/assets/assets/philips.svg" height="150" width="150" alt = "philips">
              <div class = "team-icons">
                
              </div>
            </div>
            <div class = "team-info">
               <!-- <h3>Full Name Here</h3>
              <span></span> --> <!--если что-то нужно будет лого подписать- о партнере-->
            </div>
          </div>

          <div class = "team-item">
            <div class = "team-img">
              <img src = "<?php bloginfo('template_url') ?>/assets/assets/bharat.png" height="150" width="50" alt = "bharatclub">
              <div class = "team-icons">
                
              </div>
            </div>
            <div class = "team-info">
              <!-- <h3>Full Name Here</h3>
              <span></span> --> <!--если что-то нужно будет лого подписать- о партнере-->
            </div>
          </div>

          <div class = "team-item">
            <div class = "team-img">
              <img src = "<?php bloginfo('template_url') ?>/assets/assets/sat.png" height="150" width="600" alt = "sat">
              <div class = "team-icons">
                
              </div>
            </div>
            <div class = "team-info">
              <!-- <h3>Full Name Here</h3>
              <span></span> --> <!--если что-то нужно будет лого подписать- о партнере-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of team section -->

    <!-- contact section -->
    <section class = "contact" id = "contact">
      <div class = "container">
        <div class = "title">
          
          
        </div>
        

        <div class = "row wow animate__animated animate__fadeInUp animate__slow">
          <div class = "contact-left">
            <h2>Contact Us</h2>
            <?php echo do_shortcode('[contact-form-7 id="112" title="Contact Form"]')?>
            
          </div>

          <div class = "contact-right">
           
            
            <div>
              <h2>Contacts</h2>
              <p class = "text">info@univero.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
            
           
            
          
    <!-- end of contact section -->
    <!--modal start-->
    <div class="modal__window" id="window">
      <div class="modal__window-inner">
          <h4 class="modal__window-title">Thank you, your application has been accepted</h4>
          <button class="modal__window-close" type="button">
              <img src="<?php bloginfo('template_url') ?>/assets/assets/close.png" alt="close">
          </button>
      </div>

  </div>
  <!--modal finish-->
    <!-- footer -->
<?php get_footer();?>    