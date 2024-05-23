<?php
class Custom_Post_Type {
    public function __construct() {
        add_action('init', array($this, 'register_post_type'));
    }

    public function register_post_type() {
        register_post_type('custom_type', array(
            'labels' => array(
                'name' => __('Custom Types'),
                'singular_name' => __('Custom Type')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail')
        ));
    }
}

new Custom_Post_Type();
