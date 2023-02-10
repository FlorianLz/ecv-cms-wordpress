<?php
require get_template_directory() . '/inc/theme-functions.php';
add_action('wp_enqueue_scripts', 'ecv_enqueue_scripts', 20);
function ecv_enqueue_scripts(): void
{
    wp_enqueue_script('ecvjs', get_stylesheet_directory_uri() . '/assets/js/app.js', [], '1.0', true);
    wp_enqueue_style('ecvcss', get_stylesheet_directory_uri() . '/assets/css/app.css', '', '1.0', 'all');
}
add_theme_support( 'post-thumbnails' );
