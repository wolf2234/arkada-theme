<?php 
add_action('wp_enqueue_scripts', 'arkada_styles');
add_action('wp_enqueue_scripts', 'arkada_scripts');

function arkada_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

function arkada_scripts() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' );
    wp_enqueue_script( 'jquery' );
    /*
    wp_enqueue_script
    true: this script will be in footer.  
    array('jquery'): this script will add after jquery.
    */
	wp_enqueue_script( 'jq-scripts', get_template_directory_uri() . 'assets/js/jq-scripts.js', array('jquery'), null, true);
	wp_enqueue_script( 'scripts', get_template_directory_uri() . 'assets/js/scripts.js', array('jquery'), null, true);
} 
