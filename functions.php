<?php 

// add customizer.php file
require_once('templates/helpers/customizer.php');
function daily_tuition_script_enqueue() {

  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/vendor/css/all.min.css');

  wp_enqueue_style('customstyle', get_template_directory_uri() . '/main.css', array(), '1.0.0', 'all' );
  
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
      'primary-menu' => __('Primary Menu','text-domain'),
      'footer-menu' => __('Footer Menu', 'text-domain'),
    )
  );
}
add_action('init', 'register_my_menu');

function add_link_atts($atts){
  $atts['class'] = 'link text-light';
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts');



function daily_title_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form'));
}

add_action('after_setup_theme', 'daily_title_setup');

function fn_custom_excerpt_length($length) {
  return 15;
}

add_filter('excerpt_length','fn_custom_excerpt_length');