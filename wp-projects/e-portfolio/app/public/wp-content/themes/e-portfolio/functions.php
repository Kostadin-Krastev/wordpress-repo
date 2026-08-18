<?php
function load_stylesheets() {
    wp_register_style("bootstrapcss", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css", array(), 1, "all"); // "all" means that it will apply to every device. It is "all" by default so it is unnecessary to be written
    wp_enqueue_style("bootstrapcss");

    wp_register_style("googlefont", "https://fonts.googleapis.com/css?family=Lato", array(), 1, "all");
    wp_enqueue_style("googlefont");

    wp_register_style("stylecss", get_theme_file_uri("css/style.css"), array(), 1);
    wp_enqueue_style("stylecss");

    wp_register_style("stylecss2", get_theme_file_uri("css/style2.css"), array(), 1);
    wp_enqueue_style("stylecss2");
}

add_action("wp_enqueue_scripts", "load_stylesheets");

function load_scripts() {
    wp_enqueue_script("jquery"); // Use WordPress's built-in jQuery

    wp_register_script("bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array("jquery"), 1, true); //true if its going to be printed in the footer. false if not.
    wp_enqueue_script("bootstrap");
}

add_action("wp_enqueue_scripts", "load_scripts");

// Add Main Menu functionality in WP appearance menu
add_theme_support('menus');

//Registering the Main Menu that is made in appearance => Menus
register_nav_menus(array(
    'main_menu' => __('Main Menu', 'The main menu of the e-portfolio theme')
    ));

// Register Testimonial Custom Post Type
function testimonial_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonial', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'text_domain' ),
		'description'           => __( 'People endorsements', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-status',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'testimonial_post_type', 0 );