<?php 
/*  
*  Theme Name: Wordpress customizer settings
*/

// WP_Customize_Control

function fn_customizer_settings($wp_customizer){
  // add customizer settings
  // include new section
  $wp_customizer->add_section('header', array(
    'title' => __('Header Settings', 'Daily'),
    'priority' => 70
  ));

  //allow us to add capability to the customizer setting
  $wp_customizer->add_setting('header_image', array(
    'capability' => 'edit_theme_options'
  ));


  // add controls in the customizer settings
  $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'header_image', array(
    'label' => __('Header Image', 'Daily'),
    'section' => 'header'
  )));

  // adding header text
   $wp_customizer->add_setting('header_text_field', array(
    'capability' => 'edit_theme_options',
    'default' => 'Simplicity'
  ));

  // adding text control
  $wp_customizer->add_control('header_text_control_settings', array(
    'label' =>  __('Header Text', 'Daily'),
    'description' => 'Change Header Text',
    'section' => 'header',
    'settings' => 'header_text_field'
  ));

   // adding header description
   $wp_customizer->add_setting('header_desc_field', array(
    'capability' => 'edit_theme_options',
    'default' => 'The Power of WordPress'
  ));

  // adding text control
  $wp_customizer->add_control('header_description_control', array(
    'label' =>  __('Header Description', 'Daily'),
    'description' => 'Change Header Description',
    'section' => 'header',
    'settings' => 'header_desc_field'
  ));
}

add_action('customize_register', 'fn_customizer_settings');


?>