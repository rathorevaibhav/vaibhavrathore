<?php

if ( ! function_exists( 'vr_scripts' ) ) {
    function vr_scripts() {
        wp_enqueue_script('vr-bootstrap-js', get_template_directory_uri().'/dist/lib/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('main', get_template_directory_uri().'/main.js', array('jquery', 'vr-bootstrap-js'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts','vr_scripts');
}

if ( ! function_exists( 'vr_styles' ) ) {
    function vr_styles() {
        wp_enqueue_style('vr-bootstrap-css', get_template_directory_uri().'/dist/lib/css/bootstrap.min.css');
        wp_enqueue_style('style', get_template_directory_uri().'/style.css', array('vr-bootstrap-css'), '1.0.0');
    }
    add_action('wp_enqueue_scripts','vr_styles');
}

//add filter to remove margin above html
add_filter('show_admin_bar','__return_false');

if(!function_exists('custom_excerpt_length')) {
    function custom_excerpt_length(){
        return 40;
    }
    add_filter('excerpt_length','custom_excerpt_length');
}

if(!function_exists('excerpt_more_dots')) {
    function excerpt_more_dots(){
        return '...';
    }
    add_filter('excerpt_more','excerpt_more_dots');
}