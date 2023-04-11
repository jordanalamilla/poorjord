<?php

/**
 * Includes
 */
include_once( 'includes/enqueue.php' );

/**
 * Register Blocks
 */
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
    if( function_exists('acf_register_block_type') ) {

        // Content
        acf_register_block_type(array(
            'name'              => 'content',
            'title'             => __('Content'),
            'description'       => __('Display a block of text content.'),
            'render_template'   => 'template-parts/blocks/content.php',
            'icon'              => 'editor-alignleft',
            'keywords'          => array( 'text', 'content', 'wysiwyg', 'editor' ),
        ));

        // Gallery
        acf_register_block_type(array(
            'name'              => 'gallery',
            'title'             => __('Gallery'),
            'description'       => __('Display a series of images in a grid layout.'),
            'render_template'   => 'template-parts/blocks/gallery.php',
            'icon'              => 'format-image',
            'keywords'          => array( 'images', 'gallery' ),
        ));

        // Carousel
        acf_register_block_type(array(
            'name'              => 'slider',
            'title'             => __('Slider'),
            'description'       => __('Display a slider of images and text content.'),
            'render_template'   => 'template-parts/blocks/slider.php',
            'icon'              => 'embed-photo',
            'keywords'          => array( 'images', 'slider', 'slides', 'text', 'content' ),
        ));
    }
}

/**
 * Preprint
 */
function pp($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

/**
 * Menus
 */
register_nav_menus(array(
    'primary-menu' => esc_html__('Primary Menu')
));