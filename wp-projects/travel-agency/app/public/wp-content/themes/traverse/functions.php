<?php

function_load_stylesheet() {
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800,900', array(), 1, 'all');
    wp_enqueue_style('montserrat');

    wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css', array(), 1, 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('stylecss', get_template_directory_uri().'/css/style.css', array(), 1, 'all');
    wp_enqueue_style('stylecss');
    
    wp_register_style('mediaqueries', get_template_directory().'/css/mediaQueries.css', array(), 1, 'all');
    wp_enqueue_style('mediaqueries');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');