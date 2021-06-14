<?php

add_action( 'wp_enqueue_scripts', 'theme_name_styles' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/script.js' );
}

/* Custom Post Type */
add_action( 'init', 'cinema_init' );


    function cinema_init(){
        register_taxonomy(
            'cinema_genre',
            'cinema',
            array(
                'label' => ('Genre'),
                'rewrite' => array('slug' => 'genre')
            )
        );
        register_taxonomy(
            'cinema_year',
            'cinema',
            array(
                'label' => ('Year'),
                'rewrite' => array('slug' => 'year')
            )
        );
        register_taxonomy(
            'cinema_producer',
            'cinema',
            array(
                'label' => ('Producer'),
                'rewrite' => array('slug' => 'producer'),
                'hierarchical' => true
            )
        );
        register_post_type( 'cinema', [
            'label'  => null,
            'labels' => [
                'name'               => __( 'Cinema'),
                'singular_name'      => __( 'Film' )
            ],
            'public'              => true,
            'has_archive'         => true,
            'menu_position' => 3,
            'supports' => array('title', 'editor', 'thumbnail','post-formats','excerpt','custom-fields')
        ] );

    }

