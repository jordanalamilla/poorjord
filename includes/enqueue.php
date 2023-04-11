<?php if( !is_admin() ) {

    /**
     * Styles
     */
    wp_enqueue_style( 'main-styles', get_stylesheet_directory_uri() . '/style.css', [], time(), '' );

    /**
     * Scripts
     */
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', [], '4.0.0', true );
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/assets/scripts/script.js', [], time(), true );

}