<?php // silence is golden... ?>

<?php get_header(); ?>
     <!--========= Banner Area Start ==========-->
        <section class="banner-area">
          <div class="container-fluid">
            <div class="banner">
              <!-- <img src="./assets/images/banner3.jpg" alt="banner area" class="fluid"> -->
               <?php if(get_theme_mod('header_image')) : ?>
                <img src="<?php echo esc_url(get_theme_mod('header_image')); ?>" alt="banner area" class="fluid">
               <?php endif; ?>
            </div>
            <div class="banner-title text-center">
              <!-- <h1 class="text-lg text-light">Simplicity</h1> -->
              <?php if(get_theme_mod('header_text_field')) : ?>
                <h1 class="text-lg text-light"><?php echo get_theme_mod('header_text_field'); ?> </h1>
              <?php endif; ?>
              <!-- <span class="description text-sm text-light">The Power of Word Press</span> -->
              <?php if(get_theme_mod('header_desc_field')) : ?>
                <span class="description text-sm text-light"><?php echo get_theme_mod('header_desc_field'); ?> </span>
              <?php endif; ?>
            </div>
          </div>
        </section>
     <!--========= Banner Area End ==========-->

     <!--========= Categories Section start ==========-->
     <section class="categories">
      <div class="container">
        <div class="flex flex-row flex-wrap">
          <?php 
            // get_template_part() template tag
            get_template_part('templates/temp/categories', 'content');
          ?>
        </div>
      </div>
     </section>
     <!--========= Categories Section end ==========-->

     <!--========= Post Area ==========-->
     <section class="post-area">
      <div class="wrapper">
        <div class="row">
          <!--========= two columns layout ==========-->
          <div class="col-8-lg col-12-md">
             <div class="grid">

              <?php 
                // load template post-content.php in index.php 
                get_template_part('templates/temp/post', 'content');
              ?>

             </div> <!--========= grid ==========-->

             <!--========= Pagination area ==========-->
             <div class="col-12-lg text-center">
              <div class="pagination">
                <a href="#"><span>1</span></a>
                <a href="#"><span>2</span></a>
                <a href="#"><span>3</span></a>
                <a href="#"><span class="fa fa-arrow-right"></span></a>
              </div>
             </div>
          
          </div>
          <div class="col-4-lg col-12-md">
             
           <aside class="sidebar">
             <!--========= latest post section start ==========-->
            <section class="latest-post">
              <a href="#" class="text-md text-dark">Latest Post</a>
              <div class="flex flex-column">
                <article class="new-post">
                  <div class="row">
                    <!--========= two columns ==========-->
                    <div class="col-4-lg post-image">
                      <img src="./assets/images/natureboy.jpg" alt="latest post" class="fluid">
                    </div>
                    <div class="col-8-lg post-title">
                      <div class="cat">
                        <a href="#" class="text-sm text-gray category">People</a>
                        <a href="#" class="text-sm text-gray category">Travel</a>
                      </div>
                      <a href="#" class="text-md text-dark">Trip that you'll never ever forget</a>
                    </div>
                  </div>
                </article>

                <article class="new-post">
                  <div class="row">
                    <!--========= two columns ==========-->
                    <div class="col-4-lg post-image">
                      <img src="./assets/images/girl.jpg" alt="latest post" class="fluid">
                    </div>
                    <div class="col-8-lg post-title">
                      <div class="cat">
                        <a href="#" class="text-sm text-gray category">People</a>
                        <a href="#" class="text-sm text-gray category">Travel</a>
                      </div>
                      <a href="#" class="text-md text-dark">Trip that you'll never ever forget</a>
                    </div>
                  </div>
                </article>
              </div>
            </section>
            <!--========= latest post section end ==========-->

            <!--========= Search area start ==========-->
            <section class="search-area">
              <div class="search">
                <h3 class="text-md text-dark">Search</h3>
                 <form action="" class="form-group">
                  <input type="search" class="input-control mr-sm-2" placeholder="Search">
                  <button class="btn btn-submit" type="submit"><i class="fas fa-search"></i></button>
                 </form>
              </div>
            </section>
            <!--========= Search area end ==========-->

            <!--========= popular tags start ==========-->
            <section class="popular-tags">
              <h4 class="text-md">Popular Tags</h4>

              <div class="tags flex flex-row flex-wrap">
                <a href="#"><span>camera</span></a>
                <a href="#"><span>bike</span></a>
                <a href="#"><span>craft</span></a>
                <a href="#"><span>photography</span></a>
                <a href="#"><span>article</span></a>
                <a href="#"><span>events</span></a>
                <a href="#"><span>driving</span></a>
                <a href="#"><span>wordpress</span></a>
              </div>
            </section>
            <!--========= popular tags end ==========-->
           </aside>
          </div>
        </div>
      </div>
     </section>
 
<?php get_footer(); ?>