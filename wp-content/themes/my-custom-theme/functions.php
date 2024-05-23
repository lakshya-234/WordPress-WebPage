<?php
function my_custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('react-app', get_template_directory_uri() . '/build/index.js', array('wp-element'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_scripts');

require_once get_template_directory() . '/inc/class-custom-post-type.php';

function my_custom_theme_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'my-custom-theme-block',
        get_template_directory_uri() . '/build/block.js',
        array('wp-blocks', 'wp-element', 'wp-editor'),
        true
    );
}
add_action('enqueue_block_editor_assets', 'my_custom_theme_enqueue_block_editor_assets');
