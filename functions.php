<?php 


function wp_business_register_scripts() {
    wp_enqueue_style('astra-child-styles', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js');
}
add_action('wp_enqueue_scripts', 'wp_business_register_scripts');