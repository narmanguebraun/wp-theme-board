<?php
add_theme_support( 'post-thumbnails' );
add_theme_support('automatic-feed-links'); // Add default posts and comments RSS feed links to head

/* NAV */
function register_menu() {
    register_nav_menu('First', __('First'));
}
add_action( 'init', 'register_menu' );

if ( !is_nav_menu('First')) {
    $menu_id = wp_create_nav_menu('First');
    wp_update_nav_menu_item($menu_id, 1);
}
if ( !is_nav_menu('Second')) {
    $menu_id = wp_create_nav_menu('Second');
    wp_update_nav_menu_item($menu_id, 2);
}
