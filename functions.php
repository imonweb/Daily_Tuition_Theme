<?php 
function daily_tuition_script_enqueue() {

  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all' );

  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );

}

add_action('wp_enqueue_scripts', 'daily_tuition_script_enqueue');

/*  Sidebar Function */
function basic_widget_setup() {
  
  register_sidebar(
    array(
      'name'          => 'sidebar',
      'id'            => 'sidebar-1',
      'class'         => 'custom',
      'description'   => 'Standard Sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s"',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    )
  );
}
add_action('widgets_init', 'basic_widget_setup');