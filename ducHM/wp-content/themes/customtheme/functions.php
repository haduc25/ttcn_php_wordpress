<?php
// import file style.css
function customtheme_enqueue_styles() {
    wp_enqueue_style( 'customtheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'customtheme_enqueue_styles' );
 
?>