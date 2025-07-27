<?php

function minimal_portfolio_enqueue_assets() {
    // Root style.css
    wp_enqueue_style('theme-root-style', get_stylesheet_uri());

    // Custom style file
    wp_enqueue_style('minimal-style', get_template_directory_uri() . '/assets/css/style.css');

    // JavaScript
    wp_enqueue_script('minimal-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'minimal_portfolio_enqueue_assets');

// Enable support for dynamic title tag
add_theme_support('title-tag');

// Enable featured images
add_theme_support('post-thumbnails');
// Register Custom Post Type: Portfolio
function create_portfolio_cpt() {
    $labels = array(
        'name' => 'Portfolio',
        'singular_name' => 'Portfolio Item',
        'menu_name' => 'Portfolio',
        'name_admin_bar' => 'Portfolio Item',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Portfolio Item',
        'new_item' => 'New Portfolio Item',
        'edit_item' => 'Edit Portfolio Item',
        'view_item' => 'View Portfolio Item',
        'all_items' => 'All Portfolio Items',
        'search_items' => 'Search Portfolio',
        'not_found' => 'No portfolio items found.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-portfolio',
        'has_archive' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true, // Enable block editor (Gutenberg)
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_cpt');
