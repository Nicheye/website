<?php
/*
Template Name: ggozb
*/


?>
<?php get_header('ozb');?> 
    <!-- end of header -->

    <!-- detail section -->
    <section class = "detail">
      <div class = "container">
        <div class = "row">
          <div class = "detail-item wow animate__animated animate__fadeInLeft animate__slow">
            
            <h2>bizning bizness</h2>
            <div class = "line"></div>
            <p class = "text">Kompaniya biznesi o’z ichiga MDH mamlakatlaridagi kontragentlar bilan o'zaro munosabatlarning qonuniy usullarini izlayotgan hamkorlarimiz uchun moliyaviy yordam va 4 PL logistikasining butun majmuasini oladi</p>
          </div>

          <div class = "detail-item wow animate__animated animate__fadeInUp animate__s">
            
            <h2>hamkorlarimiz uchun</h2>
            <div class = "line"></div>
            <p class = "text">Bizning ishda maksimal ochiqlik yondashuvimiz qo'shma loyihalarda umumiy vakolatlarni shakllantirishda sinergiya effektini ta'minlash uchun mo'ljallangan.</p>
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
            <img src = '<?php bloginfo('template_url') ?>/assets/assets/logisticks.jpg' alt = "">
          </div>
          <div class = "feature-right wow animate__animated animate__fadeInUp animate__slow">
            <div class = "title">
              <h2>Bizning xizmatlar</h2>
              <p class = "text">Kompaniya biznesi o’z ichiga MDH mamlakatlaridagi kontragentlar bilan o'zaro munosabatlarning qonuniy usullarini izlayotgan hamkorlarimiz uchun moliyaviy yordam va 4 PL logistikasining butun majmuasini oladi.</p>
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
          <h2 class = "wow animate__animated animate__bounceIn animate__slow">bizning hamkorlar</h2>
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
            <h2>Biz bilan aloqaga chiqing</h2>
            <?php echo do_shortcode('[contact-form-7 id="117" title="contact formozb"]')?>>
            
          </div>

          <div class = "contact-right">
           
            
            <div>
              <h2>Email yuboring</h2>
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
          <h4 class="modal__window-title">Raxmat, sizning so’rovingiz qabul qilindi</h4>
          <button class="modal__window-close" type="button">
              <img src="<?php bloginfo('template_url') ?>/assets/assets/close.png" alt="">
          </button>
      </div>

  </div>
  <!--modal finish-->
    <!-- footer -->
<?php get_footer();?>  