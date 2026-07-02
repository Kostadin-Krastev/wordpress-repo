<?php
function load_stylesheets() {
    wp_register_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&family=Work+Sans:wght@400;700&display=swap',
        array(),
        null,
        'all'
        );

    wp_enqueue_style('google-fonts');

    wp_register_style(
        'stylecss',
        get_theme_file_uri('css/style.css'),
        array('google-fonts'), // <-- "load google-fonts before style.css"
        1,
        'all'
    );
    
    wp_enqueue_style('stylecss');

    wp_register_style(
        'home-pagecss',
        get_theme_file_uri('css/home-page.css'),
        array(),
        1,
        'all'
    );

    wp_enqueue_style('home-pagecss');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts() {
    wp_register_script(
        'fontawesome-kit',
        'https://kit.fontawesome.com/6e48a1d0c5.js',
        array(),
        1,
        true
    );

    wp_enqueue_script('fontawesome-kit');
}
add_action('wp_enqueue_scripts', 'load_scripts');