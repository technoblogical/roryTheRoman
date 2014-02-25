<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

  register_sidebar( array(
  'name' => 'upper-widgets',
  'id' => 'upper-widgets',
  'before_widget' => '<li class="widget">',
  'after_widget' => '</li>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
 ) );


  register_sidebar( array(
  'name' => 'left-sidebar',
  'id' => 'left-sidebar',
  'before_widget' => '<li class="widget">',
  'after_widget' => '</li>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
 ) );

 register_sidebar( array(
  'name' => 'right-sidebar',
  'id' => 'right-sidebar',
  'before_widget' => '<li class="widget">',
  'after_widget' => '</li>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
 ) );

  register_sidebar( array(
  'name' => 'desktop-widebar',
  'id' => 'desktop-widebar',
  'before_widget' => '<li class="widget">',
  'after_widget' => '</li>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
 ) );

  register_sidebar( array(
  'name' => 'desktop-not-widebar',
  'id' => 'desktop-not-widebar',
  'before_widget' => '<li class="widget">',
  'after_widget' => '</li>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
 ) );

  register_sidebar( array(
  'name' => 'lower-widgets',
  'id' => 'lower-widgets',
  'before_widget' => '<li class="widget">',
  'after_widget' => '</li>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
 ) );


  register_sidebar( array(
  'name' => 'mobile-upper-widgets',
  'id' => 'mobile-upper-widgets',
  'before_widget' => '<li class="widget">',
  'after_widget' => '</li>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
 ) );


  register_sidebar( array(
  'name' => 'mobile-widebar',
  'id' => 'mobile-widebar',
  'before_widget' => '<li class="widget">',
  'after_widget' => '</li>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
 ) );

  register_sidebar( array(
  'name' => 'mobile-lower-widgets',
  'id' => 'mobile-lower-widgets',
  'before_widget' => '<li class="widget">',
  'after_widget' => '</li>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
 ) );


/* register_sidebar( array(
  'name' => 'leftSidebar',
  'id' => 'leftSidebar',
  'before_widget' => '<div class="sidebarWidget">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
 ) );

  register_sidebar( array(
  'name' => 'mobileBanner',
  'id' => 'mobileBanner',
  'before_widget' => '<div class="mobileWidget">',
  'after_widget' => '</div>',
  'before_title' => '<p class="mobilewidget-title">',
  'after_title' => '</div>',
 ) );
*/
} //closes arphabet_widgets_init
add_action( 'widgets_init', 'arphabet_widgets_init' );

$defaults = array(
  'default-color'          => 'dddddd',
  'default-image'          => get_template_directory_uri() . '/images/dark_leather.png',
  'wp-head-callback'       => '_custom_background_cb',
  'admin-head-callback'    => '',
  'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

add_theme_support( 'post-thumbnails' );

$args = array(
  'default-image' => get_template_directory_uri() . '/images/old_map.png',
  'height'         => 50,
  'width'          => 1920,
  'uploads'        => true,
  'flex-width'     => true,
  'flex-height'    => true,
  'random-default' => false,
);
add_theme_support( 'custom-header', $args );

?>