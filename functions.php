<?php

	/**
	 * Aquila functions and definitions
	 *
	 * @link https://developer.wordpress.org/themes/basics/theme-functions/
	 *
	 * @package WordPress
	 * @subpackage Aquila
	 * @since Aquila 1.0
	 */	
	/**
	 * Aquila only works in WordPress 4.7 or later.
	 */

    // echo '<pre>';
    // print_r(get_template_directory_uri(). '/assets/src/library/css/bootstrap.min.css');
    // wp_die();

    function  aquila_enqueue_scripts(){

        // register styles
        wp_register_style( 'stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all');
        wp_register_style( 'bootstrap-style', get_template_directory_uri(). '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
        // register scripts
        wp_register_script( 'jsmain', get_template_directory_uri(). '/assets/jsmain.js', [], filemtime(get_template_directory().'/assets/jsmain.js'), false );
        wp_register_script( 'bootstrap-script', get_template_directory_uri(). '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, 'all');
        // enqueue styles
        wp_enqueue_style( 'stylesheet');
        wp_enqueue_style( 'bootstrap-style');

        // enqueue scripts

        wp_enqueue_script('jsmain');
        wp_enqueue_script('bootstrap-script');
   
   
    }

    add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts');

?>