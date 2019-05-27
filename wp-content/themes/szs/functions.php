<?php
/**
 * Samodra functions and definitions
 *
 * @package Samodra
 * @since   Samodra 1.0
 */

define( 'SZS_VERSION', '2.1.1' );

function szs_enqueue_styles() {

    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/all.min.css', array(), 201831123);
    wp_enqueue_style( 'bootstrap1', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), 20141119 );
    
    wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), 21293123);
}
function szs_enqueue_scripts() {
  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array());
  
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'));
  wp_enqueue_script( 'theme-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'));
  
}

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

function register_my_menus() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

require get_template_directory() . '/inc/pagination.php';

require get_template_directory() . '/inc/schedule.php';

require get_template_directory() . '/inc/customizer.php';


add_action( 'init', 'register_my_menus' );
add_action( 'wp_enqueue_scripts', 'szs_enqueue_styles' );
add_action( 'wp_footer', 'szs_enqueue_scripts' );
// add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
add_action('get_header', 'remove_admin_login_header');

?>