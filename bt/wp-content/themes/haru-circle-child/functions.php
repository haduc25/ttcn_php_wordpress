<?php 
/**
 *
 * [Haru Circle] child theme functions and definitions
 */

function haru_child_theme_enqueue_scripts() {
    wp_enqueue_style( 'haru-theme-child-style', get_stylesheet_directory_uri(). '/style.css', array('haru-theme-style') );
}
add_action( 'wp_enqueue_scripts', 'haru_child_theme_enqueue_scripts', 12 );

?>
