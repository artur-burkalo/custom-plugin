<?php

/**
 * Plugin Name:       Custom Plugin
 * Plugin URI:        https://devartur.com/
 * Description:       A plugin has been developed to extend and change some functionality in WordPress.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.3
 * Author:            Artur Burkalo
 * Author URI:        https://www.devartur.com/
 */


if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
 * Include automaticly any php files added to includes folder
*/

foreach ( glob( plugin_dir_path( __FILE__ ) . "includes/*.php" ) as $file ) {
    include_once $file;
}

/*
 * Load additional scripts and styles, comment out the add_action if not required
 * Adding new style or script requires to change the name also e.g. custom-style, custom-script
*/

add_action( 'wp_enqueue_scripts', 'custom_script' );
function custom_script() {
    wp_enqueue_style('custom-style', plugins_url( '/assets/css/style.css' , __FILE__ ), array(), '1.0', true);
    wp_enqueue_script( 'custom-script', plugins_url( '/assets/js/script.js' , __FILE__ ), array(), '1.0', true );
}

