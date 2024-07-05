<?php
/*
Plugin Name: Snippets
Description: Snippets is a custom WordPress plugin designed to simplify the management and insertion of reusable content blocks called "snippets" into various posts and pages on a WordPress site.
Version: 1.0
Author: Strangefrequency LLC
Author URI: https://strangefrequency.com/
License: GPL v3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Register Custom Post Type
function create_snippets_post_type() {
    $labels = array(
        'name'                  => _x('Snippets', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Snippet', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Snippets', 'text_domain'),
        'name_admin_bar'        => __('Snippet', 'text_domain'),
        'archives'              => __('Snippet Archives', 'text_domain'),
        'attributes'            => __('Snippet Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Snippet:', 'text_domain'),
        'all_items'             => __('All Snippets', 'text_domain'),
        'add_new_item'          => __('Add New Snippet', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Snippet', 'text_domain'),
        'edit_item'             => __('Edit Snippet', 'text_domain'),
        'update_item'           => __('Update Snippet', 'text_domain'),
        'view_item'             => __('View Snippet', 'text_domain'),
        'view_items'            => __('View Snippets', 'text_domain'),
        'search_items'          => __('Search Snippet', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into snippet', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this snippet', 'text_domain'),
        'items_list'            => __('Snippets list', 'text_domain'),
        'items_list_navigation' => __('Snippets list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter snippets list', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Snippet', 'text_domain'),
        'description'           => __('Custom Post Type for Snippets', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions',),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 50,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('snippet', $args);
}
add_action('init', 'create_snippets_post_type', 0);

// Shortcode to Display Snippets
function snippet_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'id' => '',
        ), $atts, 'snippet'
    );

    $snippet_id = $atts['id'];

    if (!$snippet_id) {
        return '';
    }

    $snippet_post = get_post($snippet_id);

    if (!$snippet_post || $snippet_post->post_type !== 'snippet') {
        return '';
    }

    return apply_filters('the_content', $snippet_post->post_content);
}
add_shortcode('snippet', 'snippet_shortcode');
