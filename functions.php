<?php
 
function my_theme_enqueue_styles() {
  
    $parent_style_handle = 'twentynineteen-style'; // change this value
  
    wp_enqueue_style( $parent_style_handle, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twentynineteen-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style_handle )
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
 
?>