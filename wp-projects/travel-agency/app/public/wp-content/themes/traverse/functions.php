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
        'main-menu' => __('Main Menu', 'Desktop main menu'),
        'left-footer-menu' => __('Left Footer Menu', 'Quick links in the left footer sidebar'),
        'middle_footer-menu' => __('Middle Footer Menu', 'Quick links in the middle footer sidebar'),
        'right_footer_menu' => __('Right Footer Menu', 'Quick links in the right footer sidebar'),
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

// Register Custom Post Type
// Slide Items Custom Post Type
function slide_items_post_type() {

	$labels = array(
		'name'                  => _x( 'Slides', 'Post Type General Name', 'travers' ),
		'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'travers' ),
		'menu_name'             => __( 'Slides', 'travers' ),
		'name_admin_bar'        => __( 'Slide', 'travers' ),
		'archives'              => __( 'Item Archives', 'travers' ),
		'attributes'            => __( 'Item Attributes', 'travers' ),
		'parent_item_colon'     => __( 'Parent Item:', 'travers' ),
		'all_items'             => __( 'All Items', 'travers' ),
		'add_new_item'          => __( 'Add New Item', 'travers' ),
		'add_new'               => __( 'Add New', 'travers' ),
		'new_item'              => __( 'New Item', 'travers' ),
		'edit_item'             => __( 'Edit Item', 'travers' ),
		'update_item'           => __( 'Update Item', 'travers' ),
		'view_item'             => __( 'View Item', 'travers' ),
		'view_items'            => __( 'View Items', 'travers' ),
		'search_items'          => __( 'Search Item', 'travers' ),
		'not_found'             => __( 'Not found', 'travers' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'travers' ),
		'featured_image'        => __( 'Featured Image', 'travers' ),
		'set_featured_image'    => __( 'Set featured image', 'travers' ),
		'remove_featured_image' => __( 'Remove featured image', 'travers' ),
		'use_featured_image'    => __( 'Use as featured image', 'travers' ),
		'insert_into_item'      => __( 'Insert into item', 'travers' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'travers' ),
		'items_list'            => __( 'Items list', 'travers' ),
		'items_list_navigation' => __( 'Items list navigation', 'travers' ),
		'filter_items_list'     => __( 'Filter items list', 'travers' ),
	);
	$args = array(
		'label'                 => __( 'Slide', 'travers' ),
		'description'           => __( 'Slide items for hero section', 'travers' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-slides',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'hero_section', $args );

}
add_action( 'init', 'slide_items_post_type', 0 );