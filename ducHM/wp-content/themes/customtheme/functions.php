<?php
// import file style.css
function customtheme_enqueue_styles() {
    wp_enqueue_style( 'customtheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'customtheme_enqueue_styles' );
 
// Something
// function customPostType(){

// }

// Meta
add_action('load-post.php', 'smashing_post_meta_boxes_setup');
add_action('load-post-new.php', 'smashing_post_meta_boxes_setup');

// Meta box setup
function smashing_post_meta_boxes_setup(){
    add_action('add_meta_boxes', 'smashing_add_post_meta_boxes');
}

function smashing_add_post_meta_boxes(){
    add_meta_box(
        'smashing-post-class', //Unique ID
        esc_html__('Post Class', 'example'), //Title
        'smashing_post_class_meta_box', //Callback function
        'post', //Admin page
        'side', //Context
        'default' //Priority
    );
}


// Meta by chatGPT
function custom_meta_box_callback( $post ) {
    $meta_value = get_post_meta( $post->ID, 'meta_key_name', true );

    echo '<label for="meta_field">Meta Field:</label>';
    echo '<input type="text" id="meta_field" name="meta_field" value="' . esc_attr( $meta_value ) . '" />';
}

function save_custom_meta_box_data( $post_id ) {
    if ( isset( $_POST['meta_field'] ) ) {
        update_post_meta( $post_id, 'meta_key_name', sanitize_text_field( $_POST['meta_field'] ) );
    }
}

add_action( 'save_post', 'save_custom_meta_box_data' );
