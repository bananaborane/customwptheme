<?php

function customwptheme_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
}

add_action('after_theme_setup', 'customwptheme_theme_support');
    

function customwptheme_register_styles(){

    $version = wp_get_theme()->('Version');
    // Order of loading CSS file matters
    wp_enqueue_style('customwptheme-style', get_template_directory_uri() . "/style.css", array('customwptheme-bootstrap'), $version, 'all');
    wp_enqueue_style('customwptheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('customwptheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'customwptheme_register_styles');



function customwptheme_register_scripts(){

    wp_enqueue_script('customwptheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('customwptheme-popper', 'https://cdn.jsdelivr.net/npmpopper.js01.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('customwptheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.41/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('customwptheme-bootstrap', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);

}

add_action( 'wp_enqueue_scripts', 'customwptheme_register_scripts');

?>