<?php

/*
 * Removes emojis
*/

add_action( 'init', 'disable_wp_emojicons' );
function disable_wp_emojicons() {

    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  
    /*
    * In newer or some WordPress installs when activated it trough an error what no such filter existed
    */
    
    // add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  }

/*
 * Removes block library & default global styles
*/

// add_action( 'wp_enqueue_scripts', 'wda_remove_wp_block_library_css', 100 );
function wda_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS, if you have WooCommerce activated
    wp_dequeue_style( 'global-styles' );
} 

/*
 * Removes wp-json link
*/
function wda_remove_rest_api () {
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
}
add_action( 'after_setup_theme', 'wda_remove_rest_api' );


/*
 * Removes XML links
*/

function wda_remove_xml() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'wda_remove_xml');

/*
 * Removes DNS Prefetch
*/

remove_action( 'wp_head', 'wp_resource_hints', 2 );

/*
 * Removes WordPress version
*/
remove_action('wp_head', 'wp_generator');