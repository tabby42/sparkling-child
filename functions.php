<?php
// enqueue parent styles
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles', 10 );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

//enqueue styles and fonts
add_action('wp_enqueue_scripts', 'sc_scripts', 20);

function sc_scripts() {
   wp_enqueue_style('alegreya', '//fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,700|Alegreya+Sans:400,500i,700');
   wp_enqueue_style( 'sc_styles', get_stylesheet_uri(), null, microtime() );
}

// add theme support for full-width images
add_action( 'after_setup_theme', 'sc_theme_setup' );

function sc_theme_setup() {
   add_theme_support( 'align-wide' );
}

?>