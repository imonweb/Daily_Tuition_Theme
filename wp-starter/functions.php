<?php 
function daily_tuition_script_enqueue() {

  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all' );

  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );

}

add_action('wp_enqueue_scripts', 'daily_tuition_script_enqueue');

/*  Sidebar Function */
function daily_tuition_widget_setup() {
  
  register_sidebar(
    array(
      'id'            => 'new_sidebar',
      'name'          => __('New Sidebar'),
      'description'   => __('A short description of the sidebar')
      // 'class'         => 'custom',
      // 'before_widget' => '<aside id="%1$s" class="widget %2$s"',
      // 'after_widget'  => '</aside>',
      // 'before_title'  => '<h1 class="widget-title">',
      // 'after_title'   => '</h1>',
    )
  );

  register_sidebar(
    array(
      'id'            => 'footer_sidebar',
      'name'          => __('Footer Sidebar'),
      'description'   => __('A short description of the sidebar')
    )
  );
}
add_action('widgets_init', 'daily_tuition_widget_setup');

// action hook
function theme_setup(){
  add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
)  );
}
add_action( 'after_setup_theme', 'theme_setup' );

// register navigation menu
function register_my_menu() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu'),
    )
  );
}
add_action('init', 'register_my_menu');