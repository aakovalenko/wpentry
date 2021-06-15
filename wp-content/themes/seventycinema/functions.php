<?php
/* for activate menu in admin panel'*/
add_action( 'after_setup_theme', function(){
  add_theme_support('menus' );
} );
/**
 * add js ans css
 */
add_action( 'wp_enqueue_scripts', 'theme_name_styles' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/script.js' );
}

/**
 * add js ans css bootstrap
 */
function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

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
            'cinema_actor',
            'cinema',
            array(
                'label' => ('Actor'),
                'rewrite' => array('slug' => 'actor'),
            )
        );
        register_taxonomy(
            'cinema_type',
            'cinema',
            array(
                'label' => ('Type'),
                'rewrite' => array('slug' => 'type'),
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
            'supports' => array('title', 'editor', 'thumbnail','post-formats','excerpt')
        ] );

    }

