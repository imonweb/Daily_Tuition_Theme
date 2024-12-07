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
                <?php 
                  echo paginate_links(array(
                    'mid_size' => 2,
                    'prev_text' => __('<span class="fa fa-arrow-left"></span>'),
                    'next_text' => __('<span class="fa fa-arrow-right"></span>')
                  ));

                  wp_reset_postdata(); 

                  
                  ?>
                  <?php //the_posts_pagination(); ?>
            
                <!-- <a href="#"><span>1</span></a>
                <a href="#"><span>2</span></a>
                <a href="#"><span>3</span></a>
                <a href="#"><span class="fa fa-arrow-right"></span></a> -->
              </div>
             </div>
          
          </div>
          <div class="col-4-lg col-12-md">
          <!--========= sidebar ==========-->
           <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
     </section>
 
<?php get_footer(); ?>