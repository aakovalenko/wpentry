<?php
/*
 * Plugin Name: Show  phone
 * Description: Show phone with shortcode
 * Version: 1.0
 */
add_action( 'init', 'register_shortcode' );

function register_shortcode() {
    add_shortcode('phone', 'show_phone');
}

function show_phone() {
    return '123-456-7899';
}