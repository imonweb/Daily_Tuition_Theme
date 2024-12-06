<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title><?php bloginfo(); ?></title>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!--========= Header Area start ==========-->
  <header class="header-area">
    <div class="container">
      <nav class="nav">
        <a href="#" class="link nav-brand text-light">
          <?php 
            if(function_exists('the_custom_logo')){
              the_custom_logo();
            } else {
              bloginfo('name'); 
            }
          ?>
         
        </a>

         <?php 
            // if(has_nav_menu('header-menu')) {
            //   wp_nav_menu( array('theme_location' => 'primary-menu') );
            // }
           
          ?>

        <!--========= toggle menu ==========-->
        <button class="toggle-button">
          <span class="fas fa-humburger"></span>
        </button>

        <!--========= navigation items ==========-->
        <div class="collapse" id=""toggle-collapse>

          <?php 
            // Display primary menu
            if(has_nav_menu("primary-menu")){
              wp_nav_menu( array(
                'theme_location' => 'primary-menu',
                'container' => '',
                'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>'
              ) );
            }

            
          ?>

        <!--========= Search bar ==========-->
        <div class="search">
          <?php 
            // get the searchform.php template file using get_search_form() template tag
            get_search_form(); 
          ?>
          <!-- <form action="" class="form-group">
            <input type="search" class="input-control mr-sm-2" placeholder="Search">
            <button class="btn btn-submit" type="submit"><i class="fas fa-search"></i></button>
          </form> -->
        </div>

        </div>
      </nav>
    </div>
  </header>
  <!--========= Header Area end ==========-->

  <!--========= main site area start ==========-->
  <main class="main-area">
 

<?php 
  // items_wrap is built using sprintf()
  // This is a template that is parsed with sprintf():
  /*
  $nav_menu .= sprintf(
    $args->items_wrap,
    esc_attr($wrap_class), // %1$s
    esc_attr($wrap_class), // %2$s
    $items // %3  
  )
    */
?>

