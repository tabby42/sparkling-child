<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action('wp_enqueue_scripts', 'sc_scripts');

function sc_scripts() {
   wp_enqueue_style('alegreya', '//fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,700|Alegreya+Sans:400,500i,700');
   wp_enqueue_style( 'sc_styles', get_stylesheet_uri(), null, microtime() );
}
?>