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
add_theme_support('menus')