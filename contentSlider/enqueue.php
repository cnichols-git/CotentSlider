<?php

add_action( 'wp_enqueue_scripts', 'contEnqueue' );
function contEnqueue() {

    wp_enqueue_script('jquery');
    wp_enqueue_script('flexslider', get_stylesheet_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'));
    wp_enqueue_script('flexslider-init', get_stylesheet_directory_uri().'/contentSlider/flexsliderCode.js', array('jquery', 'flexslider'));
        
}

add_action('wp_enqueue_scripts', 'sliderStyle');
function sliderStyle() {
    wp_enqueue_style('flexslider', get_stylesheet_directory_uri().'/contentSlider/flexslider.css');
}
