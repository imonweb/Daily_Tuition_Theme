<?php 
/*  
* Template Name: Blog Posts
*/

// get blog posts
?>

<?php if(have_posts() ) : ?>
<?php while(have_posts()) : the_post(); ?>

<div class="article">
  <article class="blog-post">
    <div class="post-thumbnail">
      <!-- <img src="./assets/images/house3.jpg" alt="" class="fluid"> -->
      <?php if(has_post_thumbnail()) : ?>
        <img src="<?php echo get_the_post_thumbnail_uri(); ?>" alt="Post image" class="fluid">
      <?php endif; ?>
    </div>
    <div class="post-info">
      <div class="post-author">
        <a href="#"><span class="text-sm text-gray">by Admin December 4, 2024</span></a>
      </div>
      <div class="post-title">
        <a href="#"><span class="text-lg text-dark">Trip that you'll never ever forget</span></a>
      </div>
      <div class="post-content">
        <p class="para">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
        </p>
      </div>

      <hr>
      <div class="post-cat">
        <a href="#"><span class="text-sm uppercase text-gray">People</span></a>
        <a href="#"><span class="text-sm uppercase text-gray">Travel</span></a>
      </div>
    </div>
  </article>
</div>

<?php endwhile; ?>
<?php else : ?>
<?php echo wpautotop('Sorry, No posts were found'); ?>
<?php endif; ?>



<!-- <div class="article">
  <article class="blog-post">
    <div class="post-thumbnail">
      <img src="./assets/images/house3.jpg" alt="" class="fluid">
    </div>
    <div class="post-info">
      <div class="post-author">
        <a href="#"><span class="text-sm text-gray">by Admin December 4, 2024</span></a>
      </div>
      <div class="post-title">
        <a href="#"><span class="text-lg text-dark">Trip that you'll never ever forget</span></a>
      </div>
      <div class="post-content">
        <p class="para">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
        </p>
      </div>

      <hr>
      <div class="post-cat">
        <a href="#"><span class="text-sm uppercase text-gray">People</span></a>
        <a href="#"><span class="text-sm uppercase text-gray">Travel</span></a>
      </div>
    </div>
  </article>
</div>

<div class="article">
  <article class="blog-post">
    <div class="post-thumbnail">
      <img src="./assets/images/natureboy.jpg" alt="" class="fluid">
    </div>
    <div class="post-info">
      <div class="post-author">
        <a href="#"><span class="text-sm text-gray">by Admin December 8, 2024</span></a>
      </div>
      <div class="post-title">
        <a href="#"><span class="text-lg text-dark">Trip that you'll never ever forget</span></a>
      </div>
      <div class="post-content">
        <p class="para">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
        </p>
      </div>

      <hr>
      <div class="post-cat">
        <a href="#"><span class="text-sm uppercase text-gray">Design</span></a>
        <a href="#"><span class="text-sm uppercase text-gray">Photography</span></a>
      </div>
    </div>
  </article>
</div>

<div class="article">
  <article class="blog-post">
    <div class="post-thumbnail">
      <img src="./assets/images/house2.jpg" alt="" class="fluid">
    </div>
    <div class="post-info">
      <div class="post-author">
        <a href="#"><span class="text-sm text-gray">by Admin December 8, 2024</span></a>
      </div>
      <div class="post-title">
        <a href="#"><span class="text-lg text-dark">Trip that you'll never ever forget</span></a>
      </div>
      <div class="post-content">
        <p class="para">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
        </p>
      </div>

      <hr>
      <div class="post-cat">
        <a href="#"><span class="text-sm uppercase text-gray">Nature</span></a>
        <a href="#"><span class="text-sm uppercase text-gray">Memory</span></a>
      </div>
    </div>
  </article>
</div>
  
<div class="article">
  <article class="blog-post">
    <div class="post-thumbnail">
      <img src="./assets/images/sealions.jpg" alt="" class="fluid">
    </div>
    <div class="post-info">
      <div class="post-author">
        <a href="#"><span class="text-sm text-gray">by Admin December 8, 2024</span></a>
      </div>
      <div class="post-title">
        <a href="#"><span class="text-lg text-dark">Trip that you'll never ever forget</span></a>
      </div>
      <div class="post-content">
        <p class="para">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
        </p>
      </div>

      <hr>
      <div class="post-cat">
        <a href="#"><span class="text-sm uppercase text-gray">Animals</span></a>
        <a href="#"><span class="text-sm uppercase text-gray">Travel</span></a>
      </div>
    </div>
  </article>
</div>

<div class="article">
  <article class="blog-post">
    <div class="post-thumbnail">
      <img src="./assets/images/girl.jpg" alt="" class="fluid">
    </div>
    <div class="post-info">
      <div class="post-author">
        <a href="#"><span class="text-sm text-gray">by Admin December 8, 2024</span></a>
      </div>
      <div class="post-title">
        <a href="#"><span class="text-lg text-dark">Trip that you'll never ever forget</span></a>
      </div>
      <div class="post-content">
        <p class="para">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
        </p>
      </div>

      <hr>
      <div class="post-cat">
        <a href="#"><span class="text-sm uppercase text-gray">Nature</span></a>
        <a href="#"><span class="text-sm uppercase text-gray">People</span></a>
      </div>
    </div>
  </article>
</div>

<div class="article">
  <article class="blog-post">
    <div class="post-thumbnail">
      <img src="./assets/images/house2.jpg" alt="" class="fluid">
    </div>
    <div class="post-info">
      <div class="post-author">
        <a href="#"><span class="text-sm text-gray">by Admin December 8, 2024</span></a>
      </div>
      <div class="post-title">
        <a href="#"><span class="text-lg text-dark">Trip that you'll never ever forget</span></a>
      </div>
      <div class="post-content">
        <p class="para">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
        </p>
      </div>

      <hr>
      <div class="post-cat">
        <a href="#"><span class="text-sm uppercase text-gray">Nature</span></a>
        <a href="#"><span class="text-sm uppercase text-gray">Memory</span></a>
      </div>
    </div>
  </article>
</div> -->