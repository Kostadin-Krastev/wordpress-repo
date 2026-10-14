<?php
function load_stylesheets() {
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800,900', array(), 1, 'all');
    wp_enqueue_style('montserrat');

    wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css', array(), 1, 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('stylecss', get_template_directory_uri().'/css/style.css', array(), 1, 'all');
    wp_enqueue_style('stylecss');
    
    wp_register_style('mediaqueries', get_template_directory_uri().'/css/mediaQueries.css', array(), 1, 'all');
    wp_enqueue_style('mediaqueries');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts() {
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), 1, 'true');
    wp_enqueue_script('jquery');

    wp_register_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array(), 1, 'true');
    wp_enqueue_script('bootstrapcdn');

    wp_register_script('scriptsjs', get_template_directory_uri().'/js/scripts.js', array(), 1, 'true');
    wp_enqueue_script('scriptsjs');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Add theme support
add_theme_support('menus');
add_theme_support('widgets');

// Register menu's location's
register_nav_menus(
    array(
        'main-menu' => __('Main Menu', 'Desktop main menu')
    )
);

// Register footer widgets

function footer_widgets() {
    register_sidebar(
        array(
            'name' => 'footer 1',
            'id' => 'footer_1',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        )
    );

     register_sidebar(
        array(
            'name' => 'footer 2',
            'id' => 'footer_2',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        )
    );

     register_sidebar(
        array(
            'name' => 'footer 3',
            'id' => 'footer_3',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Footer Created By',
            'id' => 'footer_created_by'
        )
    );

    register_sidebar(
        array(
            'name' => 'Footer Copyright',
            'id' => 'footer_copyright'
        )
    );
};

add_action('widgets_init', 'footer_widgets');