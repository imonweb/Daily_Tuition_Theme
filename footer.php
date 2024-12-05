  


</main>
  <!--========= main site area end ==========-->

  <!--========= footer area start ==========-->
  <footer class="footer-area">
    <div class="row">
      <div class="col-4-lg col-4-md col-12-sm">
        <!--========= about me ==========-->
        <section class="about-me">
          <div class="site-logo">
            <img src="./assets/images/logo.png" alt="logo" width="100px">
          </div>
          <p class="para">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <div class="social-media">
            <?php 
                // if(has_nav_menu('footer-menu')) {
                //   wp_nav_menu( array('theme_location' => 'footer_menu') );
                // }
            ?>
            <a href="#" class="text-primary"><span class="fab fa-facebook"></span></a>
            <a href="#" class="text-primary"><span class="fab fa-instagram"></span></a>
            <a href="#" class="text-primary"><span class="fab fa-x"></span></a>
            <a href="#" class="text-primary"><span class="fab fa-youtube"></span></a>
          </div>
        </section>
      </div>
      <div class="col-4-lg col-4-md col-12-sm">
        <!--========= recent post area ==========-->
        <section class="recent-post">
          <a href="#" class="text-md text-light">Recent Post</a>
          <div class="posts flex flex-row flex-wrap">
            <div class="column">
              <div class="post-image">
                <img src="./assets/images/hotel.jpg" alt="footer image" class="fluid">
              </div>
            </div>
             <div class="column">
              <div class="post-image">
                <img src="./assets/images/house1.jpg" alt="footer image" class="fluid">
              </div>
            </div>
             <div class="column">
              <div class="post-image">
                <img src="./assets/images/man_bench.jpg" alt="footer image" class="fluid">
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="col-4-lg col-4-md col-12-sm">
        <!--========= popular tags ==========-->
        <section class="popular-tags">
          <a href="#" class="text-md text-light">Latest Post</a>

          <div class="tags flex flex-row flex-wrap">
            <a href="#" class="link"><span>All</span></a>
            <a href="#" class="link"><span>Commercial</span></a>
            <a href="#" class="link"><span>Natural</span></a>
            <a href="#" class="link"><span>People</span></a>
            <a href="#" class="link"><span>Photography</span></a>
            <a href="#" class="link"><span>Travel</span></a>
            <a href="#" class="link"><span>Uncategorized</span></a>
          </div>
        </section>
      </div>
    </div>

    <div class="rights text-center text-center text-gray">
      <p>&copy; Copyrights <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.</p>
    
    </div>
  </footer>
  <!--========= footer area end ==========-->

  <!--========= include jquery script file ==========-->
  <script src="./vendor/js/jquery.js"></script>
  <!--========= custom js file ==========-->
  <script src="./assets/js/script.js"></script>

 
  
 
<?php dynamic_sidebar('footer_sidebar'); ?>
<?php wp_footer(); ?>
 
</body>
</html>