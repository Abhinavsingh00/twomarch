<!-- css connect  START-->
<?php
function mychildtheme_enqueue_styles() {
    wp_enqueue_style( 'style-name',  get_stylesheet_uri());
   // font awesome icon  
   wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'mychildtheme_enqueue_styles');


// =============jquery START :START
function add_custom_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_custom_scripts');

//=============== Custom menu setup START
function custom_theme_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => esc_html__( 'Primary Menu', 'custom-theme' ),
        )
    );
}
add_action( 'after_setup_theme', 'custom_theme_register_menus' );

//=============== (Featured images)  setup START

add_theme_support( 'post-thumbnails');
