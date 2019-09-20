<?php
function thumb(){
    load_theme_textdomain("mythemepost");
    add_theme_support("post-thumbnails");
}
add_action("after_setup_theme","thumb");

 
function mythemepost_enque(){
   
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/fon-awesome.css', array(), '4.3.1', 'all');
    wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.3.1', 'all');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '0.1', 'all');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . "/style.css");




    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array("jquery"), '0.1', 'true');

}
add_action("wp_enqueue_scripts", "mythemepost_enque");

/**
 * Register our sidebars and widgetized areas.                             
 *
 */

function mythemepost_widgets(){ 
    register_sidebar( array(
    'name' => 'Lavel Up New Widget Area',
    'id' => 'level_up_new_widget_area',
    'before_widget' => '<aside>',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    
    ));
}

add_action( 'widgets_init', 'mythemepost_widgets');

register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' ),
    'secondary-menu' => __( 'Secondary Menu' )
    )
);

function theme_logo_setup() {
    
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 200,
        'flex-width' => true,
    ) );

}
add_action( 'after_setup_theme', 'theme_logo_setup' );


function mytheme_wordcount_heading($heading){
    // $heading = strtoupper($heading);
    $heading = "Total Words";
    return $heading;
}
add_filter('wordcount_heading','mytheme_wordcount_heading');

function mytheme_wordcount_tag($tag){
    return "p"; 
}
add_filter('wordcount_tag','mytheme_wordcount_tag');

function mytheme_readingtime_tag($tag){
   return "h6";
}
add_filter('wordcount_readingtime_tag','mytheme_readingtime_tag');

 function mytheme_exclude_post_types($post_types){
      $post_types[] = 'page';
      //array_push($post_types,'page');
      return $post_types;
 }
add_filter('pqrc_excluded_post_types','mytheme_exclude_post_types');

function mytheme_qrcode_dimension($dimension){
    return '100x100';
}
//add_filter('pqrc_qrcode_dimension','mytheme_qrcode_dimension');