<?php
/*
Template Name: Home
*/
?>
<?php get_header();?> 
    <!-- end of header -->

    <!-- detail section -->
    <section class = "detail">
      <div class = "container">
        <div class = "row">
          <div class = "detail-item wow animate__animated animate__fadeInLeft animate__slow">
            
            <h2>Наш Бизнес</h2>
            <div class = "line"></div>
            <p class = "text">Бизнес компании включает в себя финансовое сопровождение и весь комплекс 4 PL логистики для наших партнеров ищущих легитимные пути взаимодействия с контрагентами из стран СНГ</p>
          </div>

          <div class = "detail-item wow animate__animated animate__fadeInUp animate__s">
            
            <h2>Для Партнеров</h2>
            <div class = "line"></div>
            <p class = "text">Наш подход максимальной открытости в работе, призван обеспечить эффект синергии при компиляции общих компетенций в совместных проектах.</p>
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
              <h2>Наши Услуги</h2>
              <p class = "text">Бизнес компании включает в себя финансовое сопровождение и весь комплекс 4 PL логистики для наших партнеров ищущих легитимные пути взаимодействия с контрагентами из стран СНГ</p>
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
          <h2 class = "wow animate__animated animate__bounceIn animate__slow">Наши партнеры</h2>
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
            <h2>Свяжитесь с нами</h2>
            <?php echo do_shortcode('[contact-form-7 id="87" title="Контактная форма"]')?>
            
          </div>

          <div class = "contact-right">
           
            
            <div>
              <h2>КОНТАКТЫ</h2>
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
          <h4 class="modal__window-title">Спасибо, ваша заявка принята</h4>
          <button class="modal__window-close" type="button">
              <img src="<?php bloginfo('template_url') ?>/assets/assets/close.png" alt="close">
          </button>
      </div>

  </div>
  <!--modal finish-->
    <!-- footer -->
<?php get_footer();?>    

