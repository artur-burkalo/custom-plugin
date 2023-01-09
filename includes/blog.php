<?php 

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
 * Customising blog post excerpt lenght if required
*/

// add_filter( 'excerpt_length', 'blog_excerpt_length', 999 );
function blog_excerpt_length( $length ) {
    return 20;
}

/*
 * Customising blog post excerpt ending with a custom string
*/

// add_filter( 'excerpt_more', 'blog_excerpt' );
function blog_excerpt( $more ) {
    return '... <span style="color: #0063A6;">Read More</span>';
}