
      <footer class="footer">
        <div class="container">
          <div class="footer-map">
            <iframe class="footer-map__iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Vinhome%20ocearn%20park+(Victory%20Era%20Travel%20Company)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
              <a href="https://www.gps.ie/">gps trackers</a>
            </iframe>
            <p class="footer__text text-center">Copyright © 2024 Victory Era Travel Company</p>
          </div>
          <div class="footer-info">
            <div class="footer-info__company">
              <h3 class="footer-info__h3">Victory Era Travel Company</h3>
              <p class="footer__text">Address: 2nd Floor, 02SH08 - S101 Building, Vinhomes Ocean Park, Gia Lam, Ha Noi</p>
            </div>
            <section class="footer__links">
              <nav class="footer-nav">
                <a href="#" class="footer-nav__link">Hotline: +84867032865</a>
                <a href="#" class="footer-nav__link">Email: booking@victorytravel.info</a>
                <a href="#" class="footer-nav__link">Work Time: Mon-Sun 8:00 - 21:00</a>
                <div class="footer__social">
                  <a href="#"><img class="footer__social-item" src="<?php echo WT_ASSET('img/footer/social1.png');?>" alt="social1.png"></a>
                  <a href="#"><img class="footer__social-item" src="<?php echo WT_ASSET('img/footer/social2.png');?>" alt="social2.png"></a>
                  <a href="#"><img class="footer__social-item" src="<?php echo WT_ASSET('img/footer/social3.png');?>" alt="social3.png"></a>
                  <a href="#"><img class="footer__social-item" src="<?php echo WT_ASSET('img/footer/social4.png');?>" alt="social4.png"></a>
                  <a href="#"><img class="footer__social-item" src="<?php echo WT_ASSET('img/footer/social5.png');?>" alt="social5.png"></a>
                </div>
              </nav>
              <nav class="footer-nav">
                <a href="<?php echo home_url('/').'?s=&c=vietnam-package';?>" class="footer-nav__link footer-nav__link--hover">Vietnam package</a>
                <a href="<?php echo home_url('/').'?s=&c=northern-vietnam';?>" class="footer-nav__link footer-nav__link--hover">Northern Vietnam</a>
                <a href="<?php echo home_url('/').'?s=&c=central-vietnam';?>" class="footer-nav__link footer-nav__link--hover">Central Vietnam</a>
                <a href="<?php echo home_url('/').'?s=&c=southern-vietnam';?>" class="footer-nav__link footer-nav__link--hover">Southern Vietnam</a>
              </nav>
              <nav class="footer-nav">
                <a href="<?php echo home_url('/');?>" class="footer-nav__link footer-nav__link--hover">Home</a>
                <a href="<?php echo home_url('/').'?p=45'; ?>" class="footer-nav__link footer-nav__link--hover">About Us</a>
                <a href="<?php echo home_url('/').'?p=49'; ?>" class="footer-nav__link footer-nav__link--hover">Travel Guide</a>
                <a href="<?php echo home_url('/').'?p=47'; ?>" class="footer-nav__link footer-nav__link--hover">Booking Policy</a>
              </nav>
            </section>
            <section class="footer-payment">
              <img class="footer-payment__item" src="<?php echo WT_ASSET('img/footer/payment1.png');?>" alt="payment1.png">
              <img class="footer-payment__item" src="<?php echo WT_ASSET('img/footer/payment2.png');?>" alt="payment2.png">
              <img class="footer-payment__item" src="<?php echo WT_ASSET('img/footer/payment3.png');?>" alt="payment3.png">
              <img class="footer-payment__item" src="<?php echo WT_ASSET('img/footer/payment4.png');?>" alt="payment4.png">
            </section>
          </div>
        </div>
      </footer>
    </div>

    <?php require WT_PARTIALS( 'contact-button.php' )?>

    <!-- Modal loading page -->
    <div class="modal" id="modal__loading">
        <div class="modal__overlay"></div>
        <div class="modal__content modal__content--loading">
            <div class="loader"></div>
            <div class="loading__title">Processing ...<br>Please do not close the browser</div>
        </div>
    </div>
    
    <script src="<?php echo WT_ASSET('js/main.js');?>"></script>
    <!-- Swiper JS -->
    <script src="<?php echo WT_ASSET('js/swiper.js');?>"></script>

    <script src="<?php echo WT_ASSET('js/swiper-config.js');?>"></script>
    
  </body>
</html>
