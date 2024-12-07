<aside class="sidebar">
             <!--========= latest post section start ==========-->
            <section class="latest-post">
              <a href="#" class="text-md text-dark">Latest Post</a>
              <div class="flex flex-column">
                <!--========= get template file using get_template_part() ==========-->
                <?php get_template_part('templates/temp/sidebar', 'latest-post'); ?> 
              </div>
            </section>
            <!--========= latest post section end ==========-->

            <!--========= Search area start ==========-->
            <section class="search-area">
              <div class="search">
                <h3 class="text-md text-dark">Search</h3>
                 <!-- <form action="" class="form-group">
                  <input type="search" class="input-control mr-sm-2" placeholder="Search">
                  <button class="btn btn-submit" type="submit"><i class="fas fa-search"></i></button>
                 </form> -->
                 <?php get_search_form(); ?>
              </div>
            </section>
            <!--========= Search area end ==========-->

            <!--========= popular tags start ==========-->
            <section class="popular-tags">
              <h4 class="text-md">Popular Tags</h4>

              <div class="tags flex flex-row flex-wrap">
                <!-- <a href="#"><span>camera</span></a>
                <a href="#"><span>bike</span></a>
                <a href="#"><span>craft</span></a>
                <a href="#"><span>photography</span></a>
                <a href="#"><span>article</span></a>
                <a href="#"><span>events</span></a>
                <a href="#"><span>driving</span></a>
                <a href="#"><span>wordpress</span></a> -->
                 <?php 
                    // template tag
                    get_template_part('templates/temp/post','tags');
                  ?>

                   
              </div>
            </section>
            <!--========= popular tags end ==========-->
           </aside>