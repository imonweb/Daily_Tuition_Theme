<?php // silence is golden... ?>

<?php get_header(); ?>
 
 <section class="post-area">

 <?php 
// Loops
if(have_posts()) :
  while(have_posts()) :
    the_post();
    ?>

    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      
      <div class="post-meta">
        <span class="date">
          Posted on: <?php the_date() ?> at <?php the_time() ?>
        </span>
        <span class="category">
          Posted in: <?php the_category() ?>
        </span>
        <span class="author">
           <div class="author"><?php the_author() ?></div>
        </span> 
      </div>

    </article>

    <?php the_content(); ?>
    <?php //the_excerpt(); ?>

    <?php
  endwhile;
endif;

?>
</section>

<aside class="sidebar">
  <?php get_sidebar(); ?>
</aside>


 
<?php get_footer(); ?>