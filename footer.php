<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h2 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url() ?>">Galeria <strong>JAK</strong></a>
            </h2>
            <p >przestrzeń wystawiennicza Fundacji Jak Malowana</p>
            <p><a class="site-footer__link" href="tel:693 083 144">693 083 144</a></p>
            <p><a class="site-footer__link" href="https://goo.gl/maps/guNVnkAgsGmTvX3S6" target="_blank">ul. Święty Marcin 37, Poznań 61-806</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Zapraszamy</h3>
              <nav class="nav-list">
                <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'footerLocationOne'
                  ))
                ?>
              </nav>
            </div>


          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Odwiedź nas na:</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="https://www.facebook.com/galeriajak" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/channel/UCK8QHZYjp2P9A_H4yYk276g   " class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/galeria_jak/" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>


<?php wp_footer() ?>
</body>
</html>